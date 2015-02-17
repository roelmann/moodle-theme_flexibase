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
 * Theme More version file.
 *
 * @package    theme_flexibase
 * @copyright  2014 Bas Brands
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_flexibase', 'FlexiBase'));

    // "Generic" settingpage
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

    // Custom CSS file.
    $name = 'theme_flexibase/customcss';
    $title = get_string('customcss', 'theme_flexibase');
    $description = get_string('customcssdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_flexibase', $temp);

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
    
    /* User Alerts */
    $temp = new admin_settingpage('theme_flexibase_alerts', get_string('alertsheading', 'theme_flexibase'));
    $temp->add(new admin_setting_heading('theme_flexibase_alerts', get_string('alertsheadingsub', 'theme_flexibase'),
        format_text(get_string('alertsdesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

    $information = get_string('alertinfodesc', 'theme_flexibase');

    // This is the descriptor for Alert One
    $name = 'theme_flexibase/alert1info';
    $heading = get_string('alert1', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_flexibase/enable1alert';
    $title = get_string('enablealert', 'theme_flexibase');
    $description = get_string('enablealertdesc', 'theme_flexibase');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_flexibase/alert1type';
    $title = get_string('alerttype', 'theme_flexibase');
    $description = get_string('alerttypedesc', 'theme_flexibase');
    $alert_info = get_string('alert_info', 'theme_flexibase');
    $alert_warning = get_string('alert_warning', 'theme_flexibase');
    $alert_general = get_string('alert_general', 'theme_flexibase');
    $default = 'info';
    $choices = array('info' => $alert_info, 'warning' => $alert_warning, 'success' => $alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_flexibase/alert1title';
    $title = get_string('alerttitle', 'theme_flexibase');
    $description = get_string('alerttitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_flexibase/alert1text';
    $title = get_string('alerttext', 'theme_flexibase');
    $description = get_string('alerttextdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for Alert Two
    $name = 'theme_flexibase/alert2info';
    $heading = get_string('alert2', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_flexibase/enable2alert';
    $title = get_string('enablealert', 'theme_flexibase');
    $description = get_string('enablealertdesc', 'theme_flexibase');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_flexibase/alert2type';
    $title = get_string('alerttype', 'theme_flexibase');
    $description = get_string('alerttypedesc', 'theme_flexibase');
    $alert_info = get_string('alert_info', 'theme_flexibase');
    $alert_warning = get_string('alert_warning', 'theme_flexibase');
    $alert_general = get_string('alert_general', 'theme_flexibase');
    $default = 'info';
    $choices = array('info' => $alert_info, 'warning' => $alert_warning, 'success' => $alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_flexibase/alert2title';
    $title = get_string('alerttitle', 'theme_flexibase');
    $description = get_string('alerttitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_flexibase/alert2text';
    $title = get_string('alerttext', 'theme_flexibase');
    $description = get_string('alerttextdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for Alert Three
    $name = 'theme_flexibase/alert3info';
    $heading = get_string('alert3', 'theme_flexibase');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_flexibase/enable3alert';
    $title = get_string('enablealert', 'theme_flexibase');
    $description = get_string('enablealertdesc', 'theme_flexibase');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_flexibase/alert3type';
    $title = get_string('alerttype', 'theme_flexibase');
    $description = get_string('alerttypedesc', 'theme_flexibase');
    $alert_info = get_string('alert_info', 'theme_flexibase');
    $alert_warning = get_string('alert_warning', 'theme_flexibase');
    $alert_general = get_string('alert_general', 'theme_flexibase');
    $default = 'info';
    $choices = array('info' => $alert_info, 'warning' => $alert_warning, 'success' => $alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_flexibase/alert3title';
    $title = get_string('alerttitle', 'theme_flexibase');
    $description = get_string('alerttitledesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_flexibase/alert3text';
    $title = get_string('alerttext', 'theme_flexibase');
    $description = get_string('alerttextdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_flexibase', $temp);

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
    $choices = array(1 => $alwaysdisplay, 2 => $displaybeforelogin, 3 => $displayafterlogin, 0 => $dontdisplay);
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
//        'theme' => get_string('captiontheme', 'theme_flexibase'), TODO: add this in once I start with colour schemes that impact on LESS
        );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    $numberofslides = get_config('theme_flexibase', 'numberofslides');
    for ($i = 1; $i <= $numberofslides; $i++) {
        // This is the descriptor for Slide One
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
 		$default = 'display';
 		$choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
 		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_flexibase/marketingtitle';
 		$title = get_string('marketingtitle', 'theme_flexibase');
 		$description = get_string('marketingtitledesc', 'theme_flexibase');
 		$default = 'More about Us';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_flexibase/marketingtitleicon';
 		$title = get_string('marketingtitleicon', 'theme_flexibase');
 		$description = get_string('marketingtitleicondesc', 'theme_flexibase');
 		$default = 'globe';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		//This is the descriptor for Marketing Spot One
 		$name = 'theme_flexibase/marketing1info';
 		$heading = get_string('marketing1', 'theme_flexibase');
 		$information = get_string('marketinginfodesc', 'theme_flexibase');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot One.
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

 		//This is the descriptor for Marketing Spot Two
 		$name = 'theme_flexibase/marketing2info';
 		$heading = get_string('marketing2', 'theme_flexibase');
 		$information = get_string('marketinginfodesc', 'theme_flexibase');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot Two.
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

 		//This is the descriptor for Marketing Spot Three
 		$name = 'theme_flexibase/marketing3info';
 		$heading = get_string('marketing3', 'theme_flexibase');
 		$information = get_string('marketinginfodesc', 'theme_flexibase');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot Three.
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

 		//This is the descriptor for Marketing Spot Four
 		$name = 'theme_flexibase/marketing4info';
 		$heading = get_string('marketing4', 'theme_flexibase');
 		$information = get_string('marketinginfodesc', 'theme_flexibase');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot Four.
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

