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
include ('helpnavbuttons.php');

?>
<h3>Support for Administrators</h3>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem helpinstallation">
        <div class="panel-heading">
            <h3 class="panel-title">Installation</h3>
        </div>
        <div class="panel-body">
            <p>There are several ways to install flexibase to your site.</p>
            <ul>
                <li>Use github to clone the theme from <a href="https://github.com/roelmann/moodle-theme_flexibase">its repository.</a>
                    <pre>cd /path/to/your/moodle/theme<br>git clone https://github.com/roelmann/moodle-theme_flexibase.git flexibase</pre>
                </li>
                <li>Download the theme from the <a href="https://moodle.org/plugins/theme_flexibase">Moodle plugins database</a> and extract the folder to your /themes folder on your server.</li>
                <li>Install from your site front-end at <code>Site Administration > Plugins > <a href="https://docs.moodle.org/30/en/Installing_plugins">Install Plugin</a></code>. This gives you the option to Install directly from the plugins database or to use a previously downloaded zip file.</li>
            </ul>
            <p>However you upload your theme, you should then visit <code>Site Administration > Notifications</code> which will trigger the database upgrade process and finalise the installation of the theme.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helpsettings">
        <div class="panel-heading">
            <h3 class="panel-title">Settings</h3>
        </div>
        <div class="panel-body">
            <p>The flexibase theme can be largely managed, by the site administrators, through the settings pages and it is encouraged to use these settings where possible. This is because theme settings will persist when the theme is upgraded, while code changes will be overwritten on an upgrade.</p>
            <p>Full help about the theme settings can be found on the <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/settingshelp.php">Settings help</a> page.</p>
            <p>Settings exist for logos, colours, menus, fonts, course header images and many features such as alerts, layouts and the front page carousel. There are also customless and customcss settings to allow fine tuning of theme overrides</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helplayouts">
        <div class="panel-heading">
            <h3 class="panel-title">Layouts</h3>
        </div>
        <div class="panel-body">
            <p>There are two elements to page layouts in flexibase.</p>
            <ul>
                <li>Defined layouts
                    <p>The defined layouts allow the site administrator to set a predefined layout for common page types. </p>
                </li>
                <li>Block Regions
                    <p>There are a range of block regions in flexibase. These allow a content creator (e.g. a tutor) to position content blocks, other than the designated main content, in a wide variety of positions on the page. It is not anticipated that all regions would be used in any one page, but they provide a huge amount of flexibility of layout for the content creator without the need for administrator input.</p>
                </li>
            </ul>
            <p>Full details and support for the layout options can be found on the <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/layouthelp.php">Layout and regions help</a> page.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helpthemecode">
        <div class="panel-heading">
            <h3 class="panel-title">Theme Cloning</h3>
        </div>
        <div class="panel-body">
            <p>If you wish to edit or alter any theme, it is often advisable to make a child theme of that main theme, or to make a clone of it. Given the way flexibase uses Moodle core LESS compiling and the extended use of LESS in the settings pages, creating a child theme can in fact become more complex than using and maintaining a clone. Therefore, it is recommended to use a clone of the theme - however this does need to be maintained for stable upgrades with the parent theme.</p>
            <p>To create a clone of flexibase:</p>
            <ul>
                <li>Copy theme</li>
                <li>Remove the /readmes and /plugins folders (not essential, they are not working parts of the theme so doesn't actually matter if they are there or not, but it gets them out of the way of the renaming)</li>
                <li>Rename folder</li>
                <li>Rename lang file (/lang/en/theme_themename.php)</li>
                <li>Rename less file (/less/themename.less)</li>
                <li>Find and replace all instances of flexibase (including CAPS variations)
                    <pre>On Linux you can use a grep command (had to do this 3 times - flexibase, Flexibase and FlexiBase) <br><code>grep -rl "flexibase" /var/www/html/moodle/theme/yourthemename/  | xargs sed -i 's|flexibase|yourthemename|g'</code></pre>
                </li>   
                <li>Install as normal</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem helpcssless">
        <div class="panel-heading">
            <h3 class="panel-title">CSS and LESS</h3>
        </div>
        <div class="panel-body">
            <p>The flexibase theme is created with LESS and CSS to create the look and feel. The original LESS variables and CSS files used to create the theme can be found in the /readmes folder of the theme for reference. Flexibase uses LESS compilation on the fly (when Theme Designer Mode is enabled) allowing some of the settings to make use of the flexibility of LESS.</p>
            <p>As a design decision, the theme colour options have been restricted to the main branding colours used in most bootstrap themes and their lighter/darker variations. These are applied through LESS, but can be overwritten as needed for more specific requirements using custom css.</p>
            <p>One caution when using LESS settings - incorrect CSS will often simply be ignored by the browser, incorrect LESS will cause the entire LESS to fail and the look and feel of the site not to render. If this happens, simply correct or undo your last change and your site should return to normal. I recommend enabling theme changes by url (in <code>Site Admin > Appearance > Themes > Theme Settings</code>) when making changes as you can then fall-back to another theme such as Clean, if your changes should cause problems with your site.</p>
        </div>
    </div>

</div>
<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
