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

// Ref: http://docs.moodle.org/dev/Page_API.
require_once('../../../config.php');
require_once('../lib.php');

$PAGE->set_context(context_system::instance());
$thispageurl = new moodle_url('/theme/flexibase/pages/settingshelp.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

$PAGE->set_title('Flexibase Settings Support');
$PAGE->set_heading('Flexibase Settings Support');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
include ('helpnavbuttons.php');
?>
<div class="settingsnavbuttons">
    <h3>Quick Settings Links:</h3>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/settingshelp.php">Help Docs</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_generic">General</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_lessbrand">Main Branding</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_lessadditional">Additional LESS</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_layout">Layout</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_fonts">Fonts</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank">Image Bank</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_menusettings">Menu Settings</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_awesomebar">Awesomebar</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_alerts">User Alerts</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_carousel">Carousel Slideshow</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_marketing">Marketing</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_frontpage_courses">Course Images</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_categoryicon">Category Icons</a>
    <a class="btn btn-success" href="<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_social">Social Networking</a>
</div>
<?php
echo 'content goes here';

echo $OUTPUT->box_end();

echo $OUTPUT->footer();
