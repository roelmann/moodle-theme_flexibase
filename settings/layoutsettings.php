<?php
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
