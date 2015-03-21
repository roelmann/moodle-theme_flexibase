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

$temp = new admin_settingpage('theme_flexibase_layout', get_string('layoutheading', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_layout', get_string('layoutheadingsub', 'theme_flexibase'),
    format_text(get_string('layoutdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Default Layout.
$name = 'theme_flexibase/defaultlayout';
$title = get_string('defaultlayout', 'theme_flexibase');
$description = get_string('defaultlayoutdesc', 'theme_flexibase');
$default = 'preandpost';
$choices = array('preandpost' => get_string('preandpost', 'theme_flexibase'),
    'twopre' => get_string('twopre', 'theme_flexibase'),
    'twopost' => get_string('twopost', 'theme_flexibase'),
    'singlepre' => get_string('singlepre', 'theme_flexibase'),
    'singlepost' => get_string('singlepost', 'theme_flexibase'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Frontpage Layout.
$name = 'theme_flexibase/frontpagelayout';
$title = get_string('frontpagelayout', 'theme_flexibase');
$description = get_string('frontpagelayoutdesc', 'theme_flexibase');
$default = 'preandpost';
$choices = array('preandpost' => get_string('preandpost', 'theme_flexibase'),
    'twopre' => get_string('twopre', 'theme_flexibase'),
    'twopost' => get_string('twopost', 'theme_flexibase'),
    'singlepre' => get_string('singlepre', 'theme_flexibase'),
    'singlepost' => get_string('singlepost', 'theme_flexibase'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Courses Layout.
$name = 'theme_flexibase/courseslayout';
$title = get_string('courseslayout', 'theme_flexibase');
$description = get_string('courseslayoutdesc', 'theme_flexibase');
$default = 'preandpost';
$choices = array('preandpost' => get_string('preandpost', 'theme_flexibase'),
    'twopre' => get_string('twopre', 'theme_flexibase'),
    'twopost' => get_string('twopost', 'theme_flexibase'),
    'singlepre' => get_string('singlepre', 'theme_flexibase'),
    'singlepost' => get_string('singlepost', 'theme_flexibase'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// MyHome Layout.
$name = 'theme_flexibase/myhomelayout';
$title = get_string('myhomelayout', 'theme_flexibase');
$description = get_string('myhomelayoutdesc', 'theme_flexibase');
$default = 1200;
$choices = array('preandpost' => get_string('preandpost', 'theme_flexibase'),
    'twopre' => get_string('twopre', 'theme_flexibase'),
    'twopost' => get_string('twopost', 'theme_flexibase'),
    'singlepre' => get_string('singlepre', 'theme_flexibase'),
    'singlepost' => get_string('singlepost', 'theme_flexibase'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
