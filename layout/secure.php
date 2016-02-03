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

if (!empty($PAGE->theme->settings->frontpagelayout)) {
    $layoutoption = $PAGE->theme->settings->frontpagelayout;
} else {
    $layoutoption = 'preandpost';
}

$hasmarketing = (empty($PAGE->theme->settings->togglemarketing)) ? false : $PAGE->theme->settings->togglemarketing;

require('includes/preheaderlogic.php');
require('includes/header.php');
?>

<div id="page" class="container-fluid">
    <?php require('includes/alerts.php'); ?>

    <?php require('includes/breadcrumb.php'); ?>

    <div id="page-header" class="clearfix">
        <!-- Start Carousel -->
        <?php require('includes/carousel2.php');?>
        <!-- End Carousel -->

        <!-- Start Marketing Spots -->
        <?php
            if ($hasmarketing == 1) {
                require_once(dirname(__FILE__).'/includes/marketing.php');
            } else if ($hasmarketing == 2 && !isloggedin()) {
                require_once(dirname(__FILE__).'/includes/marketing.php');
            } else if ($hasmarketing == 3 && isloggedin()) {
                require_once(dirname(__FILE__).'/includes/marketing.php');
            }
        ?>
        <!-- End Marketing Spots -->


        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
        <div id="region-top">
            <?php
            if ($knownregiontop) {
                echo $OUTPUT->blocks('side-top', "sidetop flexcontainer");
            }
            ?>
        </div>
    </div>

    <div id="page-content" class="flexcontainer">
    <?php
    require('includes/mainbody.php');

    require('includes/footer.php');
    ?>
    <!-- Initialize slideshow -->
<script type="text/javascript">
    jQuery(document).ready(function () {
    $('.carousel').carousel();
    });
</script>
</div>
</body>
</html>
