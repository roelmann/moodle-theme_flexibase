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
 * @author     2015 Richard Oelmann - theme specific adaptations from work by GJB
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 *             Image Bank - Gareth Barnard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$temp = new admin_settingpage('theme_flexibase_imagebank',  get_string('imagebanksettings', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_imagebankheading', get_string('imagebankheadingsub', 'theme_flexibase'),
    format_text(get_string('imagebankheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Image bank....
// Number of images in the image bank.
$name = 'theme_flexibase/numberofimagebankimages';
$title = get_string('numberofimagebankimages', 'theme_flexibase');
$description = get_string('numberofimagebankimages_desc', 'theme_flexibase');
$default = 0;
$choices = array(
    0 => '0',
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    11 => '11',
    12 => '12',
    13 => '13',
    14 => '14',
    15 => '15',
    16 => '16'
);

$theme = theme_config::load('flexibase');
$imagebanksettings = new admin_settingpage('theme_flexibase_imagebank', get_string('imagebankheading', 'theme_flexibase'));
$imagebanksettings->add(new admin_setting_heading('theme_flexibase_marketingspots',
        get_string('imagebankheadingsub', 'theme_flexibase'),
        format_text(get_string('imagebankheadingdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

$imagebanksettings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));
$numberofimagebankimages = get_config('theme_flexibase', 'numberofimagebankimages');
for ($i = 1; $i <= $numberofimagebankimages; $i++) {
    $name = 'imagebankimage' . $i;
    $settingname = 'theme_flexibase/' . $name;
    $title = get_string('imagebankimage', 'theme_flexibase') . $i;
    if (empty($theme->settings->$name)) {
        $imagedesc = get_string('none', 'theme_flexibase');
    } else {
        $imageurl = new moodle_url('/theme/flexibase/imagebank.php');
        $imageurl->param('imageid', $i);
        $imagedesc = preg_replace('|^https?://|i', '//', $imageurl->out(false));
    }
    $description = get_string('imagebankimage_desc', 'theme_flexibase', array('imagedesc' => $imagedesc));
    $setting = new admin_setting_configstoredfile($settingname, $title, $description, $name);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $imagebanksettings->add($setting);
}
$ADMIN->add('theme_flexibase', $imagebanksettings);
