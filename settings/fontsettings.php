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
 * Theme flexibase settings file.
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
$temp = new admin_settingpage('theme_flexibase_fonts',  get_string('fontsettings', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_fontheading', get_string('fontheadingsub', 'theme_flexibase'),
    format_text(get_string('fontheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Number of fonts.
$name = 'theme_flexibase/numberoffonts';
$title = get_string('numberoffonts', 'theme_flexibase');
$description = get_string('numberoffontsdesc', 'theme_flexibase');
$default = 0;
$choices = array(
    0 => '0',
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
);
$temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

$numberoffonts = get_config('theme_flexibase', 'numberoffonts');
if ($numberoffonts > 0) {
    // Separator.
    $name = 'theme_flexibase/fontsep';
    $heading = get_string('fontsep', 'theme_flexibase');
    $information = get_string('fontsepdesc', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
}
for ($i = 1; $i <= $numberoffonts; $i++) {
    // Font link.
    $name = 'theme_flexibase/font' . $i . 'link';
    $title = get_string('fontlink', 'theme_flexibase');
    $description = get_string('fontlinkdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
}
// Separator.
$name = 'theme_flexibase/fontsep2';
$heading = get_string('fontsep2', 'theme_flexibase');
$information = get_string('fontsep2desc', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);
// Font Face Body.
$name = 'theme_flexibase/fontfacebody';
$title = get_string('fontfacebody', 'theme_flexibase');
$description = get_string('fontfacebodydesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Font Family Body.
$name = 'theme_flexibase/fontfamilybody';
$title = get_string('fontfamilybody', 'theme_flexibase');
$description = get_string('fontfamilybodydesc', 'theme_flexibase');
$default = 'sans-serif';
$choices = array(
    'serif' => 'serif',
    'sans-serif' => 'sans-serif',
);
$temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));
// Font Size Body.
$name = 'theme_flexibase/fontsizebody';
$title = get_string('fontsizebody', 'theme_flexibase');
$description = get_string('fontsizebodydesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Font Face Headings.
$name = 'theme_flexibase/fontfaceheadings';
$title = get_string('fontfaceheadings', 'theme_flexibase');
$description = get_string('fontfaceheadingsdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Font Family Headings.
$name = 'theme_flexibase/fontfamilyheadings';
$title = get_string('fontfamilyheadings', 'theme_flexibase');
$description = get_string('fontfamilyheadingsdesc', 'theme_flexibase');
$default = 'sans-serif';
$choices = array(
    'serif' => 'serif',
    'sans-serif' => 'sans-serif',
);
$temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));
// Font info - Headings.
$name = 'theme_flexibase/fontheader';
$heading = get_string('fontheader', 'theme_flexibase');
$information = get_string('fontheaderdesc', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
