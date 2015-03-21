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

$temp = new admin_settingpage('theme_flexibase_carousel', get_string('carouselheading', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_carousel', get_string('carouselheadingsub', 'theme_flexibase'),
    format_text(get_string('carouseldesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Toggle Slideshow.
$name = 'theme_flexibase/toggleslideshow';
$title = get_string('toggleslideshow', 'theme_flexibase');
$description = get_string('toggleslideshowdesc', 'theme_flexibase');
$alwaysdisplay = get_string('alwaysdisplay', 'theme_flexibase');
$displaybeforelogin = get_string('displaybeforelogin', 'theme_flexibase');
$displayafterlogin = get_string('displayafterlogin', 'theme_flexibase');
$dontdisplay = get_string('dontdisplay', 'theme_flexibase');
$default = 1;
$choices = array(
    1 => $alwaysdisplay,
    2 => $displaybeforelogin,
    3 => $displayafterlogin,
    0 => $dontdisplay);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Number of slides.
$name = 'theme_flexibase/numberofslides';
$title = get_string('numberofslides', 'theme_flexibase');
$description = get_string('numberofslides_desc', 'theme_flexibase');
$default = 3;
$choices = array(
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
);
$temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

// Hide slideshow on phones.
$name = 'theme_flexibase/hideontablet';
$title = get_string('hideontablet', 'theme_flexibase');
$description = get_string('hideontabletdesc', 'theme_flexibase');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Hide slideshow on tablet.
$name = 'theme_flexibase/hideonphone';
$title = get_string('hideonphone', 'theme_flexibase');
$description = get_string('hideonphonedesc', 'theme_flexibase');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Slide Title and Caption colour setting.
$name = 'theme_flexibase/captiontextcolour';
$title = get_string('captiontextcolour', 'theme_flexibase');
$description = get_string('captiontextcolourdesc', 'theme_flexibase');
$default = '#ffffff';
$previewconfig = null;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Slide Caption background colour setting.
$name = 'theme_flexibase/captionbackgroundcolour';
$title = get_string('captionbackgroundcolour', 'theme_flexibase');
$description = get_string('captionbackgroundcolourdesc', 'theme_flexibase');
$default = 'light';
$choices = array('light' => get_string('captionlight', 'theme_flexibase'),
    'dark' => get_string('captiondark', 'theme_flexibase'),
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$numberofslides = get_config('theme_flexibase', 'numberofslides');
for ($i = 1; $i <= $numberofslides; $i++) {
    // This is the descriptor for Slide $i.
    $name = 'theme_flexibase/slide' . $i . 'info';
    $heading = get_string('slideno', 'theme_flexibase', array('slide' => $i));
    $information = get_string('slidenodesc', 'theme_flexibase', array('slide' => $i));
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_flexibase/slide' . $i . 'title';
    $title = get_string('slidetitle', 'theme_flexibase');
    $description = get_string('slidetitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_flexibase/slide'.$i.'image';
    $title = get_string('slideimage', 'theme_flexibase');
    $description = get_string('slideimagedesc', 'theme_flexibase');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide'.$i.'image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption text.
    $name = 'theme_flexibase/slide' . $i . 'caption';
    $title = get_string('slidecaption', 'theme_flexibase');
    $description = get_string('slidecaptiondesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_flexibase/slide' . $i . 'url';
    $title = get_string('slideurl', 'theme_flexibase');
    $description = get_string('slideurldesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
}

$ADMIN->add('theme_flexibase', $temp);
