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

if (!empty($PAGE->theme->settings->showawesomebar) && $PAGE->theme->settings->showawesomebar = 1) {
    $custommenu = $OUTPUT->custom_menu();
    $hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

    if (empty($PAGE->layout_options['noawesomebar'])) { ?>
        <div id="awesomebar" class="flexibase-awesome-bar">
            <?php
            // Don't show awesomebar if site is being upgraded or when forcibly changing password.
            if ($this->page->pagelayout != 'maintenance' && !(get_user_preferences('auth_forcepasswordchange')
            && !session_is_loggedinas())) {
                echo $flexibase->awesome_nav;
/*              Awesomebar setting not used in flexibase but left in for porting to other themes.
 *              if ($hascustommenu && !empty($flexibase->custommenuinawesomebar)
 *                      && empty($flexibase->custommenuafterawesomebar)) {
 *                  echo $custommenu;
 *              }
 */
                echo $flexibase->awesome_settings;
/*              Awesomebar setting not used in flexibase but left in for porting to other themes.
 *              if ($hascustommenu && !empty($flexibase->custommenuinawesomebar)
 *                      && !empty($flexibase->custommenuafterawesomebar)) {
 *                  echo $custommenu;
 *              }
 */
                echo $flexibase->topsettings->settings_search_box();
            }
            ?>
        </div>
    <?php
    }
}
