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
 * Theme flexibase lib.
 *
 * @package    theme_flexibase
 * @copyright  2014 Bas Brands
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function theme_flexibase_process_css($css, $theme) {

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_flexibase_set_logo($css, $logo);
    
    // Set caption background.
    if (!empty($theme->settings->captionbackgroundcolour)) {
        if($theme->settings->captionbackgroundcolour === 'dark') {
			$captionbackgroundcolour = 'rgba(0,0,0,0.2)';
			$captionbordercolour = 'rgba(0,0,0,0.6)';
			$carouselbordercolour = '#111111';
		} else {
			$captionbackgroundcolour = 'rgba(255,255,255,0.2)';
			$captionbordercolour = 'rgba(255,255,255,0.6)';
			$carouselbordercolour = '#ffffff';
		}
	}
    $css = theme_flexibase_set_captionbackgroundcolour($css, $captionbackgroundcolour);
    $css = theme_flexibase_set_captionbordercolour($css, $captionbordercolour);
    $css = theme_flexibase_set_carouselbordercolour($css, $carouselbordercolour);

    // Set caption text colour.
    if (!empty($theme->settings->captiontextcolour)) {
        $captiontextcolour = $theme->settings->captiontextcolour;
    } else {
        $captiontextcolour = '#ffffff';
    }
    $css = theme_flexibase_set_captiontextcolour($css, $captiontextcolour);

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_flexibase_set_customcss($css, $customcss);

    return $css;
}


function theme_flexibase_set_logo($css, $logo) {
    $logotag = '[[setting:logo]]';
    $logoheight = '[[logoheight]]';
    $logowidth = '[[logowidth]]';
    $logodisplay = '[[logodisplay]]';
    $width = '0';
    $height = '0';
    $display = 'none';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = '';
    } else {
        $dimensions = getimagesize('http:'.$logo);
        $width = $dimensions[0] . 'px';
        $height = $dimensions[1] . 'px';
        $display = 'block';
    }
    $css = str_replace($logotag, $replacement, $css);
    $css = str_replace($logoheight, $height, $css);
    $css = str_replace($logowidth, $width, $css);
    $css = str_replace($logodisplay, $display, $css);

    return $css;
}
function theme_flexibase_set_captionbackgroundcolour($css, $captionbackgroundcolour) {
    $tag = '[[setting:captionbackgroundcolour]]';
    $replacement = $captionbackgroundcolour;
    if (!($replacement)) {
        $replacement = 'rgba(255,255,255,0.2)';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_flexibase_set_captionbordercolour($css, $captionbordercolour) {
    $tag = '[[setting:captionbordercolour]]';
    $replacement = $captionbordercolour;
    if (!($replacement)) {
        $replacement = 'rgba(255,255,255,0.6)';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_flexibase_set_captiontextcolour($css, $captiontextcolour) {
    $tag = '[[setting:captiontextcolour]]';
    $replacement = $captiontextcolour;
    if (!($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_flexibase_set_carouselbordercolour($css, $carouselbordercolour) {
    $tag = '[[setting:carouselbordercolour]]';
    $replacement = $carouselbordercolour;
    if (!($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

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
    } else if (preg_match("/slide[1-9][0-9]*image/", $filearea) !== false) { // carousel images
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);

    } else {
        send_file_not_found();
    }
}
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

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_flexibase_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


function theme_flexibase_page_init(moodle_page $page) {
    global $CFG;
/* NOTE: basic js and yui are inherited from the parent. However, we want
 * to be able to add additional bootstrap features (or allow users to use
 * them in their content. BUT we can't add ALL bootstrap jQuery as it
 * clashes with the existing yui ported javascript.
 * For development I have included all the sections of bootstrap js
 * separately.
 * TODO: download a bootstrap.min.js with the required js element but
 * excluding those that cause clashes
 */
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

//    $page->requires->jquery_plugin('dropdowns', 'theme_flexibase'); Excluded as this clashes with the parent version and causes the dropdowns in the nav bar to fail
//    $page->requires->jquery_plugin('collapse', 'theme_flexibase');Excluded as this clashes with the parent version and causes the nav bar collapse to fail

}
