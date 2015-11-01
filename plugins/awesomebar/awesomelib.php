<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Flexibase lib file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class theme_flexibase_dummy_page extends moodle_page {
    /**
     * REALLY Set the main context to which this page belongs.
     * @param object $context a context object, normally obtained with context_XXX::instance.
     */
    public function set_context($context) {
        if ($context === null) {
            // Extremely ugly hack which sets context to some value in order to prevent warnings,
            // use only for core error handling!!!!
            if (!$this->_context) {
                $this->_context = context_system::instance();
            }
            return;
        }
        $this->_context = $context;
    }
}

class theme_flexibase_expand_navigation extends global_navigation {

    /** @var array */
    protected $expandable = array();
    private $expandtocourses = true;
    private $expandedcourses = array();

    /**
     * Constructs the navigation for use in AJAX request
     */
    public function __construct($page, $branchtype, $id) {
        $this->page = $page;
        $this->cache = new navigation_cache(NAVIGATION_CACHE_NAME);
        $this->children = new navigation_node_collection();
        $this->branchtype = $branchtype;
        $this->instanceid = $id;
        $this->initialise();
    }
    /**
     * Initialise the navigation given the type and id for the branch to expand.
     *
     * @param int $branchtype One of navigation_node::TYPE_*
     * @param int $id
     * @return array The expandable nodes
     */
    public function initialise() {
        global $CFG, $DB, $SITE, $PAGE;

        if ($this->initialised || during_initial_install()) {
            return $this->expandable;
        }
        $this->initialised = true;

        $this->rootnodes = array();
        $this->rootnodes['site']      = $this->add_course($SITE);
        $this->rootnodes['currentcourse'] = $this->add(get_string('currentcourse'),
                null, self::TYPE_ROOTNODE, null, 'currentcourse');
        $this->rootnodes['mycourses'] = $this->add(get_string('mycourses'),
                new moodle_url('/my'), self::TYPE_ROOTNODE, null, 'mycourses');
        $this->rootnodes['courses'] = $this->add(get_string('courses'),
                null, self::TYPE_ROOTNODE, null, 'courses');

        if (!empty($PAGE->theme->settings->coursesleafonly) ||
                (!empty($PAGE->theme->settings->coursesloggedinonly) &&
                !isloggedin())) {
            $this->expandtocourses = false;
        }

        if (function_exists('enrol_user_sees_own_courses')) {
            // Determine if the user is enrolled in any course.
            $enrolledinanycourse = enrol_user_sees_own_courses();

            if ($enrolledinanycourse) {
                $this->rootnodes['mycourses']->isexpandable = true;
                if ($CFG->navshowallcourses) {
                    // When we show all courses we need to show both the my courses and the regular courses branch.
                    $this->rootnodes['courses']->isexpandable = true;
                }
            } else {
                $this->rootnodes['courses']->isexpandable = true;
            }
        }

        $PAGE->requires->data_for_js('siteadminexpansion', false);

        $this->expand($this->branchtype, $this->instanceid);
        $this->expand(self::TYPE_ROOTNODE, 'mycourses'); // Force expansion of "My Courses" branch.
    }

    public function expand($branchtype, $id) {
        global $CFG, $DB, $PAGE, $USER;
        static $flexibasecourseactivities = array();
        // Branchtype will be one of navigation_node::TYPE_*.
        switch ($branchtype) {
            case self::TYPE_ROOTNODE :
            case self::TYPE_SITE_ADMIN :
                if ($id === 'mycourses') {
                    $this->rootnodes['mycourses']->isexpandable = true;
                    $this->load_courses_enrolled();
                } else if ($id === 'courses') {
                    if ($this->expandtocourses) {
                        $this->rootnodes['courses']->isexpandable = true;
                        $this->load_courses_other();
                    } else {
                        // Don't load courses - theme settings say we shouldn't.
                        $this->rootnodes['courses']->isexpandable = false;
                        $this->rootnodes['courses']->nodetype = self::NODETYPE_LEAF;
                    }
                }
                break;
            case self::TYPE_CATEGORY :
            case self::TYPE_MY_CATEGORY :
                if (!empty($PAGE->theme->settings->coursesleafonly)) {
                    return false;
                }
                $this->load_all_categories($id);
                $limit = 20;
                if (!empty($CFG->navcourselimit)) {
                    $limit = (int)$CFG->navcourselimit;
                }
                $courses = $DB->get_records('course', array('category' => $id), 'sortorder', '*', 0, $limit);
                foreach ($courses as $course) {
                    $this->add_course($course);
                }
                break;
            case self::TYPE_COURSE :
                $course = $DB->get_record('course', array('id' => $id), '*', MUST_EXIST);
                try {
                    if (!array_key_exists($course->id, $this->expandedcourses)) {
                        $coursenode = $this->add_course($course);
                        if (!$coursenode) {
                            break;
                        }
                        if ($PAGE->course->id !== $course->id) {
                            $coursenode->nodetype = navigation_node::NODETYPE_LEAF;
                            $coursenode->isexpandable = false;
                            break;
                        }
                        $coursecontext = context_course::instance($course->id);
                        $this->page->set_context($coursecontext);
                        $this->add_course_essentials($coursenode, $course);
                        if ($PAGE->course->id == $course->id && (!method_exists($this, 'format_display_course_content')
                                || $this->format_display_course_content($course->format))) {
                            if (is_enrolled($coursecontext, $USER, '', true)) {
                                $this->expandedcourses[$course->id] = $this->expand_course($course, $coursenode);
                            }
                        }
                    }
                } catch (require_login_exception $rle) {
                    $coursenode = $this->add_course($course);
                }
                break;
            case self::TYPE_SECTION :
                $sql = 'SELECT c.*, cs.section AS sectionnumber
                        FROM {course} c
                        LEFT JOIN {course_sections} cs ON cs.course = c.id
                        WHERE cs.id = ?';
                $course = $DB->get_record_sql($sql, array($id), MUST_EXIST);
                try {
                    $this->page->set_context(context_course::instance($course->id));
                    if (!array_key_exists($course->id, $this->expandedcourses)) {
                        $coursenode = $this->add_course($course);
                        if (!$coursenode) {
                            break;
                        }
                        $this->add_course_essentials($coursenode, $course);
                        $this->expandedcourses[$course->id] = $this->expand_course($course, $coursenode);
                    }
                    if (property_exists($PAGE->theme->settings, 'expandtoactivities') &&
                            $PAGE->theme->settings->expandtoactivities) {
                        if (!array_key_exists($course->id, $flexibasecourseactivities)) {
                            list($sectionarray, $activities) = $this->generate_sections_and_activities($course);
                            $flexibasecourseactivities[$course->id] = $activities;
                        }
                        $sections = $this->expandedcourses[$course->id];
                        $activities = $flexibasecourseactivities[$course->id];

                        if (!array_key_exists($course->sectionnumber, $sections)) {
                            break;
                        }
                        $section = $sections[$course->sectionnumber];
                        if (is_null($section) || is_null($section->sectionnode)) {
                            break;
                        }
                        $activitynodes = $this->load_section_activities($section->sectionnode, $course->sectionnumber, $activities);
                        foreach ($activitynodes as $id => $node) {
                            // Load all section activities now.
                            $cmstub = new stdClass();
                            $cmstub->id = $id;
                            $this->load_activity($cmstub, $course, $node);
                        }
                    }
                } catch (require_login_exception $rle) {
                    $coursenode = $this->add_course($course);
                }
                break;
            case self::TYPE_ACTIVITY :
                // Now expanded above, as part of the section expansion.
                break;
            default:
                throw new Exception('Unknown type');
                return $this->expandable;
        }
        return $this->expandable;
    }
    private function expand_course(stdClass $course, navigation_node $coursenode) {
        $sectionnodes = $this->load_course_sections($course, $coursenode);
        if (empty($sectionnodes)) {
            // 2.4 compat - load_course_sections no longer returns the list of sections.
            $sectionnodes = array();
            foreach ($coursenode->children as $node) {
                if ($node->type != self::TYPE_SECTION) {
                    continue;
                }
                $section = new stdClass();
                $section->sectionnode = $node;
                // Get section number out of action URL (it doesn't seem to be available elsewhere!).
                $hasparams = false;
                if (!empty($node->action) && $params = $node->action->params()) {
                    $hasparams = true;
                }
                if ($hasparams && array_key_exists('section', $params)) {
                    $sectionnodes[$params['section']] = $section;
                } else {
                    $sectionnodes[] = $section;
                }
            }
            $expanded = $sectionnodes;
        }
        return $sectionnodes;
    }

    /**
     * Loads all of the activities for a section into the navigation structure.
     *
     * @param navigation_node $sectionnode
     * @param int $sectionnumber
     * @param array $activities An array of activites as returned by {@link global_navigation::generate_sections_and_activities()}
     * @param stdClass $course The course object the section and activities relate to.
     * @return array Array of activity nodes
     */
    protected function load_section_activities(navigation_node $sectionnode, $sectionnumber, array $activities, $course = null) {
        global $CFG, $SITE;
        // A static counter for JS function naming.
        static $legacyonclickcounter = 0;

        $activitynodes = array();
        if (empty($activities)) {
            return $activitynodes;
        }

        if (!is_object($course)) {
            $activity = reset($activities);
            $courseid = $activity->course;
        } else {
            $courseid = $course->id;
        }
        $showactivities = ($courseid != $SITE->id || !empty($CFG->navshowfrontpagemods));

        foreach ($activities as $activity) {
            if ($activity->section != $sectionnumber) {
                continue;
            }
            if ($activity->icon) {
                $icon = new pix_icon($activity->icon, get_string('modulename', $activity->modname), $activity->iconcomponent);
            } else {
                $icon = new pix_icon('icon', get_string('modulename', $activity->modname), $activity->modname);
            }

            // Prepare the default name and url for the node.
            $activityname = format_string($activity->name, true, array('context' => context_module::instance($activity->id)));
            $action = new moodle_url($activity->url);

            // Legacy onclick removed from flexibase - clicking in Awesomebar should go to the page, not trigger popups etc.

            $activitynode = $sectionnode->add($activityname, $action, navigation_node::TYPE_ACTIVITY, null, $activity->id, $icon);
            $activitynode->title(get_string('modulename', $activity->modname));
            $activitynode->hidden = $activity->hidden;
            $activitynode->display = $showactivities && $activity->display;
            $activitynode->nodetype = $activity->nodetype;
            $activitynodes[$activity->id] = $activitynode;
        }

        return $activitynodes;
    }

    /**
     * They've expanded the 'my courses' branch.
     */
    protected function load_courses_enrolled() {
        global $DB;

        static $expandedmycourses = false;
        if ($expandedmycourses) {
            return;
        } else {
            $expandedmycourses = true;
        }

        $courses = enrol_get_my_courses();
        if (count($courses) == 0) {
            // No enrolments, so don't try to populate.
            return;
        }

        if ($this->show_my_categories(true)) {
            // OK Actually we are loading categories. We only want to load categories that have a parent of 0.
            // In order to make sure we load everything required we must first find the categories that are not
            // base categories and work out the bottom category in thier path.
            $categoryids = array();
            $toplevelcats = array();
            foreach ($courses as $course) {
                $categoryids[] = $course->category;
                $toplevelcats[$course->category] = $course->category;
            }
            $categoryids = array_unique($categoryids);
            list($sql, $params) = $DB->get_in_or_equal($categoryids);
            $categories = $DB->get_recordset_select('course_categories', 'id '.$sql.
                    ' AND parent <> 0', $params, 'sortorder, id', 'id, path');
            foreach ($categories as $category) {
                $bits = explode('/', trim($category->path, '/'));
                $toplevelcats[$category->id] = $bits[0];
                $categoryids[] = array_shift($bits);
            }
            $categoryids = array_unique($categoryids);
            $categories->close();

            // Now we load the base categories.
            list($sql, $params) = $DB->get_in_or_equal($categoryids);
            $categories = $DB->get_recordset_select('course_categories', 'id '.$sql.' AND parent = 0', $params, 'sortorder, id');
            foreach ($categories as $category) {
                $this->add_category($category, $this->rootnodes['mycourses'], self::TYPE_MY_CATEGORY);
            }
            $categories->close();
            foreach ($courses as $course) {
                $cat = $this->rootnodes['mycourses']->find($toplevelcats[$course->category], self::TYPE_MY_CATEGORY);
                $node = $this->add_course_to($course, false, self::COURSE_MY, $cat);
            }
        } else {
            foreach ($courses as $course) {
                $node = $this->add_course($course, false, self::COURSE_MY);
                if (!$this->rootnodes['mycourses']->find($node->key, self::TYPE_COURSE)) {
                    // Hasn't been added to this node.
                    $this->rootnodes['mycourses']->add_node($node);
                }
            }
        }
    }

    /**
     * Adds a structured category to the navigation in the correct order/place
     *
     * @param stdClass $category
     * @param navigation_node $parent
     */
    protected function add_category(stdClass $category, navigation_node $parent, $nodetype = self::TYPE_CATEGORY) {
        if ((!$this->expandtocourses && $parent->key == 'courses') || $parent->find($category->id, self::TYPE_CATEGORY)) {
            return;
        }
        $url = new moodle_url('/course/category.php', array('id' => $category->id));
        $context = context_coursecat::instance($category->id);
        $categoryname = format_string($category->name, true, array('context' => $context));
        $categorynode = $parent->add($categoryname, $url, $nodetype, $categoryname, $category->id);
        if (empty($category->visible)) {
            if (has_capability('moodle/category:viewhiddencategories', context_system::instance())) {
                $categorynode->hidden = true;
            } else {
                $categorynode->display = false;
            }
        }
        if ($nodetype !== self::TYPE_MY_CATEGORY) {
            $this->addedcategories[$category->id] = $categorynode;
        }
    }

    /**
     * Adds the given course to the navigation structure, under a specified parent.
     *
     * @param stdClass $course
     * @param bool $forcegeneric
     * @param bool $ismycourse
     * @return navigation_node
     */
    public function add_course_to(stdClass $course,
                                  $forcegeneric = false,
                                  $coursetype = self::COURSE_OTHER,
                                  navigation_node $parent) {
        global $CFG, $SITE;
        $coursecontext = context_course::instance($course->id);

        if ($course->id != $SITE->id && !$course->visible) {
/*          Remove empty IF statement from upstream awesomebar code - left in for reference.
 *          if (is_role_switched($course->id)) {
 *              // User has to be able to access course in order to switch, let's skip the visibility test here.
 *          } else if (!has_capability('moodle/course:viewhiddencourses', $coursecontext)) {
 */
            if (!has_capability('moodle/course:viewhiddencourses', $coursecontext)) {
                return false;
            }
        }

        $shortname = format_string($course->shortname, true, array('context' => $coursecontext));

        $url = new moodle_url('/course/view.php', array('id' => $course->id));

        $coursenode = $parent->add($shortname, $url, self::TYPE_COURSE, $shortname, $course->id);
        $coursenode->nodetype = self::NODETYPE_BRANCH;
        $coursenode->hidden = (!$course->visible);
        $coursenode->title(format_string($course->fullname, true, array('context' => $coursecontext)));

        return $coursenode;
    }
    public function add_course(stdClass $course, $forcegeneric = false, $coursetype = self::COURSE_OTHER) {
        global $PAGE;
        if (!$forcegeneric && array_key_exists($course->id, $this->addedcourses)) {
            return $this->addedcourses[$course->id];
        }
        if ($coursetype == self::COURSE_OTHER && $PAGE->course->id == $course->id) {
            $coursetype = self::COURSE_CURRENT;
        }
        if ($this->expandtocourses || $coursetype == self::COURSE_MY || $coursetype == self::COURSE_CURRENT) {
            return parent::add_course($course, $forcegeneric, $coursetype);
        }
        return false;
    }

    /**
     * They've expanded the general 'courses' branch.
     */
    protected function load_courses_other() {
        if (!$this->expandtocourses) {
            return;
        }
        $this->load_all_courses();
    }
    protected function load_all_courses($categoryids = null) {
        if (!$this->expandtocourses) {
            return array();
        }
        return parent::load_all_courses($categoryids);
    }


    public function get_expandable() {
        return $this->expandable;
    }
}
