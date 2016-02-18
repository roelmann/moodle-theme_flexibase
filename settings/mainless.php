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

// Main LESS colour settings settingpage.
$temp = new admin_settingpage('theme_flexibase_lessbrand',  get_string('lessbrandsettings', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_lessbrandheading', get_string('lessbrandsub', 'theme_flexibase'),
    format_text(get_string('lessbranddesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Brandprimary setting.
$name = 'theme_flexibase/brandprimary';
$title = get_string('brandprimary', 'theme_flexibase');
$description = get_string('brandprimarydesc', 'theme_flexibase');
$default = '#001122';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Brandsuccess setting.
$name = 'theme_flexibase/brandsuccess';
$title = get_string('brandsuccess', 'theme_flexibase');
$description = get_string('brandsuccessdesc', 'theme_flexibase');
$default = '#28C41B';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Brandinfo setting.
$name = 'theme_flexibase/brandinfo';
$title = get_string('brandinfo', 'theme_flexibase');
$description = get_string('brandinfodesc', 'theme_flexibase');
$default = '#3D97F2';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Brandwarning setting.
$name = 'theme_flexibase/brandwarning';
$title = get_string('brandwarning', 'theme_flexibase');
$description = get_string('brandwarningdesc', 'theme_flexibase');
$default = '#F46F1B';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Branddanger setting.
$name = 'theme_flexibase/branddanger';
$title = get_string('branddanger', 'theme_flexibase');
$description = get_string('branddangerdesc', 'theme_flexibase');
$default = '#D92C33';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Black setting.
$name = 'theme_flexibase/black';
$title = get_string('black', 'theme_flexibase');
$description = get_string('blackdesc', 'theme_flexibase');
$default = '#000000';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// White setting.
$name = 'theme_flexibase/white';
$title = get_string('white', 'theme_flexibase');
$description = get_string('whitedesc', 'theme_flexibase');
$default = '#ffffff';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Graybase setting.
$name = 'theme_flexibase/graybase';
$title = get_string('graybase', 'theme_flexibase');
$description = get_string('graybasedesc', 'theme_flexibase');
$default = '#000000';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
