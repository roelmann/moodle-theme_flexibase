<?php
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
