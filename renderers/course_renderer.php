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
 * Theme Flexibase renderer file.
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

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');
require_once($CFG->dirroot . "/course/renderer.php");
require_once($CFG->libdir. '/coursecatlib.php');
/**
 * The theme course renderer extends core course renderer
 */
class theme_flexibase_core_course_renderer extends core_course_renderer {
    /**
     * Renders a course box object.
     *
     * @param stdclass coursecat_helper
     * @param string $chelper
     * @param string $course
     * @param string $additionalclasses
     * @return string $content
     */
    protected function coursecat_coursebox(coursecat_helper $chelper, $course, $additionalclasses = '') {
        global $CFG, $OUTPUT;
        $type = theme_flexibase_get_setting('frontpagerenderer');
        $additionalcss = '';
        if ($type == 2) {
            $additionalcss = 'hover';
        }
        if ($OUTPUT->body_id() != 'page-site-index') {
            return parent::coursecat_coursebox($chelper, $course, $additionalclasses = '');
        }

        if (!isset($this->strings->summary)) {
            $this->strings->summary = get_string('summary');
        }
        if ($chelper->get_show_courses() <= self::COURSECAT_SHOW_COURSES_COUNT) {
            return '';
        }
        if ($course instanceof stdClass) {
            require_once($CFG->libdir. '/coursecatlib.php');
            $course = new course_in_list($course);
        }
        $content = '';
        $classes = trim($additionalclasses);

        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $classes .= ' collapsed';
        }

        $content .= html_writer::start_tag('div', array('class' => 'col-md-3 panel panel-primary coursebox '.$additionalcss));
        $urlb = new moodle_url('/course/view.php', array('id' => $course->id));
        $content .= "<a href='$urlb'>";
        $coursename = $chelper->get_course_formatted_name($course);
        $content .= html_writer::start_tag('div', array('class' => 'panel-heading'));
        if ($type == 1) {

            $content .= html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)),
                    $coursename, array('class' => $course->visible ? '' : 'dimmed', 'title' => $coursename));
        }
        // If we display course in collapsed form but the course has summary or course contacts, display the link to the info page.
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            if ($course->has_summary() || $course->has_course_contacts() || $course->has_course_overviewfiles()) {
                $url = new moodle_url('/course/info.php', array('id' => $course->id));
                $arrow = html_writer::tag('span', '', array('class' => 'glyphicon glyphicon-info-sign'));
                $content .= html_writer::link('#coursecollapse' . $course->id , '&nbsp;' . $arrow,
                        array('data-toggle' => 'collapse', 'data-parent' => '#frontpage-category-combo'));
            }
        }

        if ($type == 1) {
            $content .= $this->coursecat_coursebox_enrolmenticons($course, $type);
        }

        $content .= html_writer::end_tag('div'); // End .panel-heading.

        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $content .= html_writer::start_tag('div', array('id' => 'coursecollapse' . $course->id,
                    'class' => 'panel-collapse collapse'));
        }

        $content .= html_writer::start_tag('div', array('class' => 'panel-body clearfix'));

        // This gets the course image or files.
        $content .= $this->coursecat_coursebox_content($chelper, $course, $type);

        if ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $icondirection = 'left';
            if ('ltr' === get_string('thisdirection', 'langconfig')) {
                $icondirection = 'right';
            }
            $arrow = html_writer::tag('span', '', array('class' => 'fa fa-chevron-'.$icondirection));
            $btn = html_writer::tag('span', get_string('course') . ' ' . $arrow, array('class' => 'coursequicklink'));
            $content .= html_writer::link(new moodle_url('/course/view.php',
                array('id' => $course->id)), $btn, array('class' => 'coursebtn submit btn btn-info btn-sm pull-right'));
        }

        $content .= html_writer::end_tag('div'); // End .panel-body.

        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $content .= html_writer::end_tag('div'); // End .collapse.
        }

        $content .= html_writer::end_tag('div'); // End .panel.
        return $content;
    }
    /**
     * Renders enrolment icons for coursebox.
     *
     * @param string $course
     * @return string $content
     */
    protected function coursecat_coursebox_enrolmenticons($course) {
        $content = '';
        if ($icons = enrol_get_course_info_icons($course)) {
            $content .= html_writer::start_tag('div', array('class' => 'enrolmenticons'));
            foreach ($icons as $pixicon) {
                $content .= $this->render($pixicon);
            }
            $content .= html_writer::end_tag('div'); // Enrolmenticons.
        }
        return $content;
    }

    /**
     * Renders content for a course box object.
     *
     * @param stdclass coursecat_helper
     * @param string $chelper
     * @param string $course
     * @param integer $type - type1 = No Overlay, type2 = overlay
     * @return string $content
     */
    protected function coursecat_coursebox_content(coursecat_helper $chelper, $course, $type=1) {
        global $CFG, $OUTPUT, $PAGE;
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            return '';
        }
        if ($course instanceof stdClass) {
            require_once($CFG->libdir. '/coursecatlib.php');
            $course = new course_in_list($course);
        }
        $content = '';

        // Display course overview files.
        $contentimages = '';
        $contentfiles = '';
        foreach ($course->get_course_overviewfiles() as $file) {
            $isimage = $file->is_valid_image();
            $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            if ($isimage) {
                if ($type == 1) {
                    $contentimages .= html_writer::start_tag('div', array('class' => 'courseimage'));
                    $link = new moodle_url('/course/view.php', array('id' => $course->id));
                    $contentimages .= html_writer::link($link, html_writer::empty_tag('img', array('src' => $url)));
                    $contentimages .= html_writer::end_tag('div');
                } else {
                    $contentimages .= "<div class='cimbox' style='background: #FFF url($url) no-repeat center center;
                            background-size: contain;'></div>";
                }
            } else {
                $image = $this->output->pix_icon(file_file_icon($file, 24), $file->get_filename(), 'moodle');
                $filename = html_writer::tag('span', $image, array('class' => 'fp-icon')).
                        html_writer::tag('span', $file->get_filename(), array('class' => 'fp-filename'));
                $contentfiles .= html_writer::tag('span',
                        html_writer::link($url, $filename),
                        array('class' => 'coursefile fp-filename-icon'));
            }
        }
        if (strlen($contentimages) == 0 && $type == 2) {
            // Default image.
            $url = $PAGE->theme->setting_file_url('frontpagerendererdefaultimage', 'frontpagerendererdefaultimage');
            $contentimages .= "<div class='cimbox' style='background: #FFF url($url) no-repeat center center;
                    background-size: contain;'></div>";
        }
        $content .= $contentimages. $contentfiles;

        if ($type == 2) {
            $content .= $this->coursecat_coursebox_enrolmenticons($course);
        }

        if ($type == 2) {
            $content .= html_writer::start_tag('div', array('class' => 'coursebox-content'));
            $coursename = $chelper->get_course_formatted_name($course);
            $content .= html_writer::tag('h3', html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)),
                    $coursename, array('class' => $course->visible ? '' : 'dimmed', 'title' => $coursename)));
        }
        $content .= html_writer::start_tag('div', array('class' => 'summary'));
        if (ISSET($coursename)) {
            $content .= html_writer::tag('p', html_writer::tag('b', $coursename));
        }
        // Display course summary.
        if ($course->has_summary()) {

            $summs = $chelper->get_course_formatted_summary($course, array('overflowdiv' => false, 'noclean' => true,
                    'para' => false));
            $summs = strip_tags($summs);
            $var = $PAGE->bodyid;
            if ($var == 'page-site-index') {
                $truncsum = strlen($summs) > 70 ? substr($summs, 0, 70)."..." : $summs;
                $content .= html_writer::tag('span', $truncsum, array('title' => $summs));
            } else {
                $content .= html_writer::tag('span', $summs, array('title' => $summs));
            }

        }

        // Display course contacts. See course_in_list::get_course_contacts().
        if ($course->has_course_contacts()) {
            $content .= html_writer::start_tag('ul', array('class' => 'teachers'));
            foreach ($course->get_course_contacts() as $userid => $coursecontact) {
                $name = $coursecontact['rolename'].': '.
                        html_writer::link(new moodle_url('/user/view.php',
                                array('id' => $userid, 'course' => SITEID)),
                            $coursecontact['username']);
                $content .= html_writer::tag('li', $name);
            }
            $content .= html_writer::end_tag('ul'); // Teachers.
        }
        $content .= html_writer::end_tag('div'); // Summary.

        // Display course category if necessary (for example in search results).
        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_EXPANDED_WITH_CAT) {
            require_once($CFG->libdir. '/coursecatlib.php');
            if ($cat = coursecat::get($course->category, IGNORE_MISSING)) {
                $content .= html_writer::start_tag('div', array('class' => 'coursecat'));
                $content .= get_string('category').': '.
                        html_writer::link(new moodle_url('/course/index.php', array('categoryid' => $cat->id)),
                                $cat->get_formatted_name(), array('class' => $cat->visible ? '' : 'dimmed'));
                $content .= html_writer::end_tag('div'); // Coursecat.
            }
        }
        if ($type == 2) {
            $content .= html_writer::end_tag('div');
        }
        $content .= html_writer::tag('div', '', array('class' => 'boxfooter')); // Coursecat.

        return $content;
    }
    /**
     * Renders a course search form.
     *
     * @param string $value
     * @param string $format
     * @return string $output
     */

    public function course_search_form($value = '', $format = 'plain') {
        static $count = 0;
        $formid = 'coursesearch';
        if ((++$count) > 1) {
            $formid .= $count;
        }
        $inputid = 'coursesearchbox';
        $inputsize = 30;

        if ($format === 'navbar') {
            $formid = 'coursesearchnavbar';
            $inputid = 'navsearchbox';
        }

        $strsearchcourses = get_string("searchcourses");
        $searchurl = new moodle_url('/course/search.php');

        $form = array('id' => $formid, 'action' => $searchurl, 'method' => 'get', 'class' => "form-inline", 'role' => 'form');
        $output = html_writer::start_tag('form', $form);
        $output .= html_writer::start_div('form-group');
        $output .= html_writer::tag('label', $strsearchcourses, array('for' => $inputid, 'class' => 'sr-only'));
        $search = array('type' => 'text', 'id' => $inputid, 'size' => $inputsize, 'name' => 'search',
                        'class' => 'form-control', 'value' => s($value), 'placeholder' => $strsearchcourses);
        $output .= html_writer::empty_tag('input', $search);
        $output .= html_writer::end_div(); // Close form-group.
        $button = array('type' => 'submit', 'class' => 'btn btn-default');
        $output .= html_writer::tag('button', get_string('go'), $button);
        $output .= html_writer::end_tag('form');

        return $output;
    }
    /**
     * Renders mycourses for front page.
     *
     * @return string $content
     */

    public function frontpage_my_courses() {
        global $USER, $CFG, $DB;
        $output = '';
        if (!isloggedin() or isguestuser()) {
            return '';
        }

        $courses = block_course_overview_get_sorted_courses();
        list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();
        if (!empty($sortedcourses) || !empty($rcourses) || !empty($rhosts)) {

            $chelper = new coursecat_helper();
            if (count($courses) > $CFG->frontpagecourselimit) {
                // There are more enrolled courses than we can display, display link to 'My courses'.
                $totalcount = count($sortedcourses);
                $courses = array_slice($sortedcourses, 0, $CFG->frontpagecourselimit, true);
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/my/'),
                        'viewmoretext' => new lang_string('mycourses')
                    ));
            } else {
                // All enrolled courses are displayed, display link to 'All courses' if there are more courses in system.
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/course/index.php'),
                        'viewmoretext' => new lang_string('fulllistofcourses')
                    ));
                $totalcount = $DB->count_records('course') - 1;
            }
            $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->set_attributes(array('class' =>
                    'frontpage-course-list-enrolled'));
            $output .= $this->coursecat_courses($chelper, $sortedcourses, $totalcount);

            if (!empty($rcourses)) {
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rcourses as $course) {
                    $output .= $this->frontpage_remote_course($course);
                }
                $output .= html_writer::end_tag('div');
            } else if (!empty($rhosts)) {
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rhosts as $host) {
                    $output .= $this->frontpage_remote_host($host);
                }
                $output .= html_writer::end_tag('div');
            }
        }
        return $output;
    }

    /**
     * Return the navbar content so that it can be echoed out by the layout
     *
     * @return string XHTML navbar
     */
    public function navbar() {
        $items = $this->page->navbar->get_items();
        $itemcount = count($items);
        if ($itemcount === 0) {
            return '';
        }

        $htmlblocks = array();
        // Iterate the navarray and display each node.
        $separator = get_separator();
        for ($i = 0; $i < $itemcount; $i++) {
            $item = $items[$i];
            $item->hideicon = true;
            if ($i === 0) {
                $content = html_writer::tag('li', $this->render($item));
            } else {
                $content = html_writer::tag('li', $separator.$this->render($item));
            }
            $htmlblocks[] = $content;
        }

        // Accessibility: heading for navbar list  (MDL-20446).
        $navbarcontent = html_writer::tag('span', get_string('pagepath'), array('class' => 'accesshide'));
        $navbarcontent .= html_writer::tag('ul', join('', $htmlblocks), array('role' => 'navigation'));
        return $navbarcontent;
    }

    /**
     * Renders a navigation node object.
     *
     * @param navigation_node $item The navigation node to render.
     * @return string HTML fragment
     */
    protected function render_navigation_node(navigation_node $item) {
        $content = $item->get_content();
        $title = $item->get_title();
        if ($item->icon instanceof renderable && !$item->hideicon) {
            $icon = $this->render($item->icon);
            $content = $icon.$content; // Use CSS for spacing of icons.
        }
        if ($item->helpbutton !== null) {
            $content = trim($item->helpbutton).html_writer::tag('span', $content, array('class' => 'clearhelpbutton',
                    'tabindex' => '0'));
        }
        if ($content === '') {
            return '';
        }
        if ($item->action instanceof action_link) {
            $link = $item->action;
            if ($item->hidden) {
                $link->add_class('dimmed');
            }
            if (!empty($content)) {
                // Providing there is content we will use that for the link content.
                $link->text = $content;
            }
            $content = $this->render($link);
        } else if ($item->action instanceof moodle_url) {
            $attributes = array();
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            $content = html_writer::link($item->action, $content, $attributes);

        } else if (is_string($item->action) || empty($item->action)) {
            $attributes = array('tabindex' => '0'); // Add tab support to span but still maintain character stream sequence.
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            $content = html_writer::tag('span', $content, $attributes);
        }
        return $content;
    }

    protected function coursecat_category(coursecat_helper $chelper, $coursecat, $depth) {
        global $CFG;
        // Open category tag.
        $classes = array('category');
        if (empty($coursecat->visible)) {
            $classes[] = 'dimmed_category';
        }
        if ($chelper->get_subcat_depth() > 0 && $depth >= $chelper->get_subcat_depth()) {
            // Do not load content.
            $categorycontent = '';
            $classes[] = 'notloaded';
            if ($coursecat->get_children_count() ||
                ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_COLLAPSED && $coursecat->get_courses_count())
            ) {
                $classes[] = 'with_children';
                $classes[] = 'collapsed';
            }
        } else {
            // Load category content.
            $categorycontent = $this->coursecat_category_content($chelper, $coursecat, $depth);
            $classes[] = 'loaded';
            if (!empty($categorycontent)) {
                $classes[] = 'with_children';
            }
        }
        $classes[] = 'flexibasecats panel panel-primary';

        if (intval($CFG->version) >= 2013111800) {
            // Make sure JS file to expand category content is included.
            $this->coursecat_include_js();
        }

        $content = html_writer::start_tag('div', array(
            'class' => join(' ', $classes),
            'data-categoryid' => $coursecat->id,
            'data-depth' => $depth,
            'data-showcourses' => $chelper->get_show_courses(),
            'data-type' => self::COURSECAT_TYPE_CATEGORY,
        ));

        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_COUNT) {
            $coursescount = $coursecat->get_courses_count();
            $content .= html_writer::tag('span', ' (' . $coursescount . ')',
                array('title' => get_string('numberofcourses'), 'class' => 'numberofcourse'));
        }

        // Category name.
        $categoryname = html_writer::tag('span', $coursecat->get_formatted_name());

        $categoryiconnum = 'categoryicon' . $coursecat->id;

        // Do a settings check to output our icon for the category.
        if (theme_flexibase_get_setting('enablecategoryicon')) {
            if (theme_flexibase_get_setting($categoryiconnum) &&
                theme_flexibase_get_setting('enablecustomcategoryicon')
            ) {
                // User has set a value for the category.
                $val = theme_flexibase_get_setting($categoryiconnum);
            } else {
                // User hasn't set a value for the category, get the default.
                $val = theme_flexibase_get_setting('defaultcategoryicon');
            }
        }
        if (!empty($val)) {
            $icon = html_writer::tag('i', '', array('class' => 'fa fa-' . $val));
        } else {
            $icon = '';
        }

        $categoryname = html_writer::link(new moodle_url('/course/index.php',
                array('categoryid' => $coursecat->id)),
            $icon . $categoryname);
        $content .= html_writer::start_tag('div', array('class' => 'info'));

        $content .= html_writer::tag(($depth > 1) ? 'h4' : 'h3', $categoryname, array('class' => 'categoryname'));
        $content .= html_writer::end_tag('div');

        // Add category content to the output.
        $content .= html_writer::tag('div', $categorycontent, array('class' => 'content'));

        $content .= html_writer::end_tag('div');
        return $content;
    }
}
