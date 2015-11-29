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

/* Marketing Spot Settings */
$temp = new admin_settingpage('theme_flexibase_marketing', get_string('marketingheading', 'theme_flexibase'));
$temp->add(new admin_setting_heading('theme_flexibase_marketing', get_string('marketingheadingsub', 'theme_flexibase'),
            format_text(get_string('marketingdesc' , 'theme_flexibase'), FORMAT_MARKDOWN)));

    // Toggle Marketing Spots.
    $name = 'theme_flexibase/togglemarketing';
    $title = get_string('togglemarketing' , 'theme_flexibase');
    $description = get_string('togglemarketingdesc', 'theme_flexibase');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_flexibase');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_flexibase');
    $displayafterlogin = get_string('displayafterlogin', 'theme_flexibase');
    $dontdisplay = get_string('dontdisplay', 'theme_flexibase');
    $default = '1';
    $choices = array(
        '1' => $alwaysdisplay,
        '2' => $displaybeforelogin,
        '3' => $displayafterlogin,
        '0' => $dontdisplay
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

/* Marketing area title settings hidden as not used in flexibase, but left in for porting to other themes.
 *  $name = 'theme_flexibase/marketingtitle';
 *  $title = get_string('marketingtitle', 'theme_flexibase');
 *  $description = get_string('marketingtitledesc', 'theme_flexibase');
 *  $default = 'More about Us';
 *  $setting = new admin_setting_configtext($name, $title, $description, $default);
 *  $setting->set_updatedcallback('theme_reset_all_caches');
 *  $temp->add($setting);
 *
 *  $name = 'theme_flexibase/marketingtitleicon';
 *  $title = get_string('marketingtitleicon', 'theme_flexibase');
 *  $description = get_string('marketingtitleicondesc', 'theme_flexibase');
 *  $default = 'globe';
 *  $setting = new admin_setting_configtext($name, $title, $description, $default);
 *  $setting->set_updatedcallback('theme_reset_all_caches');
 *  $temp->add($setting);
 */

    // Flex Marketing Spots.
    $name = 'theme_flexibase/flexmarketing';
    $title = get_string('flexmarketing' , 'theme_flexibase');
    $description = get_string('flexmarketingdesc', 'theme_flexibase');
    $flexmkting = get_string('flexmktingspots', 'theme_flexibase');
    $evenmkting = get_string('evenmktingspots', 'theme_flexibase');
    $default = '1';
    $choices = array(
        '1' => $flexmkting,
        '2' => $evenmkting,
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for Marketing Spot One.
    $name = 'theme_flexibase/marketing1info';
    $heading = get_string('marketing1', 'theme_flexibase');
    $information = get_string('marketinginfodesc', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Marketing Spot One.
    $name = 'theme_flexibase/marketing1';
    $title = get_string('marketingtitle', 'theme_flexibase');
    $description = get_string('marketingtitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing1icon';
    $title = get_string('marketingicon', 'theme_flexibase');
    $description = get_string('marketingicondesc', 'theme_flexibase');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing1content';
    $title = get_string('marketingcontent', 'theme_flexibase');
    $description = get_string('marketingcontentdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for Marketing Spot Two.
    $name = 'theme_flexibase/marketing2info';
    $heading = get_string('marketing2', 'theme_flexibase');
    $information = get_string('marketinginfodesc', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Marketing Spot Two.
    $name = 'theme_flexibase/marketing2';
    $title = get_string('marketingtitle', 'theme_flexibase');
    $description = get_string('marketingtitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing2icon';
    $title = get_string('marketingicon', 'theme_flexibase');
    $description = get_string('marketingicondesc', 'theme_flexibase');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing2content';
    $title = get_string('marketingcontent', 'theme_flexibase');
    $description = get_string('marketingcontentdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for Marketing Spot Three.
    $name = 'theme_flexibase/marketing3info';
    $heading = get_string('marketing3', 'theme_flexibase');
    $information = get_string('marketinginfodesc', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Marketing Spot Three.
    $name = 'theme_flexibase/marketing3';
    $title = get_string('marketingtitle', 'theme_flexibase');
    $description = get_string('marketingtitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing3icon';
    $title = get_string('marketingicon', 'theme_flexibase');
    $description = get_string('marketingicondesc', 'theme_flexibase');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing3content';
    $title = get_string('marketingcontent', 'theme_flexibase');
    $description = get_string('marketingcontentdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for Marketing Spot Four.
    $name = 'theme_flexibase/marketing4info';
    $heading = get_string('marketing4', 'theme_flexibase');
    $information = get_string('marketinginfodesc', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Marketing Spot Four.
    $name = 'theme_flexibase/marketing4';
    $title = get_string('marketingtitle', 'theme_flexibase');
    $description = get_string('marketingtitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing4icon';
    $title = get_string('marketingicon', 'theme_flexibase');
    $description = get_string('marketingicondesc', 'theme_flexibase');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_flexibase/marketing4content';
    $title = get_string('marketingcontent', 'theme_flexibase');
    $description = get_string('marketingcontentdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_flexibase', $temp);
