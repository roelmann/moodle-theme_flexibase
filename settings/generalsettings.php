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

// Generic settingpage.
$temp = new admin_settingpage('theme_flexibase_generic',  get_string('genericsettings', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_generalheading', get_string('generalheadingsub', 'theme_flexibase'),
    format_text(get_string('generalheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Logo file setting.
$name = 'theme_flexibase/logo';
$title = get_string('logo', 'theme_flexibase');
$description = get_string('logodesc', 'theme_flexibase');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Show Main Logo.
$name = 'theme_flexibase/showlogo';
$title = get_string('showlogo', 'theme_flexibase');
$description = get_string('showlogodesc', 'theme_flexibase');
$default = 'everywhere';
$choices = array(
    'frontpage' => get_string('showlogofrontonly', 'theme_flexibase'),
    'everywhere' => get_string('showlogoeverywhere', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Top NavBar miniLogo file setting.
$name = 'theme_flexibase/minilogo';
$title = get_string('minilogo', 'theme_flexibase');
$description = get_string('minilogodesc', 'theme_flexibase');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'minilogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Default mini icon setting.
$name = 'theme_flexibase/falogo';
$title = get_string('falogo', 'theme_flexibase');
$description = get_string('falogodesc', 'theme_flexibase');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Top bar colour scheme.
$name = 'theme_flexibase/topbarcolour';
$title = get_string('topbarcolour', 'theme_flexibase');
$description = get_string('topbarcolourdesc', 'theme_flexibase');
$default = 1;
$choices = array(
    'default' => get_string('default', 'theme_flexibase'),
    'inverse' => get_string('inverse', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Menu bar colour scheme.
$name = 'theme_flexibase/menunavbarcolour';
$title = get_string('menunavbarcolour', 'theme_flexibase');
$description = get_string('menunavbarcolourdesc', 'theme_flexibase');
$default = 1;
$choices = array(
    'default' => get_string('default', 'theme_flexibase'),
    'inverse' => get_string('inverse', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Login Page background file setting.
$name = 'theme_flexibase/loginbg';
$title = get_string('loginbg', 'theme_flexibase');
$description = get_string('loginbgdesc', 'theme_flexibase');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Custom CSS file.
$name = 'theme_flexibase/customcss';
$title = get_string('customcss', 'theme_flexibase');
$description = get_string('customcssdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
