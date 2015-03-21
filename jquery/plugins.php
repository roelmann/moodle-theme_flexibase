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
 * Theme Flexibase Plugins file.
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

$plugins = array(
/* NOTE: basic js and yui are inherited from the parent. However, we want
 * to be able to add additional bootstrap features (or allow users to use
 * them in their content. BUT we can't add ALL bootstrap jQuery as it
 * clashes with the existing yui ported javascript.
 * For development I have included all the sections of bootstrap js
 * separately.
 */
    'modernizr' => array('files' => array('modernizr.js')),

    'carousel' => array('files' => array('carousel.js')),
    'alertdismissal' => array('files' => array('alertdismissal.js')),
    'transitions' => array('files' => array('transitions.js')),
    'advancedbuttons' => array('files' => array('advancedbuttons.js')),
    'modals' => array('files' => array('modals.js')),
    'tooltips' => array('files' => array('tooltips.js')),
    'popovers' => array('files' => array('popovers.js')),
    'togglabletabs' => array('files' => array('togglabletabs.js')),
    'affix' => array('files' => array('affix.js')),
    'scrollspy' => array('files' => array('scrollspy.js')),
);
