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
 * Theme Flexibase setting file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @parents    Bootstrap
 * @copyright  2014 Bas Brands
 * @credits    Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Many others for non-specific but vital inspirations,
 *             suggestions and support
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

    // Additional LESS colour settings settingpage
    $temp = new admin_settingpage('theme_flexibase_lessadditional',  get_string('lessadditionalsettings', 'theme_flexibase'));
    $temp->add(new admin_setting_heading('theme_flexibase_lessadditionalheading', get_string('lessadditionalsub', 'theme_flexibase'),
        format_text(get_string('lessadditionaldesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

    // @brandprimary light setting.
    $name = 'theme_flexibase/brandprimarylight';
    $title = get_string('brandprimarylight', 'theme_flexibase');
    $description = get_string('brandprimarylightdesc', 'theme_flexibase');
    $default = 'lighten(@brand-primary, 80%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @brandprimary lighter setting.
    $name = 'theme_flexibase/brandprimarylighter';
    $title = get_string('brandprimarylighter', 'theme_flexibase');
    $description = get_string('brandprimarylighterdesc', 'theme_flexibase');
    $default = 'lighten(@brand-primary, 85%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @brandprimary lightest setting.
    $name = 'theme_flexibase/brandprimarylightest';
    $title = get_string('brandprimarylightest', 'theme_flexibase');
    $description = get_string('brandprimarylightestdesc', 'theme_flexibase');
    $default = 'lighten(@brand-primary, 89%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @brandsuccess light setting.
    $name = 'theme_flexibase/brandsuccesslight';
    $title = get_string('brandsuccesslight', 'theme_flexibase');
    $description = get_string('brandsuccesslightdesc', 'theme_flexibase');
    $default = 'lighten(@brand-success, 42%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @brandinfo light setting.
    $name = 'theme_flexibase/brandinfolight';
    $title = get_string('brandinfolight', 'theme_flexibase');
    $description = get_string('brandinfolightdesc', 'theme_flexibase');
    $default = 'lighten(@brand-info, 32%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @brandwarning light setting.
    $name = 'theme_flexibase/brandwarninglight';
    $title = get_string('brandwarninglight', 'theme_flexibase');
    $description = get_string('brandwarninglightdesc', 'theme_flexibase');
    $default = 'lighten(@brand-warning, 38%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @branddanger light setting.
    $name = 'theme_flexibase/branddangerlight';
    $title = get_string('branddangerlight', 'theme_flexibase');
    $description = get_string('branddangerlightdesc', 'theme_flexibase');
    $default = 'lighten(@brand-danger, 42%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @graydarker setting.
    $name = 'theme_flexibase/graydarker';
    $title = get_string('graydarker', 'theme_flexibase');
    $description = get_string('graydarkerdesc', 'theme_flexibase');
    $default = 'lighten(@gray-base, 10%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @graydark setting.
    $name = 'theme_flexibase/graydark';
    $title = get_string('graydark', 'theme_flexibase');
    $description = get_string('graydarkdesc', 'theme_flexibase');
    $default = 'lighten(@gray-base, 20%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @gray setting.
    $name = 'theme_flexibase/gray';
    $title = get_string('gray', 'theme_flexibase');
    $description = get_string('graydesc', 'theme_flexibase');
    $default = 'lighten(@gray-base, 40%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @graylight setting.
    $name = 'theme_flexibase/graylight';
    $title = get_string('graylight', 'theme_flexibase');
    $description = get_string('graylightdesc', 'theme_flexibase');
    $default = 'lighten(@gray-base, 60%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @graylighter setting.
    $name = 'theme_flexibase/graylighter';
    $title = get_string('graylighter', 'theme_flexibase');
    $description = get_string('graylighterdesc', 'theme_flexibase');
    $default = 'lighten(@gray-base, 80%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @graylightest setting.
    $name = 'theme_flexibase/graylightest';
    $title = get_string('graylightest', 'theme_flexibase');
    $description = get_string('graylightestdesc', 'theme_flexibase');
    $default = 'lighten(@gray-base, 95%)';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_flexibase', $temp);
