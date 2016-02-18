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
$thispageurl = new moodle_url('/theme/flexibase/pages/customisationshelp.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

$PAGE->set_title('Flexibase Customisations Help');
$PAGE->set_heading('Flexibase Customisations Help');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
require('helpnavbuttons.php');

?>
<h3><?php echo get_string('pagescustomisationtitle', 'theme_flexibase')?></h3>
<p class="lead"><?php echo get_string('pagescustomisationbody', 'theme_flexibase')?></p>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem pixcorehelp">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescustompixcoretitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescustompixcorebody', 'theme_flexibase')?></p>
        </div>
    </div>
    
    <div class="panel panel-info flexhelpitem blockheadershelp">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescustomblockstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescustomblocksbodya', 'theme_flexibase')?></p>
            <pre>.block.panel.panel-primary .panel-heading {background:#00ff00;}</pre>
            <p><?php echo get_string('pagescustomblocksbodyb', 'theme_flexibase')?></p>
            <pre>.block_navigation.panel.panel-primary .panel-heading {
    #gradient > .vertical-three-colors(lighten(green, 25%), green, 60%, darken(green, 10%));
}</pre>
            <p><?php echo get_string('pagescustomblocksbodyc', 'theme_flexibase')?></p>
            <pre>.block_calendar_month.panel.panel-primary .panel-heading {
    #gradient > .vertical-three-colors(lighten(@brand-danger, 25%), @brand-danger, 60%, darken(@brand-danger, 10%));
}</pre>
            
        </div>
    </div>
    <div class="panel panel-info flexhelpitem textfileshelp">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescustomcsslesstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescustomcsslessbody', 'theme_flexibase')?></p>
            
        </div>
    </div>


</div>


<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
