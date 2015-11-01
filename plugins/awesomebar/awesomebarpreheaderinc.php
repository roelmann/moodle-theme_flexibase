<?php
// This file is part of The Bootstrap 3 Moodle theme
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
 * Theme Flexibase layout file.
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

// Initialise and generate Awesomebar.
if (!empty($PAGE->theme->settings->showawesomebar) && $PAGE->theme->settings->showawesomebar) {
    $flexibase = clone $PAGE->theme->settings;
    $flexibase->awesome_nav = '';
    $flexibase->awesome_settings = '';

    if (empty($PAGE->layout_options['noawesomebar'])) {
        // Ensure that navigation has been initialised properly, in case Navigation block is not visible.
        $PAGE->navigation->initialise();
        $flexibase->topsettings = $PAGE->get_renderer('theme_flexibase', 'topsettings');
        $flexibase->awesome_nav = $flexibase->topsettings->navigation_tree($PAGE->navigation);
        $flexibase->awesome_settings = $flexibase->topsettings->settings_tree($PAGE->settingsnav);
        if (!strlen($flexibase->awesome_nav) && !strlen($flexibase->awesome_settings)) {
            if (!$flexibase->custommenuinawesomebar || !(empty($PAGE->layout_options['nocustommenu'])
            && strlen($OUTPUT->custom_menu()))) {
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
