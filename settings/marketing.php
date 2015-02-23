<?php
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
