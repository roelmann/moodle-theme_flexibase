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
    
    // Show Main Logo
    $name = 'theme_flexibase/showlogo';
    $title = get_string('showlogo', 'theme_flexibase');
    $description = get_string('showlogodesc', 'theme_flexibase');
    $default = 1;
    $choices = array(
        'frontpage' => get_string('showlogofrontonly', 'theme_flexibase'),
        'everywhere' => get_string('showlogoeverywhere', 'theme_flexibase'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Top NavBar miniLogo file setting.
    $name = 'theme_flexibase/minilogo';
    $title = get_string('minilogo', 'theme_flexibase');
    $description = get_string('minilogodesc', 'theme_flexibase');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'minilogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Default mini icon setting.
    $name = 'theme_flexibase/falogo';
    $title = get_string('falogo', 'theme_flexibase');
    $description = get_string('falogodesc', 'theme_flexibase');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    // Top bar colour scheme
    $name = 'theme_flexibase/topbarcolour';
    $title = get_string('topbarcolour', 'theme_flexibase');
    $description = get_string('topbarcolourdesc', 'theme_flexibase');
    $default = 1;
    $choices = array(
        'default' => get_string('default', 'theme_flexibase'),
        'inverse' => get_string('inverse', 'theme_flexibase'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Menu bar colour scheme
    $name = 'theme_flexibase/menunavbarcolour';
    $title = get_string('menunavbarcolour', 'theme_flexibase');
    $description = get_string('menunavbarcolourdesc', 'theme_flexibase');
    $default = 1;
    $choices = array(
        'default' => get_string('default', 'theme_flexibase'),
        'inverse' => get_string('inverse', 'theme_flexibase'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
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


    /* Category Settings */
    $temp = new admin_settingpage('theme_flexibase_categoryicon', get_string('categoryiconheading', 'theme_flexibase'));
    $temp->add(new admin_setting_heading('theme_flexibase_categoryicon', get_string('categoryiconheadingsub', 'theme_flexibase'),
        format_text(get_string('categoryicondesc', 'theme_flexibase'), FORMAT_MARKDOWN)));

    // Category Icons.
    $name = 'theme_flexibase/enablecategoryicon';
    $title = get_string('enablecategoryicon', 'theme_flexibase');
    $description = get_string('enablecategoryicondesc', 'theme_flexibase');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // We only want to output category icon options if the parent setting is enabled
    if (get_config('theme_flexibase', 'enablecategoryicon')) {

        // Default Icon Selector.
        $name = 'theme_flexibase/defaultcategoryicon';
        $title = get_string('defaultcategoryicon', 'theme_flexibase');
        $description = get_string('defaultcategoryicondesc', 'theme_flexibase');
        $default = 'folder-open';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Category Icons.
        $name = 'theme_flexibase/enablecustomcategoryicon';
        $title = get_string('enablecustomcategoryicon', 'theme_flexibase');
        $description = get_string('enablecustomcategoryicondesc', 'theme_flexibase');
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        if (get_config('theme_flexibase', 'enablecustomcategoryicon')) {

            // This is the descriptor for Custom Category Icons
            $name = 'theme_flexibase/categoryiconinfo';
            $heading = get_string('categoryiconinfo', 'theme_flexibase');
            $information = get_string('categoryiconinfodesc', 'theme_flexibase');
            $setting = new admin_setting_heading($name, $heading, $information);
            $temp->add($setting);

            // Get the default category icon.
            $defaultcategoryicon = get_config('theme_flexibase', 'defaultcategoryicon');
            if (empty($defaultcategoryicon)) {
                $defaultcategoryicon = 'folder-open';
            }

            // Get all category IDs and their pretty names
            require_once($CFG->libdir . '/coursecatlib.php');
            $coursecats = coursecat::make_categories_list();

            // Go through all categories and create the necessary settings
            foreach ($coursecats as $key => $value) {

                // Category Icons for each category.
                $name = 'theme_flexibase/categoryicon';
                $title = $value;
                $description = get_string('categoryiconcategory', 'theme_flexibase', array('category' => $value));
                $default = $defaultcategoryicon;
                $setting = new admin_setting_configtext($name . $key, $title, $description, $default);
                $setting->set_updatedcallback('theme_reset_all_caches');
                $temp->add($setting);
            }
            unset($coursecats);
        }
    }

 				
    $ADMIN->add('theme_flexibase', $temp);

 	/* Social Network Settings */
	$temp = new admin_settingpage('theme_flexibase_social', get_string('socialheading', 'theme_flexibase'));
	$temp->add(new admin_setting_heading('theme_flexibase_social', get_string('socialheadingsub', 'theme_flexibase'),
            format_text(get_string('socialdesc' , 'theme_flexibase'), FORMAT_MARKDOWN)));

    // Website url setting.
    $name = 'theme_flexibase/website';
    $title = get_string('website', 'theme_flexibase');
    $description = get_string('websitedesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Blog url setting.
    $name = 'theme_flexibase/blog';
    $title = get_string('blog', 'theme_flexibase');
    $description = get_string('blogdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Facebook url setting.
    $name = 'theme_flexibase/facebook';
    $title = get_string(    	'facebook', 'theme_flexibase');
    $description = get_string(    	'facebookdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Flickr url setting.
    $name = 'theme_flexibase/flickr';
    $title = get_string('flickr', 'theme_flexibase');
    $description = get_string('flickrdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_flexibase/twitter';
    $title = get_string('twitter', 'theme_flexibase');
    $description = get_string('twitterdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_flexibase/googleplus';
    $title = get_string('googleplus', 'theme_flexibase');
    $description = get_string('googleplusdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_flexibase/linkedin';
    $title = get_string('linkedin', 'theme_flexibase');
    $description = get_string('linkedindesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tumblr url setting.
    $name = 'theme_flexibase/tumblr';
    $title = get_string('tumblr', 'theme_flexibase');
    $description = get_string('tumblrdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_flexibase/pinterest';
    $title = get_string('pinterest', 'theme_flexibase');
    $description = get_string('pinterestdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Instagram url setting.
    $name = 'theme_flexibase/instagram';
    $title = get_string('instagram', 'theme_flexibase');
    $description = get_string('instagramdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // YouTube url setting.
    $name = 'theme_flexibase/youtube';
    $title = get_string('youtube', 'theme_flexibase');
    $description = get_string('youtubedesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Vimeo url setting.
    $name = 'theme_flexibase/vimeo';
    $title = get_string('vimeo', 'theme_flexibase');
    $description = get_string('vimeodesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Skype url setting.
    $name = 'theme_flexibase/skype';
    $title = get_string('skype', 'theme_flexibase');
    $description = get_string('skypedesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // General social url setting 1.
    $name = 'theme_flexibase/social1';
    $title = get_string('sociallink', 'theme_flexibase');
    $description = get_string('sociallinkdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // social icon setting 1.
    $name = 'theme_flexibase/socialicon1';
    $title = get_string('sociallinkicon', 'theme_flexibase');
    $description = get_string('sociallinkicondesc', 'theme_flexibase');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // General social url setting 2.
    $name = 'theme_flexibase/social2';
    $title = get_string('sociallink', 'theme_flexibase');
    $description = get_string('sociallinkdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // social icon setting 2.
    $name = 'theme_flexibase/socialicon2';
    $title = get_string('sociallinkicon', 'theme_flexibase');
    $description = get_string('sociallinkicondesc', 'theme_flexibase');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // General social url setting 3.
    $name = 'theme_flexibase/social3';
    $title = get_string('sociallink', 'theme_flexibase');
    $description = get_string('sociallinkdesc', 'theme_flexibase');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // social icon setting 3.
    $name = 'theme_flexibase/socialicon3';
    $title = get_string('sociallinkicon', 'theme_flexibase');
    $description = get_string('sociallinkicondesc', 'theme_flexibase');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_flexibase', $temp);

