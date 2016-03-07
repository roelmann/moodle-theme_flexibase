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
 * Theme Flexibase layout file.
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

<div id="page-marketing" class="">
    <div class="marketing-wrapper <?php echo $evenflexmkting; ?>">

        <!-- Start Spot One -->
        <?php
        if ($hasmarketing1) {
        ?>
            <div class="marketing-block block panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-<?php echo $PAGE->theme->settings->marketing1icon ?>"></i>
                        <?php echo $PAGE->theme->settings->marketing1 ?>
                    </h3>
                </div>
                <div class="marketing-block-content">
                    <?php echo $PAGE->theme->settings->marketing1content ?>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- End Spot One -->

        <!-- Start Spot Two -->
        <?php
        if ($hasmarketing2) {
        ?>
            <div class="marketing-block block panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-<?php echo $PAGE->theme->settings->marketing2icon ?>"></i>
                        <?php echo $PAGE->theme->settings->marketing2 ?>
                    </h3>
                </div>
                <div class="marketing-block-content">
                    <?php echo $PAGE->theme->settings->marketing2content ?>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- End Spot Two -->

        <!-- Start Spot Three -->
        <?php
        if ($hasmarketing3) {
        ?>
            <div class="marketing-block block panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-<?php echo $PAGE->theme->settings->marketing3icon ?>"></i>
                        <?php echo $PAGE->theme->settings->marketing3 ?>
                    </h3>
                </div>
                <div class="marketing-block-content">
                    <?php echo $PAGE->theme->settings->marketing3content ?>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- End Spot Three -->

        <!-- Start Spot Four -->
        <?php
        if ($hasmarketing4) {
        ?>
            <div class="marketing-block block panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-<?php echo $PAGE->theme->settings->marketing4icon ?>"></i>
                        <?php echo $PAGE->theme->settings->marketing4 ?>
                    </h3>
                </div>
                <div class="marketing-block-content">
                    <?php echo $PAGE->theme->settings->marketing4content ?>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- End Spot Four -->

    </div>
</div>
