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
 *             flexibase - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             flexibase - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');
require_once($CFG->dirroot . "/course/renderer.php");
require_once($CFG->libdir. '/coursecatlib.php');

/*
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_flexibase
 * @copyright  2015
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class theme_flexibase_core_renderer extends core_renderer {

    public function __construct(moodle_page $page, $target) {
        global $PAGE;
        if (!empty($PAGE->theme->settings->alwaysexpandsiteadmin)) {
            navigation_node::require_admin_tree();
        }
        parent::__construct($page, $target);
    }

    /*
     * Render Editing link as a bootstrap style button with fontawesome icon.
     * @param stdclass moodle_url
     * @param string $url
     * return string
     */
    public function edit_button(moodle_url $url) {
        $url->param('sesskey', sesskey());
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $btn = 'btn-danger';
            $title = get_string('turneditingoff');
            $icon = 'fa-power-off';
        } else {
            $url->param('edit', 'on');
            $btn = 'btn-success';
            $title = get_string('turneditingon');
            $icon = 'fa-edit';
        }
        return html_writer::tag('a', html_writer::start_tag('i', array('class' => $icon . ' fa fa-fw')) .
            html_writer::end_tag('i') . $title, array('href' => $url, 'class' => 'btn ' . $btn, 'title' => $title));
    }
    /*
     * Render notifications as a bootstrap style.
     * @param string $classes
     * @param string $message
     * return string
     */
    public function notification($message, $classes = 'notifyproblem') {
        $message = clean_text($message);

        if ($classes == 'notifyproblem') {
            return html_writer::div($message, 'alert alert-danger');
        }
        if ($classes == 'notifywarning') {
            return html_writer::div($message, 'alert alert-warning');
        }
        if ($classes == 'notifysuccess') {
            return html_writer::div($message, 'alert alert-success');
        }
        if ($classes == 'notifymessage') {
            return html_writer::div($message, 'alert alert-info');
        }
        if ($classes == 'redirectmessage') {
            return html_writer::div($message, 'alert alert-block alert-info');
        }
        if ($classes == 'notifytiny') {
            // Not an appropriate semantic alert class!
            return $this->debug_listing($message);
        }
        return html_writer::div($message, $classes);
    }
    /*
     * Render debug listing as a bootstrap style.
     * @param string $message
     * return string
     */
    private function debug_listing($message) {
        $message = str_replace('<ul style', '<ul class="list-unstyled" style', $message);
        return html_writer::tag('pre', $message, array('class' => 'alert alert-info'));
    }
    /*
     * Render navbar for theme styling
     * @param array $items
     * @param string $breadcrumbs
     * return string
     */
    public function navbar() {
        $items = $this->page->navbar->get_items();
        if (empty($items)) { // MDL-46107.
            return '';
        }
        $breadcrumbs = '';
        foreach ($items as $item) {
            $item->hideicon = true;
            $crumb = $this->render($item);
            $class = '';
            if (strpos($crumb, "course/view.php")) {
                $class = 'class="breadcrumbcourse"';
            }
            if (strpos($crumb, "categoryid")) {
                $class = 'class="breadcrumbcategory"';
            }
            $breadcrumbs .= '<li '.$class.'>'.$crumb.'</li>';
        }
        return "<ol class=breadcrumb>$breadcrumbs</ol>";
    }
    /*
     * Render custommenu for theme styling, with custom items
     * @param array $custommenuitems
     * return stdclass $this
     */
    public function custom_menu($custommenuitems = '') {
        // The custom menu is always shown, even if no menu items
        // are configured in the global theme settings page.
        global $CFG;

        if (empty($custommenuitems) && !empty($CFG->custommenuitems)) { // MDL-45507.
            $custommenuitems = $CFG->custommenuitems;
        }
        $custommenu = new custom_menu($custommenuitems, current_language());
        return $this->render_custom_menu($custommenu);
    }
    /*
     * Render custommenu for theme styling, with custom items
     * @param array $menu
     * return string $content
     */
    protected function render_custom_menu(custom_menu $menu) {
        global $PAGE, $OUTPUT, $COURSE;

        if (isloggedin() && !isguestuser()) {
          if (theme_flexibase_get_setting('mmsitehome')) {
            $mycoursetitle = "Site Home";
            $branchtitle = "Site Home";
            $branchlabel = '<i class="fa fa-home"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/', array('redirect' => 0));
            $branchsort  = -9999;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
          }
          if (theme_flexibase_get_setting('mmcalendar')) {
            $mycoursetitle = "Calendar";
            $branchtitle = "Calendar";
            $branchlabel = '<i class="fa fa-calendar"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/calendar/view.php');
            $branchsort  = -9970;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
          }
          if (theme_flexibase_get_setting('mmthemehelp')) {
            $branchtitle = "Theme Help";
            $branchlabel = '<i class="fa fa-question-circle"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/theme/flexibase/pages/contenthelp.php');
            $branchsort  = -9960;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
          }

          if (theme_flexibase_get_setting('mmdashboard')) {
            $branchtitle = get_string('myhome');
            $branchlabel = '<i class="fa fa-dashboard"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = -9990;

            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);

            list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();

            if ($sortedcourses) {
                foreach ($sortedcourses as $course) {
                    if ($course->visible) {
                        $branch->add(format_string($course->fullname),
                                new moodle_url('/course/view.php?id='.$course->id),
                                format_string($course->shortname));
                    }
                }
            } else {
                $noenrolments = get_string('noenrolments', 'theme_flexibase');
                $branch->add('<em>'.$noenrolments.'</em>', new moodle_url('/'), $noenrolments);
            }
          }
          if (theme_flexibase_get_setting('mmthiscourse')) {
            if (ISSET($COURSE->id) && $COURSE->id > 1) {
                $branchtitle = get_string('thiscourse', 'theme_flexibase');
                $branchlabel = '<i class="fa fa-sitemap"></i>&nbsp;'.$branchtitle;
                $branchurl = new moodle_url('#');
                $branch = $menu->add($branchlabel, $branchurl, $branchtitle, -9980);

                $branchtitle = "People";
                $branchlabel = $OUTPUT->pix_icon('i/group', '', '', array('class' => 'icon')).$branchtitle;
                $branchurl = new moodle_url('/user/index.php', array('id' => $PAGE->course->id));
                $branch->add($branchlabel, $branchurl, $branchtitle, -9979);

                $branchtitle = "Grades";
                $branchlabel = $OUTPUT->pix_icon('i/grades', '', '', array('class' => 'icon')).$branchtitle;
                $branchurl = new moodle_url('/grade/report/index.php', array('id' => $PAGE->course->id));
                $branch->add($branchlabel, $branchurl, $branchtitle, -9978);

                $data = theme_flexibase_get_course_activities();

                foreach ($data as $modname => $modfullname) {
                    if ($modname === 'resources') {
                        $icon = $OUTPUT->pix_icon('icon', '', 'mod_page', array('class' => 'icon'));
                        $branch->add($icon.$modfullname, new moodle_url('/course/resources.php',
                                array('id' => $PAGE->course->id)));
                    } else {
                        $icon = '<img src="'.$OUTPUT->pix_url('icon', $modname) . '" class="icon" alt="" />';
                        $branch->add($icon.$modfullname, new moodle_url('/mod/'.$modname.'/index.php',
                                array('id' => $PAGE->course->id)));
                    }
                }
            }
          }
        }
        // TODO: eliminate this duplicated logic, it belongs in core, not
        // here. See MDL-39565.

        $content = '<ul class="nav navbar-nav">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return $content.'</ul>';
    }
    /*
     * Render theme specific user menu
     * @param string $user
     * @param string $withlinks
     * return stdclass $this
     */
    public function flexibase_user_menu() {
        $usermenu = new custom_menu('', current_language());
        return $this->flexibase_render_user_menu($usermenu);
    }
    /*
     * Render ctheme specific user menu
     * @param array $menu
     * return string $content
     */
    protected function flexibase_render_user_menu(custom_menu $menu) {
        global $CFG, $USER, $DB;

        $addusermenu = true;
        $addlangmenu = true;

        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2
        or empty($CFG->langmenu)
        or ($this->page->course != SITEID and !empty($this->page->course->lang))) {
            $addlangmenu = false;
        }

        if ($addlangmenu) {
            $language = $menu->add(get_string('language'), new moodle_url('#'), get_string('language'), 10000);
            foreach ($langs as $langtype => $langname) {
                $language->add($langname, new moodle_url($this->page->url, array('lang' => $langtype)), $langname);
            }
        }

        if ($addusermenu) {
            if (isloggedin()) {
                $course = $this->page->course;
                $context = context_course::instance($course->id);
                $usermenu = $menu->add(fullname($USER), new moodle_url('#'), fullname($USER), 10001);
                // RO Added based on flexibase.
            if (theme_flexibase_get_setting('umprofile')) {
                if (\core\session\manager::is_loggedinas()) {
                    $realuser = \core\session\manager::get_realuser();
                    $usermenu->add(
                        '<em><i class="fa fa-key"> </i>' .' '. fullname($realuser, true) .
                                get_string('loggedinas', 'theme_flexibase') . fullname($USER, true) . '</em>',
                        new moodle_url('/user/profile.php', array('id' => $USER->id)),
                        get_string('loggedinas', 'theme_flexibase')
                    );
                } else {
                    $usermenu->add(
                        '<em><i class="fa fa-user"> </i>' .' '. fullname($USER, true) . '</em>',
                        new moodle_url('/user/profile.php', array('id' => $USER->id)),
                        fullname($USER, true)
                    );
                }
                if (is_mnet_remote_user($USER) && $idprovider = $DB->get_record('mnet_host', array('id' => $USER->mnethostid))) {
                    $usermenu->add(
                        '<em><i class="fa fa-users"></i>' .' '. get_string('loggedinfrom', 'theme_flexibase')
                                . $idprovider->name . '</em>',
                        new moodle_url($idprovider->wwwroot),
                        get_string('loggedinfrom', 'theme_flexibase')
                    );
                }
                if (is_role_switched($course->id)) { // Has switched roles.
                    $usermenu->add(
                        '<em><i class="fa fa-users"></i>' .' '. get_string('switchrolereturn') . '</em>',
                        new moodle_url('/course/switchrole.php', array('id' => $course->id,
                                                                       'sesskey' => sesskey(),
                                                                       'switchrole' => 0,
                                                                       'returnurl' => $this->page->url->out_as_local_url(false))),
                        get_string('switchrolereturn')
                    );
                }
                $usermenu->add('<hr class="sep">');
            }
            if (theme_flexibase_get_setting('umdashboard')) {
                    $usermenu->add(
                        '<em><i class="fa fa-dashboard"></i>' .' '. get_string('myhome') . '</em>',
                        new moodle_url('/my/index.php'), get_string('myhome')
                    );
            }
            if (theme_flexibase_get_setting('umcalendar')) {
                    $usermenu->add(
                        '<em><i class="fa fa-calendar"></i>' .' '. get_string('calendar', 'calendar') . '</em>',
                        new moodle_url('/calendar/view.php'),
                        get_string('calendar', 'calendar')
                    );
            }
            if (theme_flexibase_get_setting('umdashboard') ||
            theme_flexibase_get_setting('umcalendar')) {
                $usermenu->add('<hr class="sep">');
            }

            if (theme_flexibase_get_setting('umeditprofile')) {
                if (has_capability('moodle/user:editownprofile', $context)) {
                    $usermenu->add(
                        '<em><i class="fa fa-user"></i>' .' '. get_string('editmyprofile') . '</em>',
                        new moodle_url('/user/edit.php', array('id' => $USER->id)),
                        get_string('editmyprofile')
                    );
                }
            }
            if (theme_flexibase_get_setting('umpassword')) {
                if (has_capability('moodle/user:changeownpassword', $context)) {
                    $usermenu->add(
                        '<em><i class="fa fa-key"></i>' .' '. get_string('changepassword') . '</em>',
                        new moodle_url('/login/change_password.php'),
                        get_string('changepassword')
                    );
                }
            }
            if (theme_flexibase_get_setting('umpreferences')) {
                    $usermenu->add(
                        '<em><i class="fa fa-cog"></i>' .' '. get_string('preferences') . '</em>',
                        new moodle_url('/user/preferences.php'),
                        get_string('preferences')
                    );
            }

            if (theme_flexibase_get_setting('ummessagepreferences')) {
                if (has_capability('moodle/user:editownmessageprofile', $context)) {
                    $usermenu->add(
                        '<em><i class="fa fa-comments"></i>' .' '. get_string('messagepreferences', 'theme_flexibase') . '</em>',
                        new moodle_url('/message/edit.php', array('id' => $USER->id)),
                        get_string('messagepreferences', 'theme_flexibase')
                    );
                }
            }
            if (theme_flexibase_get_setting('umblogpreferences')) {
                if ($CFG->enableblogs) {
                    $usermenu->add(
                        '<em><i class="fa fa-rss-square"></i>' .' '. get_string('blogpreferences', 'theme_flexibase') . '</em>',
                        new moodle_url('/blog/preferences.php'),
                        get_string('blogpreferences', 'theme_flexibase')
                    );
                }
            }
            if (theme_flexibase_get_setting('umbadgepreferences')) {
                if ($CFG->enablebadges && has_capability('moodle/badges:manageownbadges', $context)) {
                    $usermenu->add(
                        '<em><i class="fa fa-certificate"></i>' .' '. get_string('badgepreferences', 'theme_flexibase') . '</em>',
                        new moodle_url('/badges/preferences.php'),
                        get_string('badgepreferences', 'theme_flexibase')
                    );
                }
            }
            if (theme_flexibase_get_setting('umeditprofile') ||
            theme_flexibase_get_setting('umpassword') ||
            theme_flexibase_get_setting('umpreferences') ||
            theme_flexibase_get_setting('ummessagepreferences') ||
            theme_flexibase_get_setting('umblogpreferences') ||
            theme_flexibase_get_setting('umbadgepreferences')) {
                $usermenu->add('<hr class="sep">');
            }
            if (theme_flexibase_get_setting('ummessages')) {
                // Check if messaging is enabled.
                if (!empty($CFG->messaging)) {
                    $usermenu->add(
                        '<em><i class="fa fa-envelope"></i>' .' '. get_string('pluginname', 'block_messages') . '</em>',
                        new moodle_url('/message/index.php'),
                        get_string('pluginname', 'block_messages')
                    );
                }
            }
            if (theme_flexibase_get_setting('umfiles')) {
                // Check if user is allowed to manage files.
                if (has_capability('moodle/user:manageownfiles', $context)) {
                    $usermenu->add(
                        '<em><i class="fa fa-file"></i>' .' '. get_string('privatefiles', 'block_private_files') . '</em>',
                        new moodle_url('/user/files.php'),
                        get_string('privatefiles', 'block_private_files')
                    );
                }
            }
                // Check if user is allowed to view discussions.
                if (has_capability('mod/forum:viewdiscussion', $context)) {
                  if (theme_flexibase_get_setting('umposts')) {
                    $usermenu->add(
                        '<em><i class="fa fa-list-alt"></i>' .' '. get_string('forumposts', 'mod_forum') . '</em>',
                        new moodle_url('/mod/forum/user.php', array('id' => $USER->id)),
                        get_string('forumposts', 'mod_forum')
                    );
                  }
                  if (theme_flexibase_get_setting('umdiscussions')) {
                    $usermenu->add(
                        '<em><i class="fa fa-list"></i>' .' '. get_string('discussions', 'mod_forum') . '</em>',
                        new moodle_url('/mod/forum/user.php', array('id' => $USER->id, 'mode' => 'discussions')),
                        get_string('discussions', 'mod_forum')
                    );
                  }
                }
            if (theme_flexibase_get_setting('ummessages') ||
            theme_flexibase_get_setting('umfiles') ||
            theme_flexibase_get_setting('umposts') ||
            theme_flexibase_get_setting('umdiscussions')) {
                $usermenu->add('<hr class="sep">');
            }

            if (theme_flexibase_get_setting('umgrades')) {
                // Output user grade links course sensitive, workaround for frontpage, selecting first enrolled course.
                if ($course->id == 1) {
                    $hascourses = enrol_get_my_courses(null, 'visible DESC,id ASC', 1);
                    foreach ($hascourses as $hascourse) {
                        $reportcontext = context_course::instance($hascourse->id);
                        if (has_capability('gradereport/user:view', $reportcontext) && $hascourse->visible) {
                            $usermenu->add(
                                '<em><i class="fa fa-list-alt"></i>' .' '. get_string('mygrades', 'theme_flexibase') . '</em>',
                                new moodle_url('/grade/report/overview/index.php',
                                        array('id' => $hascourse->id, 'userid' => $USER->id)),
                                get_string('mygrades', 'theme_flexibase')
                            );
                        }
                    }
                } else if (has_capability('gradereport/user:view', $context)) {
                            $usermenu->add(
                                '<em><i class="fa fa-list-alt"></i>' .' '. get_string('mygrades', 'theme_flexibase') . '</em>',
                                new moodle_url('/grade/report/overview/index.php',
                                        array('id' => $course->id, 'userid' => $USER->id)),
                                get_string('mygrades', 'theme_flexibase')
                            );
                            $usermenu->add(
                                '<em><i class="fa fa-list-alt"></i>' .' '. get_string('coursegrades', 'theme_flexibase') . '</em>',
                                new moodle_url('/grade/report/user/index.php',
                                        array('id' => $course->id, 'userid' => $USER->id)),
                                get_string('coursegrades', 'theme_flexibase')
                            );

                }
            }
            if (theme_flexibase_get_setting('umbadges')) {
                // Check if badges are enabled.
                if (!empty($CFG->enablebadges) && has_capability('moodle/badges:manageownbadges', $context)) {
                    $usermenu->add(
                        '<em><i class="fa fa-certificate"></i>' .' '. get_string('badges') . '</em>',
                        new moodle_url('/badges/mybadges.php'),
                        get_string('badges')
                    );
                }
            }
            if (theme_flexibase_get_setting('umgrades') ||
            theme_flexibase_get_setting('umbadges')) {
                $usermenu->add('<hr class="sep">');
            }

            if (theme_flexibase_get_setting('usermenus')) {
                // User custom menu.
                $usermenus = theme_flexibase_get_setting('usermenus');
                $rows = explode("\n", $usermenus);
                $n = 0;
                foreach ($rows as $row) {
                    $data = explode('|', $row);
                    $usermenu->add(
                        '<em><i class="fa fa-'.$data[2].'"></i> '.$data[0].'</em>',
                        new moodle_url($data[1]), $data[0]);
                    $n++;
                }
                $usermenu->add('<hr class="sep">');
            }
                // Render direct logout link.
                    $usermenu->add(
                        '<em><i class="fa fa-sign-out"></i>' .' '. get_string('logout') . '</em>',
                        new moodle_url('/login/logout.php?sesskey=' . sesskey()),
                        get_string('logout')
                    );

            } else {
                $usermenu = $menu->add(get_string('login'), new moodle_url('/login/index.php'), get_string('login'), 10001);
            }
        }

        $content = '<ul class="nav navbar-nav navbar-right">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }
        return $content.'</ul>';
    }
    /*
     * Render individual items for custommenu for theme styling
     * @param array $menunode
     * @param stdclass custom_menu_item
     * @param $level
     * return string $content
     */
    protected function render_custom_menu_item(custom_menu_item $menunode, $level = 0 ) {
        static $submenucount = 0;

        if ($menunode->has_children()) {

            if ($level == 1) {
                $dropdowntype = 'dropdown';
            } else {
                $dropdowntype = 'dropdown-submenu';
            }

            $content = html_writer::start_tag('li', array('class' => $dropdowntype));
            // If the child has menus render it as a sub menu.
            $submenucount++;
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#cm_submenu_'.$submenucount;
            }
            $linkattributes = array(
                'href' => $url,
                'class' => 'dropdown-toggle',
                'data-toggle' => 'dropdown',
                'title' => $menunode->get_title(),
            );
            $content .= html_writer::start_tag('a', $linkattributes);
            $content .= $menunode->get_text();
            if ($level == 1) {
                $content .= '<b class="caret"></b>';
            }
            $content .= '</a>';
            $content .= '<ul class="dropdown-menu">';
            foreach ($menunode->get_children() as $menunode) {
                $content .= $this->render_custom_menu_item($menunode, 0);
            }
            $content .= '</ul>';
        } else {
            $content = '<li>';
            // The node doesn't have children so produce a final menuitem.
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#';
            }
            $content .= html_writer::link($url, $menunode->get_text(), array('title' => $menunode->get_title()));
        }
        return $content;
    }
    /**
     * Extends tabtree from core, with bootstrap styles
     * @param stdclass tabtree
     * @param array $tabtree
     * @return string
     */
    protected function render_tabtree(tabtree $tabtree) {
        if (empty($tabtree->subtree)) {
            return '';
        }
        $firstrow = $secondrow = '';
        foreach ($tabtree->subtree as $tab) {
            $firstrow .= $this->render($tab);
            if (($tab->selected || $tab->activated) && !empty($tab->subtree) && $tab->subtree !== array()) {
                $secondrow = $this->tabtree($tab->subtree);
            }
        }
        return html_writer::tag('ul', $firstrow, array('class' => 'nav nav-tabs nav-justified')) . $secondrow;
    }
    /**
     * Extends tabtree items from core
     * @param stdclass tabobject
     * @param array $tab
     * @return string
     */
    protected function render_tabobject(tabobject $tab) {
        if ($tab->selected or $tab->activated) {
            return html_writer::tag('li', html_writer::tag('a', $tab->text), array('class' => 'active'));
        } else if ($tab->inactive) {
            return html_writer::tag('li', html_writer::tag('a', $tab->text), array('class' => 'disabled'));
        } else {
            if (!($tab->link instanceof moodle_url)) {
                // Backward compatibility when link was passed as quoted string.
                $link = "<a href=\"$tab->link\" title=\"$tab->title\">$tab->text</a>";
            } else {
                $link = html_writer::link($tab->link, $tab->text, array('title' => $tab->title));
            }
            return html_writer::tag('li', $link);
        }
    }
    /**
     * Extends box from core with bootstrap styles
     * @param array $contents
     * @param string $classes
     * @param string $id
     * @param array $attributes
     * @return stdclass
     */
    public function box($contents, $classes = 'generalbox', $id = null, $attributes = array()) {
        if (isset($attributes['data-rel']) && $attributes['data-rel'] === 'fatalerror') {
            return html_writer::div($contents, 'alert alert-danger', $attributes);
        }
        return parent::box($contents, $classes, $id, $attributes);
    }
    /**
     * Output all the blocks in a particular region.
     *
     * @param string $region the name of a region on this page.
     * @return string the HTML to be output.
     */
    public function blocks_for_region($region) {
        global $USER;
        $blocks = $this->page->blocks->get_blocks_for_region($region);
        $blockcontents = theme_flexibase_block_manager::get_filtered_content($this->page->blocks, $this, $region);
        $lastblock = null;
        $zones = array();
        foreach ($blocks as $block) {
            $zones[] = $block->title;
        }
        $output = '';

        foreach ($blockcontents as $bc) {
            if ($bc instanceof block_contents) {
                // Skip settings and/or navigation blocks as per flexibase theme settings.
                $skipsettings = $this->page->theme->settings->hidesettingsblock || !empty($USER->profile['flexibaseSkipSettingsBlock']);
                $skipnavigation = $this->page->theme->settings->hidenavigationblock || !empty($USER->profile['flexibaseSkipNavigationBlock']);
                $skipblock = $skipsettings && substr($bc->attributes['class'], 0, 15) == 'block_settings ';
                $skipblock = $skipblock || ($skipnavigation && substr($bc->attributes['class'], 0, 17) == 'block_navigation ');
                if (!$skipblock) {
                    $output .= $this->block($bc, $region);
                    $lastblock = $bc->title;
                }
            } else if ($bc instanceof block_move_target) {
                $output .= $this->block_move_target($bc, $zones, $lastblock);
            } else {
                throw new coding_exception('Unexpected type of thing (' . get_class($bc) . ') found in list of block contents.');
            }
        }
        return $output;
    }
    public function favicon() {
        global $PAGE;
        $favicon = $PAGE->theme->setting_file_url('favicon', 'favicon');

        if (empty($favicon)) {
            return $this->page->theme->pix_url('favicon', 'theme');
        } else {
            return $favicon;
        }
    }
    
    /**
     * Renders preferences groups.
     *
     * @param  preferences_groups $renderable The renderable
     * @return string The output.
     */
    public function render_preferences_groups(preferences_groups $renderable) {
        $html = '';
        $html .= html_writer::start_tag('div', array('class' => 'panel panel-primary preferences-groups'));
        $html .= html_writer::start_tag('div', array('class' => 'panel-heading'));
        $html .= html_writer::start_tag('h2');
        $html .= get_string('preferences');
        $html .= html_writer::end_tag('h2');
        $html .= html_writer::end_tag('div'); // Panel-Heading
        $html .= html_writer::start_tag('div', array('class' => 'panel-body prefgrp '));
        $i = 0;
        $open = false;
        foreach ($renderable->groups as $group) {
            if ($i == 0 || $i % 3 == 0) {
                if ($open) {
                    $html .= html_writer::end_tag('div');
                }
                $html .= html_writer::start_tag('div', array('class' => 'flexpreferencescontainer'));
                $open = true;
            }
            $html .= $this->render($group);
            $i++;
        }

        $html .= html_writer::end_tag('div');

        $html .= html_writer::end_tag('ul');
        $html .= html_writer::end_tag('div'); // Panel-Body
        $html .= html_writer::end_tag('div'); // Panel
        return $html;
    }
    /**
     * Renders preferences group.
     *
     * @param  preferences_group $renderable The renderable
     * @return string The output.
     */
    public function render_preferences_group(preferences_group $renderable) {
        $html = '';
        $html .= html_writer::start_tag('div', array('class' => 'panel panel-info preferences-group flexpreferencesitem'));
        $titleclass = preg_replace('/\s+/', '', $renderable->title);
        $html .= html_writer::start_tag('div', array('class' => 'panel-heading '.$titleclass));
        $html .= $this->heading($renderable->title, 3);
        $html .= html_writer::end_tag('div'); // Panel_Heading
        $html .= html_writer::start_tag('div', array('class' => 'panel-body'));
        $html .= html_writer::start_tag('ul');
        foreach ($renderable->nodes as $node) {
            if ($node->has_children()) {
                debugging('Preferences nodes do not support children', DEBUG_DEVELOPER);
            }
            $html .= html_writer::tag('li', $this->render($node));
        }
        $html .= html_writer::end_tag('ul');
        $html .= html_writer::end_tag('div');
        $html .= html_writer::end_tag('div');  // Panel
        return $html;
    }
    /**
     * Prints a nice side block with an optional header.
     *
     * The content is described
     * by a {@link core_renderer::block_contents} object.
     *
     * <div id="inst{$instanceid}" class="block_{$blockname} block">
     *      <div class="header"></div>
     *      <div class="content">
     *          ...CONTENT...
     *          <div class="footer">
     *          </div>
     *      </div>
     *      <div class="annotation">
     *      </div>
     * </div>
     *
     * @param block_contents $bc HTML for the content
     * @param string $region the region the block is appearing in.
     * @return string the HTML to be output.
     */
    public function block(block_contents $bc, $region) {
        $bc = clone($bc); // Avoid messing up the object passed in.
        if (empty($bc->blockinstanceid) || !strip_tags($bc->title)) {
            $bc->collapsible = block_contents::NOT_HIDEABLE;
        }
        if (!empty($bc->blockinstanceid)) {
            $bc->attributes['data-instanceid'] = $bc->blockinstanceid;
        }
        $skiptitle = strip_tags($bc->title);
        if ($bc->blockinstanceid && !empty($skiptitle)) {
            $bc->attributes['aria-labelledby'] = 'instance-'.$bc->blockinstanceid.'-header';
        } else if (!empty($bc->arialabel)) {
            $bc->attributes['aria-label'] = $bc->arialabel;
        }
        if ($bc->dockable) {
            $bc->attributes['data-dockable'] = 1;
        }
        if ($bc->collapsible == block_contents::HIDDEN) {
            $bc->add_class('hidden');
        }
        if (!empty($bc->controls)) {
            $bc->add_class('block_with_controls');
        }
        $bc->add_class('panel panel-primary');

        if (empty($skiptitle)) {
            $output = '';
            $skipdest = '';
        } else {
            $output = html_writer::link('#sb-'.$bc->skipid, get_string('skipa', 'access', $skiptitle),
                      array('class' => 'skip skip-block', 'id' => 'fsb-' . $bc->skipid));
            $skipdest = html_writer::span('', 'skip-block-to',
                      array('id' => 'sb-' . $bc->skipid));
        }

        $output .= html_writer::start_tag('div', $bc->attributes);

        $output .= $this->block_header($bc);
        $output .= $this->block_content($bc);

        $output .= html_writer::end_tag('div');

        $output .= $this->block_annotation($bc);

        $output .= $skipdest;

        $this->init_block_hider_js($bc);
        return $output;
    }

    /**
     * Produces a header for a block
     *
     * @param block_contents $bc
     * @return string
     */
    protected function block_header(block_contents $bc) {

        $title = '';
        if ($bc->title) {
            $attributes = array();
            if ($bc->blockinstanceid) {
                $attributes['id'] = 'instance-'.$bc->blockinstanceid.'-header';
            }
            $title = html_writer::tag('h2', $bc->title, $attributes);
        }

        $blockid = null;
        if (isset($bc->attributes['id'])) {
            $blockid = $bc->attributes['id'];
        }
        $controlshtml = $this->block_controls($bc->controls, $blockid);

        $output = '';
        if ($title || $controlshtml) {
            $output .= html_writer::tag('div', html_writer::tag('div', html_writer::tag('div', '', array('class'=>'block_action')). $title . $controlshtml, array('class' => 'title')), array('class' => 'header panel-heading'));
        }
        return $output;
    }

    /**
     * Produces the content area for a block
     *
     * @param block_contents $bc
     * @return string
     */
    protected function block_content(block_contents $bc) {
        $output = html_writer::start_tag('div', array('class' => 'content panel-body'));
        if (!$bc->title && !$this->block_controls($bc->controls)) {
            $output .= html_writer::tag('div', '', array('class'=>'block_action notitle'));
        }
        $output .= $bc->content;
        $output .= $this->block_footer($bc);
        $output .= html_writer::end_tag('div');

        return $output;
    }

    /**
     * Produces the footer for a block
     *
     * @param block_contents $bc
     * @return string
     */
    protected function block_footer(block_contents $bc) {
        $output = '';
        if ($bc->footer) {
            $output .= html_writer::tag('div', $bc->footer, array('class' => 'footer'));
        }
        return $output;
    }

}
