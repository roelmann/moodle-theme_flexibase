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
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$search = 'admin-setting-theme_flexibase';
$pos = strpos($pageid, $search);
if ($pos > 0) {
?>
    <div class='themesettingsnav'>

        <h3>Quick Settings Links:</h3>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_generic">
            <?php echo get_string('genericsettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_lessbrand">
            <?php echo get_string('lessbrandsettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_lessadditional">
            <?php echo get_string('lessadditionalsettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_layout">
            <?php echo get_string('layoutheading', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_fonts">
            <?php echo get_string('fontsettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_imagebank">
            <?php echo get_string('imagebanksettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_menusettings">
            <?php echo get_string('menussettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_awesomebar">
            <?php echo get_string('awesomebarheading', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_alerts">
            <?php echo get_string('alertsheading', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_carousel">
            <?php echo get_string('carouselheading', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_marketing">
            <?php echo get_string('marketingheading', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_frontpage_courses">
            <?php echo get_string('frontpagecoursesettings', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_categoryicon">
            <?php echo get_string('categoryiconheading', 'theme_flexibase')?>
        </a>
        <a class="btn btn-success" href="settings.php?section=theme_flexibase_social">
            <?php echo get_string('socialheading', 'theme_flexibase')?>
        </a>

    </div>
<?php
}
