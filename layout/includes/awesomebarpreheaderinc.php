<?php

    // Initialise and generate Awesomebar.
    if (!empty($PAGE->theme->settings->showawesomebar) && $PAGE->theme->settings->showawesomebar) {

		$flexibase = clone $PAGE->theme->settings;
		$flexibase->awesome_nav = '';
		$flexibase->awesome_settings = '';

		if (empty($PAGE->layout_options['noawesomebar'])) {
			// Ensure that navigation has been initialised properly, in case Navigation block is not visible.
			$PAGE->navigation->initialise();
//			$PAGE->requires->yui_module('moodle-theme_flexibase-awesomebar', 'M.theme_flexibase.initAwesomeBar');
			$flexibase->topsettings = $PAGE->get_renderer('theme_flexibase','topsettings');
			$flexibase->awesome_nav = $flexibase->topsettings->navigation_tree($PAGE->navigation);
			$flexibase->awesome_settings = $flexibase->topsettings->settings_tree($PAGE->settingsnav);
			if (!strlen($flexibase->awesome_nav) && !strlen($flexibase->awesome_settings)) {
				if (!$flexibase->custommenuinawesomebar || !(empty($PAGE->layout_options['nocustommenu']) && strlen($OUTPUT->custom_menu()))) {
					// No Awesomebar content - hide it.
					$bodyclasses[] = 'flexibase_no_awesomebar';
				}
			}
		} else {
			$bodyclasses[] = 'flexibase_no_awesomebar';
		}
    
	} else {
        $bodyclasses[] = 'flexibase_no_awesomebar';
    }
