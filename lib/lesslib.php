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

/**
 * Returns variables for LESS.
 *
 * We will inject some LESS variables from the settings that the user has defined
 * for the theme. No need to write some custom LESS for this.
 *
 * @param theme_config $theme The theme config object.
 * @return array of LESS variables without the @.
 */
function theme_flexibase_less_variables($theme) {
    $variables = array();
    if (!empty($theme->settings->brandprimary)) {
        $variables['brand-primary'] = $theme->settings->brandprimary;
    }
    if (!empty($theme->settings->brandsuccess)) {
        $variables['brand-success'] = $theme->settings->brandsuccess;
    }
    if (!empty($theme->settings->brandinfo)) {
        $variables['brand-info'] = $theme->settings->brandinfo;
    }
    if (!empty($theme->settings->brandwarning)) {
        $variables['brand-warning'] = $theme->settings->brandwarning;
    }
    if (!empty($theme->settings->branddanger)) {
        $variables['brand-danger'] = $theme->settings->branddanger;
    }
    if (!empty($theme->settings->black)) {
        $variables['black'] = $theme->settings->black;
    }
    if (!empty($theme->settings->white)) {
        $variables['white'] = $theme->settings->white;
    }
    if (!empty($theme->settings->graybase)) {
        $variables['gray-base'] = $theme->settings->graybase;
    }

    if (!empty($theme->settings->brandprimarylight)) {
        $variables['brand-primary-light'] = $theme->settings->brandprimarylight;
    }
    if (!empty($theme->settings->brandprimarylighter)) {
        $variables['brand-primary-light'] = $theme->settings->brandprimarylighter;
    }
    if (!empty($theme->settings->brandprimarylightest)) {
        $variables['brand-primary-light'] = $theme->settings->brandprimarylightest;
    }
    if (!empty($theme->settings->brandsuccesslight)) {
        $variables['brand-success-light'] = $theme->settings->brandsuccesslight;
    }
    if (!empty($theme->settings->brandinfolight)) {
        $variables['brand-info-light'] = $theme->settings->brandinfolight;
    }
    if (!empty($theme->settings->brandwarninglight)) {
        $variables['brand-warning-light'] = $theme->settings->brandwarninglight;
    }
    if (!empty($theme->settings->branddangerlight)) {
        $variables['brand-danger-light'] = $theme->settings->branddangerlight;
    }
    if (!empty($theme->settings->graydarker)) {
        $variables['gray-darker'] = $theme->settings->graydarker;
    }
    if (!empty($theme->settings->graydark)) {
        $variables['gray-dark'] = $theme->settings->graydark;
    }
    if (!empty($theme->settings->gray)) {
        $variables['gray'] = $theme->settings->gray;
    }
    if (!empty($theme->settings->graylight)) {
        $variables['gray-light'] = $theme->settings->graylight;
    }
    if (!empty($theme->settings->graylighter)) {
        $variables['gray-lighter'] = $theme->settings->graylighter;
    }
    if (!empty($theme->settings->graylightest)) {
        $variables['gray-lightest'] = $theme->settings->graylightest;
    }

    return $variables;
}
/**
 * Returns extra variables for LESS.
 *
 * We will inject some LESS variables from the settings that the user has defined
 * for the theme. This will apply extra less as a custom setting.
 *
 * @param theme_config $theme The theme config object.
 * @return array of LESS selectors and rules.
 */
function theme_flexibase_extra_less ($theme) {
    $extraless = '';
    if (!empty($theme->settings->customless)) {
        $extraless = $theme->settings->customless;
    }

    return $extraless;
}
