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

/* User Alerts */
$temp = new admin_settingpage('theme_flexibase_alerts', get_string('alertsheading', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_alerts', get_string('alertsheadingsub', 'theme_flexibase'),
    format_text(get_string('alertsdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

$information = get_string('alertinfodesc', 'theme_flexibase'); // Standard for each of the descriptors.

// This is the descriptor for Alert One.
$name = 'theme_flexibase/alert1info';
$heading = get_string('alert1', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Enable Alert.
$name = 'theme_flexibase/enable1alert';
$title = get_string('enablealert', 'theme_flexibase');
$description = get_string('enablealertdesc', 'theme_flexibase');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Type.
$name = 'theme_flexibase/alert1type';
$title = get_string('alerttype', 'theme_flexibase');
$description = get_string('alerttypedesc', 'theme_flexibase');
$alertinfo = get_string('alert_info', 'theme_flexibase');
$alertwarning = get_string('alert_warning', 'theme_flexibase');
$alertgeneral = get_string('alert_general', 'theme_flexibase');
$default = 'info';
$choices = array('info' => $alertinfo, 'warning' => $alertwarning, 'success' => $alertgeneral);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Title.
$name = 'theme_flexibase/alert1title';
$title = get_string('alerttitle', 'theme_flexibase');
$description = get_string('alerttitledesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Text.
$name = 'theme_flexibase/alert1text';
$title = get_string('alerttext', 'theme_flexibase');
$description = get_string('alerttextdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// This is the descriptor for Alert Two.
$name = 'theme_flexibase/alert2info';
$heading = get_string('alert2', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Enable Alert.
$name = 'theme_flexibase/enable2alert';
$title = get_string('enablealert', 'theme_flexibase');
$description = get_string('enablealertdesc', 'theme_flexibase');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Type.
$name = 'theme_flexibase/alert2type';
$title = get_string('alerttype', 'theme_flexibase');
$description = get_string('alerttypedesc', 'theme_flexibase');
$alertinfo = get_string('alert_info', 'theme_flexibase');
$alertwarning = get_string('alert_warning', 'theme_flexibase');
$alertgeneral = get_string('alert_general', 'theme_flexibase');
$default = 'info';
$choices = array('info' => $alertinfo, 'warning' => $alertwarning, 'success' => $alertgeneral);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Title.
$name = 'theme_flexibase/alert2title';
$title = get_string('alerttitle', 'theme_flexibase');
$description = get_string('alerttitledesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Text.
$name = 'theme_flexibase/alert2text';
$title = get_string('alerttext', 'theme_flexibase');
$description = get_string('alerttextdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// This is the descriptor for Alert Three.
$name = 'theme_flexibase/alert3info';
$heading = get_string('alert3', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Enable Alert.
$name = 'theme_flexibase/enable3alert';
$title = get_string('enablealert', 'theme_flexibase');
$description = get_string('enablealertdesc', 'theme_flexibase');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Type.
$name = 'theme_flexibase/alert3type';
$title = get_string('alerttype', 'theme_flexibase');
$description = get_string('alerttypedesc', 'theme_flexibase');
$alertinfo = get_string('alert_info', 'theme_flexibase');
$alertwarning = get_string('alert_warning', 'theme_flexibase');
$alertgeneral = get_string('alert_general', 'theme_flexibase');
$default = 'info';
$choices = array('info' => $alertinfo, 'warning' => $alertwarning, 'success' => $alertgeneral);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Title.
$name = 'theme_flexibase/alert3title';
$title = get_string('alerttitle', 'theme_flexibase');
$description = get_string('alerttitledesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Alert Text.
$name = 'theme_flexibase/alert3text';
$title = get_string('alerttext', 'theme_flexibase');
$description = get_string('alerttextdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
