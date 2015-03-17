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
 * Theme Flexibase settings file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @parents    Bootstrap
 * @copyright  2014 Bas Brands
 * @credits    Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 *             Many others for non-specific but vital inspirations,
 *             suggestions and support
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */
$temp = null;
$settings = null;

defined('MOODLE_INTERNAL') || die;

    $ADMIN->add('themes', new admin_category('theme_flexibase', 'FlexiBase Settings'));

    include('settings/generalsettings.php');
    include('settings/mainless.php');
    include('settings/additionalless.php');
    include('settings/layoutsettings.php');
    include('settings/awesomebar.php');
    include('settings/alerts.php');
    include('settings/carousel.php');
    include('settings/marketing.php');
    include('settings/coursetiles.php');
    include('settings/categoryicons.php');
    include('settings/socialicons.php');
