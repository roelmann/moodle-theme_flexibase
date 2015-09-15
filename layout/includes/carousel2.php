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

/* Carousel
 * ======== */

global $CFG;
$numslides = $PAGE->theme->settings->numberofslides;
if ($numslides && (intval($CFG->version) >= 2013111800)) {
    $devicetype = core_useragent::get_device_type(); // In moodlelib.php.
    if (($devicetype == "mobile") && $PAGE->theme->settings->hideonphone) {
        $numslides = false;
    } else if (($devicetype == "tablet") && $PAGE->theme->settings->hideontablet) {
        $numslides = false;
    }
}
if ($numslides) {
?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
            for ($carouselindicators = 1; $carouselindicators <= $numslides; $carouselindicators++) {
                echo '<li data-target="#flexibaseCarousel" data-slide-to="'.$carouselindicators.'"';
                if ($carouselindicators == 0) {
                    echo 'class="active"';
                }
                echo '></li>';
            }
        ?>
        </ol>
        <div class="carousel-inner" role="listbox">
        <?php
            for ($carouselslide = 1; $carouselslide <= $numslides; $carouselslide++) {
                $slideurl = theme_flexibase_get_setting('slide' . $carouselslide . 'url');
                $slideurltarget = theme_flexibase_get_setting('slide' . $carouselslide . 'target');
                $slidetitle = theme_flexibase_get_setting('slide' . $carouselslide . 'title', true);
                $slidecaption = theme_flexibase_get_setting('slide' . $carouselslide . 'caption', true);
                $slideimage = $OUTPUT->pix_url('carousel/default', 'theme');
                if (theme_flexibase_get_setting('slide' . $carouselslide . 'image')) {
                    $slideimage = $PAGE->theme->setting_file_url('slide' . $carouselslide .
                            'image', 'slide' . $carouselslide . 'image');
                }

                $active = '';
                if ($carouselslide === 1 ) {
                    $active = "active";
                }
        ?>
                <div class="item <?php echo $active;?>">
                    <img src="<?php echo $slideimage; ?>" alt="<?php echo $slidetitle; ?>"/>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php echo $slidetitle?></h1>
                            <p class="carousel-caption-text"><?php echo $slidecaption; ?></p>
                            <p><a class="btn btn-lg btn-primary" href="<?php echo $slideurl; ?>" role="button">
                                <?php echo get_string('readmore', 'theme_flexibase')?></a></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php
}
