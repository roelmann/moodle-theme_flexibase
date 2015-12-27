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
 * Theme Flexibase lib file.
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

/* NOTE: basic js and yui are inherited from the parent. However, we want
 * to be able to add additional bootstrap features (or allow users to use
 * them in their content. BUT we can't add ALL bootstrap jQuery as it
 * clashes with the existing yui ported javascript.
 * For development I have included all the sections of bootstrap js
 * separately.
 */
/**
 * Call the javascript for the page.
 *
 * @param stdClass $page
 */
function theme_flexibase_page_init(moodle_page $page) {
    global $CFG;
    $page->requires->jquery_plugin('modernizr', 'theme_flexibase');

    $page->requires->jquery_plugin('carousel', 'theme_flexibase');
    $page->requires->jquery_plugin('alertdismissal', 'theme_flexibase');
    $page->requires->jquery_plugin('transitions', 'theme_flexibase');
    $page->requires->jquery_plugin('advancedbuttons', 'theme_flexibase');
    $page->requires->jquery_plugin('modals', 'theme_flexibase');
    $page->requires->jquery_plugin('tooltips', 'theme_flexibase');
    $page->requires->jquery_plugin('popovers', 'theme_flexibase');
    $page->requires->jquery_plugin('togglabletabs', 'theme_flexibase');
    $page->requires->jquery_plugin('affix', 'theme_flexibase');
    $page->requires->jquery_plugin('scrollspy', 'theme_flexibase');
}
