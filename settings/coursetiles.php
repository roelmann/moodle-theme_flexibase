<?php
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
