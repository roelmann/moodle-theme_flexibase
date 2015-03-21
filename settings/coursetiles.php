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

/* CourseBox Spot Settings */
$temp = new admin_settingpage('theme_flexibase_frontpage_courses', get_string('frontpagecoursesettings', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_frontpage_courses', get_string('frontpagesettingsheading', 'theme_flexibase'),
    format_text(get_string('frontpagedesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

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

$name = 'theme_flexibase/frontpagerendererdefaultimage';
$title = get_string('frontpagerendererdefaultimage', 'theme_flexibase');
$description = get_string('frontpagerendererdefaultimagedesc', 'theme_flexibase');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_flexibase/rendereroverlaycolour';
$title = get_string('rendereroverlaycolour', 'theme_flexibase');
$description = get_string('rendereroverlaycolourdesc', 'theme_flexibase');
$previewconfig = null;
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
$temp->add($setting);

$name = 'theme_flexibase/rendereroverlayfontcolour';
$title = get_string('rendereroverlayfontcolour', 'theme_flexibase');
$description = get_string('rendereroverlayfontcolourdesc', 'theme_flexibase');
$previewconfig = null;
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
$temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
