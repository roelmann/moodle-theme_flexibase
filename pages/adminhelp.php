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
$thispageurl = new moodle_url('/theme/flexibase/pages/adminhelp.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

$PAGE->set_title('Admin Theme Support');
$PAGE->set_heading('Admin Theme Support');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
require('helpnavbuttons.php');

?>
<h3><?php echo get_string('pagesadminhelpheading', 'theme_flexibase')?></h3>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem helpinstallation">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagesadmininstallationtitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagesadmininstallationtop', 'theme_flexibase')?></p>
            <ul>
                <li><?php echo get_string('pagesadmininstallationlista', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmininstallationlistb', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmininstallationlistc', 'theme_flexibase')?></li>
            </ul>
            <p><?php echo get_string('pagesadmininstallationbottom', 'theme_flexibase')?></p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helpsettings">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagesadminsettingstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagesadminsettingsbodya', 'theme_flexibase')?></p>
            <p><?php echo get_string('pagesadminsettingsbodyb', 'theme_flexibase')?></p>
            <p><?php echo get_string('pagesadminsettingsbodyc', 'theme_flexibase')?></p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helplayouts">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagesadminlayoutstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagesadminlayoutsbodya', 'theme_flexibase')?></p>
            <ul>
                <li><?php echo get_string('pagesadminlayoutslista', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadminlayoutslistb', 'theme_flexibase')?></li>
            </ul>
            <p><?php echo get_string('pagesadminlayoutsbodyb', 'theme_flexibase')?></p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helpthemecode">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagesadmincloningtitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagesadmincloningbody', 'theme_flexibase')?></p>
            <ul>
                <li><?php echo get_string('pagesadmincloninglista', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmincloninglistb', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmincloninglistc', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmincloninglistd', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmincloningliste', 'theme_flexibase')?></li>
                <li><?php echo get_string('pagesadmincloninglistf', 'theme_flexibase')?></li>   
                <li><?php echo get_string('pagesadmincloninglistg', 'theme_flexibase')?></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helpcssless">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagesadmincsstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagesadmincssbody', 'theme_flexibase')?></p>
        </div>
    </div>

</div>
<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
