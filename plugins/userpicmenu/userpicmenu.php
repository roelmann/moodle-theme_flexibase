<?php
// You can add those two function to your theme core renderer overrides
// inside theme_{theme-name}_core_renderer which is usually inside {theme-name}/renderers/core_renderer.php
//
// It will add a popup (overlay) quick action menu when a Teacher or Admin is clicking a user's picture, anywhere in Moodle.
//
// Security warrning: This is work in progress!!!
//
// See more details here: https://moodle.org/mod/forum/discuss.php?d=261224#p1145963
//

protected function render_user_picture(user_picture $userpicture) {
        global $CFG, $DB, $PAGE, $USER;

        $user = $userpicture->user;

        if ($userpicture->alttext) {
            if (!empty($user->imagealt)) {
                $alt = $user->imagealt;
            } else {
                $alt = get_string('pictureof', '', fullname($user));
            }
        } else {
            $alt = '';
        }

        if (empty($userpicture->size)) {
            $size = 35;
        } else if ($userpicture->size === true or $userpicture->size == 1) {
            $size = 100;
        } else {
            $size = $userpicture->size;
        }

        $class = $userpicture->class;

        if ($user->picture == 0) {
            $class .= ' defaultuserpic';
        }

        if (user_has_role_assignment($user->id, 3 /* editingteacher */, $PAGE->context->id)) {
            $class .= ' teacher';
        }

        $src = $userpicture->get_url($this->page, $this);

        $attributes = array('src'=>$src, 'alt'=>$alt, 'title'=>$alt, 'class'=>$class, 'width'=>$size, 'height'=>$size);
        if (!$userpicture->visibletoscreenreaders) {
            $attributes['role'] = 'presentation';
        }

        if (empty($userpicture->courseid)) {
            $courseid = $this->page->course->id;
        } else {
            $courseid = $userpicture->courseid;
        }

        // get the image html output fisrt
        $output = html_writer::start_tag('div', array('class'=>'profilepicture'));
        if ((user_has_role_assignment($USER->id, 3 /* editingteacher */, $PAGE->context->id)
            OR user_has_role_assignment($USER->id, 1 /* manager */, $PAGE->context->id)
            OR array_key_exists($USER->id, get_admins()) )
            AND ($userpicture->link and $size >= 35) ) {
                //if ($userpicture->link and $size >= 35) {
                    $output .= $this->user_action_menu($user->id, $courseid, $attributes);
                //}
        } else {
            $output .= html_writer::empty_tag('img', $attributes);
        }

        $output .= html_writer::end_tag('div');

        /*
        if (user_has_role_assignment($user->id,3,$PAGE->context->id)) {
            $output .= html_writer::start_tag('div',array('style'=>'position: relative;top: -20px;right: 20px;'));
            $output .= html_writer::empty_tag('img', array('id'=>'roleimg',
                'src'=>new moodle_url('/theme/essential/pix_core/i/grademark.png')) );
            $output .= html_writer::end_tag('div');
        }
        */

        // then wrap it in link if needed
        if (!$userpicture->link) {
            return $output;
        }

        if ($courseid == SITEID) {
            $url = new moodle_url('/user/profile.php', array('id' => $user->id));
        } else {
            $url = new moodle_url('/user/view.php', array('id' => $user->id, 'course' => $courseid));
        }

        $attributes = array('href' => $url);
        if (!$userpicture->visibletoscreenreaders) {
            $attributes['tabindex'] = '-1';
            $attributes['aria-hidden'] = 'true';
        }

        /* Disabled. Now it is used for User's Action menu.
        if ($userpicture->popup) {

            $id = html_writer::random_id('userpicture');
            $attributes['id'] = $id;
            $this->add_action_handler(new popup_action('click', $url), $id);

        }
        */
        return html_writer::tag('a', $output, $attributes);

        //return $output;
        //return html_writer::tag('div', $output, array('onclick'=>'alert("hello")'));
    }

    private function user_action_menu($userid, $courseid = SITEID, $attributes ) {

        global $USER, $CFG, $DB;

        $edit = '';
        $actions = array();

        // Action URLs

        // View user's profile
        if ($courseid == SITEID) {
            $url = new moodle_url('/user/profile.php', array('id' => $userid));
        } else {
            $url = new moodle_url('/user/view.php', array('id' => $userid, 'course' => $courseid));
        }
        $actions[$url->out(false)] = get_string('user_viewprofile','theme_essential');

        // View user's complete report
        $url = new moodle_url('/report/outline/user.php',
            array('id' => $userid, 'course'=>$courseid, 'mode'=>'complete'));
        $actions[$url->out(false)] = get_string('user_completereport','theme_essential');

        // View user's outline report
        $url = new moodle_url('/report/outline/user.php',
            array('id' => $userid, 'course'=>$courseid, 'mode'=>'outline'));
        $actions[$url->out(false)] = get_string('user_outlinereport','theme_essential');

        // Edit user's profile
        $url = new moodle_url('/user/editadvanced.php', array('id' => $userid, 'course'=>$courseid));
        $actions[$url->out(false)] = get_string('user_editprofile','theme_essential');

        // Send private message
        if ($USER->id != $userid) {
            $url = new moodle_url('/message/index.php', array('id'=>$userid));
            $actions[$url->out(false)] = get_string('user_sendmessage','theme_essential');
        }

        // Completion enabled in course? Display user's link to completion report.
        $coursecompletion = $DB->get_field('course', 'enablecompletion', array('id' => $courseid));
        if (!empty($CFG->enablecompletion) AND $coursecompletion) {
            $url = new moodle_url('/blocks/completionstatus/details.php', array('user' => $userid, 'course'=>$courseid));
            $actions[$url->out(false)] = get_string('user_coursecompletion','theme_essential');
        }

        // All user's mdl_log HITS
        $url = new moodle_url('/report/log/user.php', array('id' => $userid, 'course'=>$courseid, 'mode'=>'all'));
        $actions[$url->out(false)] = get_string('user_courselogs','theme_essential');

        // User's grades in course ID
        $url = new moodle_url('/grade/report/user/index.php', array('userid' => $userid, 'id'=>$courseid));
        $actions[$url->out(false)] = get_string('user_coursegrades','theme_essential');

        // Login as ...
        $coursecontext = context_course::instance($courseid);
        if ($USER->id != $userid && !\core\session\manager::is_loggedinas() && has_capability('moodle/user:loginas', $coursecontext) && !is_siteadmin($userid)) {
            $url = new moodle_url('/course/loginas.php', array('id'=>$courseid, 'user'=>$userid, 'sesskey'=>sesskey()));
            $actions[$url->out(false)] = get_string('user_loginas','theme_essential');
        }
        
        // Reset user's password to original password (stored in user.url profile field)
        $coursecontext = context_course::instance($courseid);
        if ($USER->id != $userid && !\core\session\manager::is_loggedinas() || in_array($USER->id, $CFG->siteadmins) ) {
            $resetpasswordurl = new moodle_url('/report/roster/resetpassword.php', array('userid' => $userid, 'sesskey' => sesskey()));
            $actions[$resetpasswordurl->out(false)] = get_string('resetpassword','report_roster');
        }    

        // Setup the menu
        $edit .= $this->container_start(array('yui3-menu', 'yui3-menubuttonnav', 'useractionmenu'), 'useractionselect' . $userid);
            $edit .= $this->container_start(array('yui3-menu-content'));
                $edit .= html_writer::start_tag('ul');
                    $edit .= html_writer::start_tag('li', array('class'=>'menuicon'));
                        //$menuicon = $this->pix_icon('t/contextmenu', get_string('actions'));
                        //$menuicon = $this->pix_icon('t/switch_minus', get_string('actions'));
                        $menuicon = html_writer::empty_tag('img', $attributes); //$attributes['src'];
                        $edit .= $this->action_link('#menu' . $userid, $menuicon, null, array('class'=>'yui3-menu-label'));
                        $edit .= $this->container_start(array('yui3-menu', 'yui3-loading'), 'menu' . $userid);
                            $edit .= $this->container_start(array('yui3-menu-content'));
                                $edit .= html_writer::start_tag('ul');
                                    foreach ($actions as $url => $description) {
                                        $edit .= html_writer::start_tag('li', array('class'=>'yui3-menuitem'));
                                        $edit .= $this->action_link($url, $description, null, array('class'=>'yui3-menuitem-content', 'target'=>'_new'));
                                        //$edit .= $this->add_action_handler(new popup_action('click', $url), array('id'=>html_writer::random_id('userpicture')));
                                        $edit .= html_writer::end_tag('li');
                                    }
                                $edit .= html_writer::end_tag('ul');
                            $edit .= $this->container_end();
                        $edit .= $this->container_end();
                    $edit .= html_writer::end_tag('li');
                $edit .= html_writer::end_tag('ul');
            $edit .= $this->container_end();
        $edit .= $this->container_end();

        return $edit;
    }
    
====== And some translation strings (that goes into {theme-name}/lang/en/theme_{theme-name}.php)

// User actions
$string['user_completereport'] = 'Full course report';
$string['user_outlinereport'] = 'Basic course report';
$string['user_viewprofile'] = 'View profile';
$string['user_editprofile'] = 'Edit profile';
$string['user_sendmessage'] = 'Send a message';
$string['user_coursecompletion'] = 'Course completion';
$string['user_courselogs'] = 'Activity log';
$string['user_coursegrades'] = 'Course grades';
$string['user_loginas'] = 'Login as...';


====== And a style.css file that goes together with it...
    
/* Renderer - user menu
*/
.yui3-menu.useractionmenu {
    /*width: 40px;*/
    width: 0;
    position: relative;
}
.yui3-menu.useractionmenu .yui3-menu-content {border: none;padding: 0;}
.yui3-skin-sam .yui3-menu .yui3-menu.yui3-loading .yui3-menu-content {
    display: none;
}
.dir-rtl.yui3-skin-sam .yui3-menu.yui3-menu.useractionmenu .yui3-menu .yui3-menu-content {
    font-size: 100%;
    right: 110px;
    position: relative;
}
.dir-rtl.yui3-skin-sam .yui3-menu-label,
.dir-rtl.yui3-skin-sam .yui3-menu .yui3-menu .yui3-menu-label,
.dir-rtl.yui3-skin-sam .yui3-menuitem-content,
.dir-rtl.yui3-skin-sam .yui3-menu .yui3-menu .yui3-menuitem-content {text-align: right;}

/* Renderer - Special mark / Highlight the teacher's picture
*/
.userpicture.defaultuserpic.teacher {
    border: 2px outset mediumvioletred;
}

/* Cosmetics - fix user picture block width.
*/
#page-user-profile .yui3-menu.useractionmenu {width: 1px;}
#page-user-profile .profilepicture {width:100px;}

/* fix main toolbar usermenu icon */
.navbar .navbar-inner .usermenu .dropdown a.dropdown-toggle {display: inline-flex;}

.yui3-skin-sam .yui3-menu ul, .yui3-skin-sam .yui3-menu ul ul {
    margin-right: 0;
}

/* fix UI in course > enrol users page */
.userenrolment .col_userdetails .subfield_picture {width: 35px;}

/* Fix edit all user's grades in one page - userimage */
.path-grade-report-singleview div.reporttable form div {
    margin-right: 25px;
}
.path-grade-report-singleview.dir-rtl div.reporttable form div {
    margin-left: 25px;
    margin-right: auto;
}

/* Fix user's picture display in quiz grade report */
#page-mod-quiz-report table#attempts .picture {display: block;}

/* Fix table display of laegrader report */
#page-grade-report-laegrader-index .profilepicture {display: none;}

/* Fix table display of laegrader report */
#page-mod-attendance-report .profilepicture {display: none;}

/* Fix user pictures in report/Roster */
.report-roster .yui3-menu.useractionmenu .yui3-menu-content {width: 45px;}
