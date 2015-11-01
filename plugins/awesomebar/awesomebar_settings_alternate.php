<?php
$settings->add(new admin_setting_heading('themeflexibaseawesombarsettings',
        get_string('awesomebarsettings', 'theme_flexibase'),
        get_string('awesomebarsettingsdesc', 'theme_flexibase')));

// Show Awesomebar.
$name = 'theme_flexibase/showawesomebar';
$title = get_string('showawesomebar', 'theme_flexibase');
$description = get_string('showawesomebardesc', 'theme_flexibase');
$default = 0;
$choices = array(1 => 'Yes', 0 => 'No');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Hide Settings block.
$name = 'theme_flexibase/hidesettingsblock';
$title = get_string('hidesettingsblock', 'theme_flexibase');
$description = get_string('hidesettingsblockdesc', 'theme_flexibase');
$default = 0;
$choices = array(1 => 'Yes', 0 => 'No');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Hide Navigation block.
$name = 'theme_flexibase/hidenavigationblock';
$title = get_string('hidenavigationblock', 'theme_flexibase');
$description = get_string('hidenavigationblockdesc', 'theme_flexibase');
$default = 0;
$choices = array(1 => 'Yes', 0 => 'No');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

/* Add custom menu to Awesomebar - not used in Flexibase, but left in for porting to other themes.
 *    $name = 'theme_flexibase/custommenuinawesomebar';
 *    $title = get_string('custommenuinawesomebar', 'theme_flexibase');
 *    $description = get_string('custommenuinawesomebardesc', 'theme_flexibase');
 *    $default = 0;
 *    $choices = array(1 => 'Yes', 0 => 'No');
 *    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
 *    $settings->add($setting);
 */
/* Place custom menu after Awesomebar - not used in Flexibase, but left in for porting to other themes.
 *    $name = 'theme_flexibase/custommenuafterawesomebar';
 *    $title = get_string('custommenuafterawesomebar', 'theme_flexibase');
 *    $description = get_string('custommenuafterawesomebardesc', 'theme_flexibase');
 *    $default = 0;
 *    $choices = array(0 => 'No', 1 => 'Yes');
 *    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
 *    $settings->add($setting);
 */

// Hide courses menu from non-logged-in users.
$name = 'theme_flexibase/coursesloggedinonly';
$title = get_string('coursesloggedinonly', 'theme_flexibase');
$description = get_string('coursesloggedinonlydesc', 'theme_flexibase');
$default = 0;
$choices = array(0 => 'No', 1 => 'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Don't actually show courses under "Courses" menu item.
$name = 'theme_flexibase/coursesleafonly';
$title = get_string('coursesleafonly', 'theme_flexibase');
$description = get_string('coursesleafonlydesc', 'theme_flexibase');
$default = 0;
$choices = array(0 => 'Yes', 1 => 'No');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Expand to activities at cost of performance.
$name = 'theme_flexibase/expandtoactivities';
$title = get_string('expandtoactivities', 'theme_flexibase');
$description = get_string('expandtoactivitiesdesc', 'theme_flexibase');
$default = 0;
$choices = array(0 => 'No', 1 => 'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Expand site admin tree at cost of performance.
$name = 'theme_flexibase/alwaysexpandsiteadmin';
$title = get_string('alwaysexpandsiteadmin', 'theme_flexibase');
$description = get_string('alwaysexpandsiteadmindesc', 'theme_flexibase');
$default = 0;
$choices = array(0 => 'No', 1 => 'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$settings->add($setting);
