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
 * Theme Flexibase config file.
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

$THEME->name = 'flexibase';
$THEME->parents = array('bootstrap');
$THEME->parents_exclude_sheets = array('bootstrap' => array('moodle', 'moodle-rtl'));

$THEME->sheets = array(
// If the less files are removed below during development then the readmes/base.txt file can be added here.
    'font-awesome', // Default FA css unaltered from upstream.
    'flexlayout',   // Flexibox layout rules.
    'alerts',       // Alerts theme styles.
    'carousel',     // Carousel theme styles - no core styles as core carousel css is already included in bootstrap.
    'marketing',    // Marketing blocks core styles.
    'coursebox',    // Course tile listing styles.
    'awesomebar',   // Awesomebar clone of upstream.
    'styles',       // Last but one - theme style overrides.
    'custom'        // Must be last - contains the css settings to override other css.
    );
$THEME->editor_sheets = array(); // TODO.

// Remove these if not using less compilation.
$THEME->lessfile = 'flexibase';
$THEME->lessvariablescallback = 'theme_flexibase_less_variables';
$THEME->extralesscallback = 'theme_flexibase_extra_less';
// ---------------------

$THEME->doctype = 'html5';                  // Set doctype.
$THEME->supportscssoptimisation = false;    // Disable css optimisation because we are using LESS on the fly.
$THEME->yuicssmodules = array();            // List any additional YUI-CSS modules - none.
$THEME->enable_dock = true;                 // Enable docking.

$THEME->rendererfactory = 'theme_overridden_renderer_factory';      // Enable renderer overrides.
$THEME->csspostprocess = 'theme_flexibase_process_css';             // Enable css post processing.

/* Theme layouts - identifying regions, options and layout files
 * -------------------------------------------------------------
 */
$THEME->layouts = array(
    // Most backwards compatible layout without the blocks - this is the layout used by default.
    'base' => array(
        'file' => 'default.php',
        'regions' => array(),
    ),
    // Standard layout with blocks, this is recommended for most pages with general information.
    'standard' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // Main course page.
    'course' => array(
        'file' => 'course.php',
        'regions' => array(
            'side-pre',
            'side-post',
            'side-top',
            'side-bottom',
            'side-mainpre',
            'side-mainpost',
            'side-maintop',
            'side-mainbottom'
        ),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    ),
    // Part of course, typical for modules - default page layout if $cm specified in require_login().
    'incourse' => array(
        'file' => 'course.php',
        'regions' => array(
            'side-pre',
            'side-post',
            'side-top',
            'side-bottom',
            'side-mainpre',
            'side-mainpost',
            'side-maintop',
            'side-mainbottom'
        ),
        'defaultregion' => 'side-pre',
    ),
    'coursecategory' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array(
            'side-pre',
            'side-post',
            'side-top',
            'side-bottom',
            'side-mainpre',
            'side-mainpost',
            'side-maintop',
            'side-mainbottom'
        ),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true),
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('fluid' => true),
    ),
    // My dashboard page.
    'mydashboard' => array(
        'file' => 'myhome.php',
        'regions' => array(
            'side-pre',
            'side-post',
            'side-top',
            'side-bottom',
            'side-mainpre',
            'side-mainpost',
            'side-maintop',
            'side-mainbottom'
        ),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    ),
    // My public page.
    'mypublic' => array(
        'file' => 'default.php',
        'regions' => array(
            'side-pre',
            'side-post',
            'side-top',
            'side-bottom',
            'side-mainpre',
            'side-mainpost',
            'side-maintop',
            'side-mainbottom'
        ),
        'defaultregion' => 'side-pre',
    ),
    'login' => array(
        'file' => 'login.php',
        'regions' => array(),
        'options' => array('langmenu' => true, 'nonavbar' => true, 'noawesomebar' => true),
    ),
    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'popup.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => true, 'noawesomebar' => true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nocoursefooter' => true, 'noawesomebar' => true),
    ),
    // Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible.
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, links, or API calls that would lead to database or cache interaction.
    // Please be extremely careful if you are modifying this layout.
    'maintenance' => array(
        'file' => 'maintenance.php',
        'regions' => array(),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => false, 'noawesomebar' => true),
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array(),
    ),
    // The pagelayout used for reports - minimal blocks to maximise space.
    'report' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'secure.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre'
    ),
);
