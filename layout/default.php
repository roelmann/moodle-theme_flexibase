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

if (!empty($PAGE->theme->settings->defaultlayout)) {
    $layoutoption = $PAGE->theme->settings->defaultlayout;
} else {
    $layoutoption = 'preandpost';
}

require('includes/preheaderlogic.php');
require('includes/header.php');
?>

<div id="page" class="container-fluid">
    <?php require('includes/breadcrumb.php'); ?>

    <div id="page-content" class="flexcontainer">
        <div id="region-main" class="flexcontentmain <?php echo $layoutoption; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            ?>
            <div class="maincontentwrap flexcontainer">
                <div class="maincontentinnerwrap flexcontainer">
                <?php
                    echo $OUTPUT->main_content();
                    if ($knownregionmainpre) {
                        echo $OUTPUT->blocks('side-mainpre', "flexcontentmainpre $layoutoption");
                    }
                    if ($knownregionmainpost) {
                        echo $OUTPUT->blocks('side-mainpost', "flexcontentmainpost $layoutoption");
                    }
                ?>
                </div>
                <?php
                if ($knownregionmaintop) {
                    echo $OUTPUT->blocks('side-maintop', "flexcontentmaintop flexcontainer $layoutoption");
                }
                ?>
                <?php
                if ($knownregionbottom) {
                    echo $OUTPUT->blocks('side-mainbottom', "flexcontentmainbottom flexcontainer $layoutoption");
                }
            ?>
            </div>
            <?php
            echo $OUTPUT->course_content_footer();
            ?>
        </div>
        <?php
        if ($hassidepre || $hassidepost) {
            if ($layoutoption == "singlepre") {
            ?>
                <aside class="flexcontentpre <?php echo $layoutoption; ?>">
                    <?php
                    if ($hassidepre) {
                        echo $OUTPUT->blocks('side-pre');
                    }
                    if ($hassidepost) {
                        echo $OUTPUT->blocks('side-post');
                    }
                    ?>
                </aside>
            <?php
            } else if ($layoutoption == "singlepost") {
            ?>
                <aside class="flexcontentpost <?php echo $layoutoption; ?>">
                    <?php
                    if ($hassidepre) {
                        echo $OUTPUT->blocks('side-pre');
                    }
                    if ($hassidepost) {
                        echo $OUTPUT->blocks('side-post');
                    }
                    ?>
                </aside>
            <?php
            } else {
                if ($knownregionpre && $hassidepre) {
                    echo $OUTPUT->blocks('side-pre', "flexcontentpre $layoutoption");
                }
                if ($knownregionpost && $hassidepost) {
                    echo $OUTPUT->blocks('side-post', "flexcontentpost $layoutoption");
                }
            }
        }
        ?>
    </div>
    <div id="region-bottom">
    <?php
    if ($knownregionbottom) {
        echo $OUTPUT->blocks('side-bottom', "sidebottom flexcontainer");
    }
    ?>
    </div>

    <?php
    require('includes/footer.php');
    ?>
</div>
</body>
</html>
