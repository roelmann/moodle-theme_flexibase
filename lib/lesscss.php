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
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
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

    // Set caption background for carousel.
    if (!empty($theme->settings->captionbackgroundcolour)) {
        if ($theme->settings->captionbackgroundcolour === 'dark') {
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
    // Set caption text colour for carousel.
    if (!empty($theme->settings->captiontextcolour)) {
        $captiontextcolour = $theme->settings->captiontextcolour;
    } else {
        $captiontextcolour = '#ffffff';
    }
    $css = theme_flexibase_set_captiontextcolour($css, $captiontextcolour);
    // Colour overlay for course tiles.
    if (!empty($theme->settings->rendereroverlaycolour)) {
        $rendereroverlaycolour = $theme->settings->rendereroverlaycolour;
    } else {
        $rendereroverlaycolour = null;
    }
    $css = theme_flexibase_set_rendereroverlaycolour($css, $rendereroverlaycolour);
    // Font colour for course tiles.
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
/**
 * Set the main site logo.
 *
 * @param string $css
 * @param string $logo
 * @param string $logotag
 * @param integer $logoheight
 * @param integer $logowidth
 * @param string $logodisplay
 * @param integer $width
 * @param integer $height
 * @param string $display
 * @param string $replacement
 * @param array $dimensions
 * 
 * @return string
 */
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
/**
 * Set the mini site logo.
 *
 * @param string $css
 * @param string $minilogo
 * @param string $minilogotag
 * @param integer $minilogoheight
 * @param integer $minilogowidth
 * @param string $minilogodisplay
 * @param integer $miniwidth
 * @param integer $miniheight
 * @param string $minidisplay
 * @param string $replacement
 * @param array $dimensions
 * 
 * @return string
 */
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
/**
 * Set the login page background image.
 *
 * @param string $css
 * @param string $loginbgtag
 * @param integer $loginbgheight
 * @param integer $loginbgwidth
 * @param string $loginbgdisplay
 * @param integer $loginbgwidth
 * @param integer $loginbgheight
 * @param string $loginbgdisplay
 * @param string $replacement
 * @param array $dimensions
 * 
 * @return string
 */
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
/**
 * Set the capton background colour on the slider.
 *
 * @param string $css
 * @param string $captionbackgroundcolour
 * @param string $tag
 * @param string $replacement
 * 
 * @return string
 */
function theme_flexibase_set_captionbackgroundcolour($css, $captionbackgroundcolour) {
    $tag = '[[setting:captionbackgroundcolour]]';
    $replacement = $captionbackgroundcolour;
    if (!($replacement)) {
        $replacement = 'rgba(255,255,255,0.2)';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Set the capton border colour on the slider.
 *
 * @param string $css
 * @param string $captionbordercolour
 * @param string $tag
 * @param string $replacement
 * 
 * @return string
 */
function theme_flexibase_set_captionbordercolour($css, $captionbordercolour) {
    $tag = '[[setting:captionbordercolour]]';
    $replacement = $captionbordercolour;
    if (!($replacement)) {
        $replacement = 'rgba(255,255,255,0.6)';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Set the capton text colour on the slider.
 *
 * @param string $css
 * @param string $captiontextcolour
 * @param string $tag
 * @param string $replacement
 * 
 * @return string
 */
function theme_flexibase_set_captiontextcolour($css, $captiontextcolour) {
    $tag = '[[setting:captiontextcolour]]';
    $replacement = $captiontextcolour;
    if (!($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Set the carousel border colour on the slider.
 *
 * @param string $css
 * @param string $carouselbordercolour
 * @param string $tag
 * @param string $replacement
 * 
 * @return string
 */
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
 * Set the overlay background colour for course tiles.
 *
 * @param string $css
 * @param string $rendereroverlaycolour
 * @param string $tag
 * @param string $replacement
 * 
 * @return string
 */
function theme_flexibase_set_rendereroverlaycolour($css, $rendereroverlaycolour) {
    $tag = '[[setting:rendereroverlaycolour]]';
    $replacement = $rendereroverlaycolour;
    if (is_null($replacement)) {
        $replacement = '#001e3c';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Set the overlay text colour for course tiles.
 *
 * @param string $css
 * @param string $rendereroverlayfontcolour
 * @param string $tag
 * @param string $replacement
 * 
 * @return string
 */
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
