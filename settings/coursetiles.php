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

/* Course Box Spot Settings.
 * ------------------------ */
// Page heading.
$temp = new admin_settingpage('theme_flexibase_frontpage_courses', get_string('frontpagecoursesettings', 'theme_flexibase'));

// Page subheading.
$temp->add(new admin_setting_heading('theme_flexibase_frontpage_courses', get_string('frontpagesettingsheading', 'theme_flexibase'),
    format_text(get_string('frontpagedesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

// Promoted Courses Start.
    // Promoted Courses Heading.
    $name = 'theme_flexibase_promotedcoursesheading';
    $heading = get_string('promotedcoursesheading', 'theme_flexibase');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable / Disable Promoted Courses.
    $name = 'theme_flexibase/pcourseenable';
    $title = get_string('pcourseenable', 'theme_flexibase');
    $description = '';
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_flexibase');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_flexibase');
    $displayafterlogin = get_string('displayafterlogin', 'theme_flexibase');
    $dontdisplay = get_string('dontdisplay', 'theme_flexibase');
    $default = '0';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Block title.
    $name = 'theme_flexibase/promotedtitle';
    $title = get_string('pcourses', 'theme_flexibase').' '.get_string('title', 'theme_flexibase');
    $description = get_string('promotedtitledesc', 'theme_flexibase');
    $default =  get_string('settingfeaturedslider', 'theme_flexibase');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Link Text.
    $name = 'theme_flexibase/promotedlinktext';
    $title = get_string('promotedlinktext', 'theme_flexibase');
    $description = get_string('promotedlinktext_desc', 'theme_flexibase');
    $default =  get_string('settingpromotedlinktext', 'theme_flexibase');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Link.
    $name = 'theme_flexibase/promotedlink';
    $title = get_string('promotedlink', 'theme_flexibase');
    $description = get_string('promotedlink_desc', 'theme_flexibase');
    $default =  get_string('settingpromotedlink', 'theme_flexibase');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/promotedcourses';
    $title = get_string('pcourses', 'theme_flexibase');
    $description = get_string('pcoursesdesc', 'theme_flexibase');
    $default = array();

    $courses[0] = '';
    $cnt = 0;
    if ($ccc = get_courses('all', 'c.sortorder ASC', 'c.id,c.shortname,c.visible,c.category')) {
        foreach ($ccc as $cc) {
            if ($cc->visible == "0" || $cc->id == "1") {
                continue;
            }
            $cnt++;
            $courses[$cc->id] = $cc->shortname;
            // Set some courses for default option.
            if ($cnt < 12) {
                $default[] = $cc->id;
            }
        }
    }
    $coursedefault = implode(",", $default);
    $setting = new admin_setting_configtextarea($name, $title, $description, $coursedefault);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Promoted Courses End.



// Front Page Course tile images.
$name = 'theme_flexibase/coursetileimagesinfo';
$heading = get_string('coursetileimagesinfo', 'theme_flexibase');
$information = get_string('coursetileimagesinfo', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Front page course tiles option.
$name = 'theme_flexibase/frontpagerenderer';
$title = get_string('frontpagerenderer', 'theme_flexibase');
$description = get_string('frontpagerendererdesc', 'theme_flexibase');
$choices = array(
    1 => get_string('frontpagerendereroption1', 'theme_flexibase'),
    2 => get_string('frontpagerendereroption2', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Default course image from front page course tiles.
$name = 'theme_flexibase/frontpagerendererdefaultimage';
$title = get_string('frontpagerendererdefaultimage', 'theme_flexibase');
$description = get_string('frontpagerendererdefaultimagedesc', 'theme_flexibase');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Front page course tiles overlay background colour.
$name = 'theme_flexibase/rendereroverlaycolour';
$title = get_string('rendereroverlaycolour', 'theme_flexibase');
$description = get_string('rendereroverlaycolourdesc', 'theme_flexibase');
$previewconfig = null;
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
$temp->add($setting);

// Front page course tiles overlay font colour.
$name = 'theme_flexibase/rendereroverlayfontcolour';
$title = get_string('rendereroverlayfontcolour', 'theme_flexibase');
$description = get_string('rendereroverlayfontcolourdesc', 'theme_flexibase');
$previewconfig = null;
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
$temp->add($setting);

// Dashboard Course tiles.
$name = 'theme_flexibase/dashboardcoursetileinfo';
$heading = get_string('dashboardcoursetileinfo', 'theme_flexibase');
$information = get_string('dashboardcoursetileinfodesc', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Dashboard course tiles option.
$name = 'theme_flexibase/dashboardrenderer';
$title = get_string('dashboardrenderer', 'theme_flexibase');
$description = get_string('dashboardrendererdesc', 'theme_flexibase');
$choices = array(
    1 => get_string('dashboardrendereroption1', 'theme_flexibase'),
    2 => get_string('dashboardrendereroption2', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, 1, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Course page images.
$name = 'theme_flexibase/coursepageimagesinfo';
$heading = get_string('coursepageimagesinfo', 'theme_flexibase');
$information = get_string('coursepageimagesinfo', 'theme_flexibase');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Front page course tiles option.
$name = 'theme_flexibase/courseimageheader';
$title = get_string('courseimageheaderoption', 'theme_flexibase');
$description = get_string('courseimageheaderoptiondesc', 'theme_flexibase');
$choices = array(
    1 => get_string('courseimageheaderoption1', 'theme_flexibase'),
    2 => get_string('courseimageheaderoption2', 'theme_flexibase'),
    3 => get_string('courseimageheaderoption3', 'theme_flexibase'),
);
$setting = new admin_setting_configselect($name, $title, $description, 1, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Default course image from front page course tiles.
$name = 'theme_flexibase/courseimagedefaultheader';
$title = get_string('courseheaderdefaultimage', 'theme_flexibase');
$description = get_string('courseheaderdefaultimagedesc', 'theme_flexibase');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'courseimagedefaultheader');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Header image height.
$name = 'theme_flexibase/courseheaderimageheight';
$title = get_string('courseheaderimageheight', 'theme_flexibase');
$description = get_string('courseheaderimageheightdesc', 'theme_flexibase');
$default = '175px';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$ADMIN->add('theme_flexibase', $temp);
