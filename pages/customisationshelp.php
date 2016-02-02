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
include ('helpnavbuttons.php');

?>
<h3>Theme Customisation for Administrators</h3>
<p class="lead"><strong>Note:</strong> customisations to core code should generally be done through a clone of the theme to avoid issues when upgrading (See more detail on the <a href="adminhelp.php" class="btn btn-info">Admin Help</a>. </p>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem pixcorehelp">
        <div class="panel-heading">
            <h3 class="panel-title">Pix_Core Icons</h3>
        </div>
        <div class="panel-body">
            <p>Flexibase has a set of pix_core icons which are recoloured to match the default colour scheme of the theme. This may not be suitable for everyone, so the pix_core folder contains the same set of svg icons recoloured in separate folders as /blue (the theme default set), /red, /yellow and /green. Simply replace the existing icons with the ones from the chosen colour set if required. If you wish to return to the Moodle default grey icons, then simply delete the pix_core folder and the theme will no longer override the core icons.</p>
            <p>It is possible to create a set of icons with your own colour scheme using tools on the internet and replace the existing ones with your own colour scheme. One way of doing this on a Linux PC is to use a bash command such as <code>grep -rl "2fa4e7" path/to/your/pix_core/folder  | xargs sed -i 's|2fa4e7|86fb96|g'</code> Where 2fa4e7 is the blue colour of the existing icons and 86fb96 is the new colour (as HEX values).</p>
            <p>Note: If you do this within flexibase, rather than in your own clone, then it is recommended to keep a separate copy of your recoloured icon set so that you can easily replace it when you upgrade the theme.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem blockheadershelp">
        <div class="panel-heading">
            <h3 class="panel-title">Block Headers</h3>
        </div>
        <div class="panel-body">
            <p>Flexibase renders the blocks as panels and uses panel-primary colours to style the blocks. This can be overridden in customLESS settings either for all blocks, or even for individual blocks giving different colours as required. For example:</p>
            <p>All block headers - this could go in customcss rather than customless if prefered</p>
            <pre>.block.panel.panel-primary .panel-heading {background:#00ff00;}</pre>
            <p>Targetting the navigation block specifically using its class selector (as written below this would be customLESS, but if a simple background is used as above, then it could go in customcss)</p>
            <pre>.block_navigation.panel.panel-primary .panel-heading {#gradient > .vertical-three-colors(lighten(green, 25%), green, 60%, darken(green, 10%));}</pre>
            <p>Using LESS variables within customLESS to alter the heading of the calendar block</p>
            <pre>.block_calendar_month.panel.panel-primary .panel-heading {#gradient > .vertical-three-colors(lighten(@brand-danger, 25%), @brand-danger, 60%, darken(@brand-danger, 10%));</pre>
            
        </div>
    </div>
    <div class="panel panel-info flexhelpitem textfileshelp">
        <div class="panel-heading">
            <h3 class="panel-title">LESS/CSS Reference and customisation</h3>
        </div>
        <div class="panel-body">
            <p>In order to assist with any CSS or LESS customisation, the full theme CSS and the flexibase theme variables.less and flexibase.less files are also provided as text files in the theme /readmes folder. It is suggested that these are extracted separately to a handy location so that they can be referred to without access to the server files when any front-end customisation is being carried out.</p>
            <p>Because LESS is compiled 'on-the-fly', use of Theme Designer Mode can make page renderering very slow indeed. This is expected and is not an issue when TDM is disabled and all generated css is cached. One other point to note with regard to customising LESS is that, while errors in CSS are often ignored, or have unexpected visually results, errors in LESS will cause the compilation to fail and no style to be applied to the site at all. In this case undo your last changes and the site should return to normal. This is one of the reasons why the LESS files have been made available as reference text documents, to assist in reducing potential errors in any customisations.</p>
            <p>When doing any theme customisation, whether to code or to settings, t is also recommended to ensure the general theme setting 'Allow Theme Changes in URL' is enabled. This will allow you to fall back to the Clean theme in the unlikely event of your changes causing flexibase to fail.</p>
            
        </div>
    </div>


</div>


<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
