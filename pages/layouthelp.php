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
$thispageurl = new moodle_url('/theme/flexibase/pages/layouthelp.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

$PAGE->set_title('Flexibase Layouts Support');
$PAGE->set_heading('Flexibase Layouts Support');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
include ('helpnavbuttons.php');
?>
<h3>Layouts and Regions</h3>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem layoutsadminhelp">
        <div class="panel-heading">
            <h3 class="panel-title">Layouts - for administrators</h3>
        </div>
        <div class="panel-body">
            <h4>Layouts - for administrators</h4>
            <p>Flexibase has 5 different selectable layouts for 4 of the main page types.</p>
            <p>These layouts can be applied to the default page, front page, course page or my home page. One additional note is that the two layouts with single side bars, so in fact use both side-pre and side-post, but they display side-post below side-pre in a single visual region. While no 'content only' layout is provided, this can be achieved easily by removing all blocks from all regions - the main content space will expand to fill the entire page.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem regionshelp">
        <div class="panel-heading">
            <h3 class="panel-title">Regions - for content creators</h3>
        </div>
        <div class="panel-body">
            <h4>Regions - for content creators</h4>
            <p>As shown in the diagrams, Flexibase also has a range of regions to hold content blocks. Those blocks can be the predefined blocks (Turn Editing On > Add a Block) or from that list you can add an HTML block which allows you to add your own content to any region being used on the page. As a design tip - the number of regions is provided to allow flexibility, it is not anticipated that most sites will use every region on any single page. While this may be appropriate in a very few cases, it is likely to create an overly busy look to the page and distract from the content in the vast majority of circumstances.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem layoutdiagrams">
        <div class="panel-heading">
            <h3 class="panel-title">Layout diagrams</h3>
        </div>
        <div class="panel-body">
            <p><img src="<?php echo $OUTPUT->pix_url('settings/layout1', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout2', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout3', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout4', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout5', 'theme'); ?>" alt="Pre and Post Layout" /> </p>
        </div>
    </div>

</div>
<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
