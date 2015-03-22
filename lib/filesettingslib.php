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
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_flexibase_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('flexibase');
    }
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'logo')) {
        $theme = theme_config::load('flexibase');
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if (preg_match("/slide[1-9][0-9]*image/", $filearea) !== false) { // Carousel images.
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if ($filearea === 'minilogo') {
            return $theme->setting_file_serve('minilogo', $args, $forcedownload, $options);
    } else if ($filearea === 'loginbg') {
            return $theme->setting_file_serve('loginbg', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}
/**
 * This function creates the dynamic HTML needed for some
 * settings and then passes it back in an object so it can
 * be echo'd to the page.
 *
 * This keeps the logic out of the layout files.
 * 
 * @param string $setting bring the required setting into the function
 * @param bool $format
 * @param string $setting
 * @param array $theme
 * @param stdclass $CFG
 * @return string
 */
function theme_flexibase_get_setting($setting, $format = false) {
    global $CFG;
    require_once($CFG->dirroot . '/lib/weblib.php');
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('flexibase');
    }
    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}
