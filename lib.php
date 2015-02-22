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

function theme_flexibase_process_css($css, $theme) {

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_flexibase_set_logo($css, $logo);
    // Set the background image for the minilogo.
    $minilogo = $theme->setting_file_url('minilogo', 'minilogo');
    $css = theme_flexibase_set_minilogo($css, $minilogo);
    // Set the background image for the login background.
    $loginbg = $theme->setting_file_url('loginbg', 'loginbg');
    $css = theme_flexibase_set_loginbg($css, $loginbg);

    
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
    
    if(!empty($theme->settings->rendereroverlaycolour)) {
        $rendereroverlaycolour = $theme->settings->rendereroverlaycolour;
    } else {
        $rendereroverlaycolour = null;
    }
    $css = theme_flexibase_set_rendereroverlaycolour($css, $rendereroverlaycolour);
    
    if (!empty($theme->settings->rendereroverlayfontcolour)) {
        $rendereroverlayfontcolour = $theme->settings->rendereroverlayfontcolour;
    } else {
        $rendereroverlayfontcolour = null;
    }
    $css = theme_flexibase_set_rendereroverlayfontcolour($css, $rendereroverlayfontcolour);


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
function theme_flexibase_set_minilogo($css, $minilogo) {
    $minilogotag = '[[setting:minilogo]]';
    $minilogoheight = '[[minilogoheight]]';
    $minilogowidth = '[[minilogowidth]]';
    $minilogodisplay = '[[minilogodisplay]]';
    $miniwidth = '0';
    $miniheight = '0';
    $minidisplay = 'none';
    $replacement = $minilogo;
    if (is_null($replacement)) {
        $replacement = '';
    } else {
        $dimensions = getimagesize('http:'.$minilogo);
        $miniwidth = $dimensions[0] . 'px';
        $miniheight = $dimensions[1] . 'px';
        $minidisplay = 'block';
    }
    $css = str_replace($minilogotag, $replacement, $css);
    $css = str_replace($minilogoheight, $miniheight, $css);
    $css = str_replace($minilogowidth, $miniwidth, $css);
    $css = str_replace($minilogodisplay, $minidisplay, $css);

    return $css;
}
function theme_flexibase_set_loginbg($css, $loginbg) {
    $loginbgtag = '[[setting:loginbg]]';
    $loginbgheight = '[[loginbgheight]]';
    $loginbgwidth = '[[loginbgwidth]]';
    $loginbgdisplay = '[[loginbgdisplay]]';
    $loginbgwidth = '0';
    $loginbgheight = '0';
    $loginbgdisplay = 'none';
    $replacement = $loginbg;
    if (is_null($replacement)) {
        $replacement = '';
    } else {
        $dimensions = getimagesize('http:'.$loginbg);
        $loginbgwidth = $dimensions[0] . 'px';
        $loginbgheight = $dimensions[1] . 'px';
        $loginbgdisplay = 'block';
    }
    $css = str_replace($loginbgtag, $replacement, $css);
    $css = str_replace($loginbgheight, $loginbgheight, $css);
    $css = str_replace($loginbgwidth, $loginbgwidth, $css);
    $css = str_replace($loginbgdisplay, $loginbgdisplay, $css);

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
function theme_flexibase_set_rendereroverlaycolour($css, $rendereroverlaycolour) {
    $tag = '[[setting:rendereroverlaycolour]]';
    $replacement = $rendereroverlaycolour;
    if (is_null($replacement)) {
        $replacement = '#001e3c';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flexibase_set_rendereroverlayfontcolour($css, $rendereroverlayfontcolour) {
    $tag = '[[setting:rendereroverlayfontcolour]]';
    $replacement = $rendereroverlayfontcolour;
    if (is_null($replacement)) {
        $replacement = '#FFF';
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
    } else if ($filearea === 'minilogo') {
            return $theme->setting_file_serve('minilogo', $args, $forcedownload, $options);
    } else if ($filearea === 'loginbg') {
            return $theme->setting_file_serve('loginbg', $args, $forcedownload, $options);
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

function theme_flexibase_get_course_activities() {
    GLOBAL $CFG, $PAGE, $OUTPUT;
    // A copy of block_activity_modules.
    $course = $PAGE->course;
    $content = new stdClass();
    $modinfo = get_fast_modinfo($course);
    $modfullnames = array();

    $archetypes = array();

    foreach ($modinfo->cms as $cm) {
        // Exclude activities which are not visible or have no link (=label).
        if (!$cm->uservisible or !$cm->has_view()) {
            continue;
        }
        if (array_key_exists($cm->modname, $modfullnames)) {
            continue;
        }
        if (!array_key_exists($cm->modname, $archetypes)) {
            $archetypes[$cm->modname] = plugin_supports('mod', $cm->modname, FEATURE_MOD_ARCHETYPE, MOD_ARCHETYPE_OTHER);
        }
        if ($archetypes[$cm->modname] == MOD_ARCHETYPE_RESOURCE) {
            if (!array_key_exists('resources', $modfullnames)) {
                $modfullnames['resources'] = get_string('resources');
            }
        } else {
            $modfullnames[$cm->modname] = $cm->modplural;
        }
    }
    core_collator::asort($modfullnames);

    return $modfullnames;
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

//    $page->requires->jquery_plugin('dropdowns', 'theme_flexibase'); Excluded as this clashes with the parent version and causes the dropdowns in the nav bar to fail
//    $page->requires->jquery_plugin('collapse', 'theme_flexibase');Excluded as this clashes with the parent version and causes the nav bar collapse to fail

}
