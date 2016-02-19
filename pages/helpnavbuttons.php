<?php
// This file is part of The Bootstrap 3 Moodle theme
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
 * Theme Flexibase settings help page.
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
?>
<div class="helppagenavbuttons">
    <h3><?php echo get_string('pageshelplinks', 'theme_flexibase')?></h3>
    <?php if (is_siteadmin()) { ?>
        <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/adminhelp.php">
            <?php echo get_string('adminhelp', 'theme_flexibase')?>
        </a>
        <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/settingshelp.php">
            <?php echo get_string('settingshelp', 'theme_flexibase')?>
        </a>
        <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/customisationshelp.php">
            <?php echo get_string('customisationshelp', 'theme_flexibase')?>
        </a>
    <?php } ?>
        <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/layouthelp.php">
            <?php echo get_string('layoutshelp', 'theme_flexibase')?>
        </a>
        <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/contenthelp.php">
            <?php echo get_string('contenthelp', 'theme_flexibase')?>
        </a>
        <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/bscss.php">
            <?php echo get_string('bootstraphelp', 'theme_flexibase')?>
        </a>
</div>
