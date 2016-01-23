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
 * Theme Flexibase settings file.
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

// Menus settingpage.
$temp = new admin_settingpage('theme_flexibase_menusettings',  get_string('menussettings', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_menusheading', get_string('menusheadingsub', 'theme_flexibase'),
    format_text(get_string('menusheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Main menus heading.
$temp->add(new admin_setting_heading('theme_flexibase_mainmenusheading', get_string('mainmenusheadingsub', 'theme_flexibase'),
    format_text(get_string('mainmenusheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Main Menu location.
$name = 'theme_flexibase/mainmenulocation';
$title = get_string('mainmenulocation', 'theme_flexibase');
$description = get_string('mainmenulocationdesc', 'theme_flexibase');
$default = 1;
$choices = array(
    'main' => get_string('mmmain', 'theme_flexibase'),
    'branding' => get_string('mmbranding', 'theme_flexibase'),
    'awesome' => get_string('mmawesome', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Enable Main Menu - Site Home.
$name = 'theme_flexibase/mmsitehome';
$title = get_string('mmsitehome', 'theme_flexibase');
$description = get_string('mmsitehomedesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable Main Menu - Dashboard.
$name = 'theme_flexibase/mmdashboard';
$title = get_string('mmdashboard', 'theme_flexibase');
$description = get_string('mmdashboarddesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable Main Menu - This Course.
$name = 'theme_flexibase/mmthiscourse';
$title = get_string('mmthiscourse', 'theme_flexibase');
$description = get_string('mmthiscoursedesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable Main Menu - Calendar.
$name = 'theme_flexibase/mmcalendar';
$title = get_string('mmcalendar', 'theme_flexibase');
$description = get_string('mmcalendardesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// User menus heading.
$temp->add(new admin_setting_heading('theme_flexibase_usermenusheading', get_string('usermenusheadingsub', 'theme_flexibase'),
    format_text(get_string('usermenusheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Enable user Menu - Dashboard.
$name = 'theme_flexibase/umdashboard';
$title = get_string('umdashboard', 'theme_flexibase');
$description = get_string('umdashboarddesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Calendar.
$name = 'theme_flexibase/umcalendar';
$title = get_string('umcalendar', 'theme_flexibase');
$description = get_string('umcalendardesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Profile.
$name = 'theme_flexibase/umprofile';
$title = get_string('umprofile', 'theme_flexibase');
$description = get_string('umprofiledesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Edit Profile.
$name = 'theme_flexibase/umeditprofile';
$title = get_string('umeditprofile', 'theme_flexibase');
$description = get_string('umeditprofiledesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Preferences.
$name = 'theme_flexibase/umpreferences';
$title = get_string('umpreferences', 'theme_flexibase');
$description = get_string('umpreferencesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Change Password.
$name = 'theme_flexibase/umpassword';
$title = get_string('umpassword', 'theme_flexibase');
$description = get_string('umpassworddesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Message Preferences.
$name = 'theme_flexibase/ummessagepreferences';
$title = get_string('ummessagepreferences', 'theme_flexibase');
$description = get_string('ummessagepreferencesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Blog Preferences.
$name = 'theme_flexibase/umblogpreferences';
$title = get_string('umblogpreferences', 'theme_flexibase');
$description = get_string('umblogpreferencesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Badge Preferences.
$name = 'theme_flexibase/umbadgepreferences';
$title = get_string('umbadgepreferences', 'theme_flexibase');
$description = get_string('umbadgepreferencesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Messages.
$name = 'theme_flexibase/ummessages';
$title = get_string('ummessages', 'theme_flexibase');
$description = get_string('ummessagesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Private files.
$name = 'theme_flexibase/umfiles';
$title = get_string('umfiles', 'theme_flexibase');
$description = get_string('umfilesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Forum posts.
$name = 'theme_flexibase/umposts';
$title = get_string('umposts', 'theme_flexibase');
$description = get_string('umpostsdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Forum discussions.
$name = 'theme_flexibase/umdiscussions';
$title = get_string('umdiscussions', 'theme_flexibase');
$description = get_string('umdiscussionsdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Grades.
$name = 'theme_flexibase/umgrades';
$title = get_string('umgrades', 'theme_flexibase');
$description = get_string('umgradesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Enable user Menu - Badges.
$name = 'theme_flexibase/umbadges';
$title = get_string('umbadges', 'theme_flexibase');
$description = get_string('umbadgesdesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Custom user menuitems.
$name = 'theme_flexibase/usermenus';
$title = get_string('usermenus', 'theme_flexibase');
$description = get_string('usermenusdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
