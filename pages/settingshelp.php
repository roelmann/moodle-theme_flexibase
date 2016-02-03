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
require('helpnavbuttons.php');
?>
<h3><?php echo get_string('pagessettingstitle', 'theme_flexibase')?></h3>
<p class="lead"><?php echo get_string('pagessettingslead', 'theme_flexibase')?></p>
<p><?php echo get_string('pagessettingsbody', 'theme_flexibase')?></p>
<p><br></p>
<div>
  <!-- Nav tabs - This is your actual tabs across the top. -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#general" aria-controls="general" role="tab" data-toggle="tab">
            <?php echo get_string('genericsettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#branding" aria-controls="branding" role="tab" data-toggle="tab">
            <?php echo get_string('lessbrandsettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#less" aria-controls="less" role="tab" data-toggle="tab">
            <?php echo get_string('lessadditionalsettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#layout" aria-controls="layout" role="tab" data-toggle="tab">
            <?php echo get_string('layoutheading', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#fonts" aria-controls="fonts" role="tab" data-toggle="tab">
            <?php echo get_string('fontsettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#images" aria-controls="images" role="tab" data-toggle="tab">
            <?php echo get_string('imagebanksettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#menus" aria-controls="menus" role="tab" data-toggle="tab">
            <?php echo get_string('menussettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#awesome" aria-controls="awesome" role="tab" data-toggle="tab">
            <?php echo get_string('awesomebarheading', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#alerts" aria-controls="alerts" role="tab" data-toggle="tab">
            <?php echo get_string('alertsheading', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#carousel" aria-controls="carousel" role="tab" data-toggle="tab">
            <?php echo get_string('carouselheading', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#marketing" aria-controls="marketing" role="tab" data-toggle="tab">
            <?php echo get_string('marketingheading', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">
            <?php echo get_string('frontpagecoursesettings', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">
            <?php echo get_string('categoryiconheading', 'theme_flexibase')?>
        </a>
    </li>
    <li role="presentation">
        <a href="#social" aria-controls="social" role="tab" data-toggle="tab">
            <?php echo get_string('socialheading', 'theme_flexibase')?>
        </a>
    </li>
  </ul>

  <!-- Tab panes - This is the content of each tab. -->
  <div class="tab-content">
    <!-- General. -->
    <div role="tabpanel" class="tab-pane active" id="general">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_generic"
            class="btn btn-success">
            <?php echo get_string('genericsettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('genericsettings', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('pagesettingsgenericlead', 'theme_flexibase')?></p>

        <h4><?php echo get_string('favicon', 'theme_flexibase')?></h4>
        <p><?php echo get_string('favicondesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('logo', 'theme_flexibase')?></h4>
        <p><?php echo get_string('logodesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('showlogo', 'theme_flexibase')?></h4>
        <p><?php echo get_string('showlogodesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('minilogo', 'theme_flexibase')?></h4>
        <p><?php echo get_string('minilogodesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('falogo', 'theme_flexibase')?></h4>
        <p><?php echo get_string('falogodesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('headerbg', 'theme_flexibase')?></h4>
        <p><?php echo get_string('headerbgdesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('topbarcolour', 'theme_flexibase')?></h4>
        <h4><?php echo get_string('menunavbarcolour', 'theme_flexibase')?></h4>
        <p><?php echo get_string('topbarcolourdesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('loginbg', 'theme_flexibase')?></h4>
        <p><?php echo get_string('loginbgdesc', 'theme_flexibase')?></p>

        <h4><?php echo get_string('customcss', 'theme_flexibase')?></h4>
        <p><?php echo get_string('customcssdesc', 'theme_flexibase')?></p>
    </div>

    <!-- Main Branding. -->
    <div role="tabpanel" class="tab-pane" id="branding">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_lessbrand"
            class = "btn btn-success">
            <?php echo get_string('lessbrandsettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('lessbrandsettings', 'theme_flexibase')?></h4>
        <p class ="lead"><?php echo get_string('pagesettingsbrandlead', 'theme_flexibase')?></p>
        <ul>
            <li><p><strong><?php echo get_string('brandprimary', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('brandprimarydesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('brandsuccess', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('brandsuccessdesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('brandinfo', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('brandinfodesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('brandwarning', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('brandwarningdesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('branddanger', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('branddangerdesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('black', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('blackdesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('white', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('whitedesc', 'theme_flexibase')?></p>
            </li>
            <li><p><strong><?php echo get_string('graybase', 'theme_flexibase')?></strong>
                &nbsp;-&nbsp;<?php echo get_string('graybasedesc', 'theme_flexibase')?></p>
            </li>
        </ul>
    </div>

    <!-- Additional LESS. -->
    <div role="tabpanel" class="tab-pane" id="less">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_lessadditional"
            class = "btn btn-success">
            <?php echo get_string('lessadditionalsettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('lessadditionalsettings', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('pagesettingsbrandlead', 'theme_flexibase')?></p>
        <ul>
            <li><strong><?php echo get_string('brandprimarylight', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('brandprimarylighter', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('brandprimarylightest', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('brandsuccesslight', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('brandinfolight', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('brandwarninglight', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('branddangerlight', 'theme_flexibase')?></strong></li>
        </ul>
        <p><?php echo get_string('pagesettingsbrandbody1', 'theme_flexibase')?></p>
        <ul>
            <li><strong><?php echo get_string('graydarker', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('graydark', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('gray', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('graylight', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('graylighter', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('graylightest', 'theme_flexibase')?></strong></li>
        </ul>
        <p><?php echo get_string('pagesettingsbrandbody1', 'theme_flexibase')?></p>
        
        <h4><?php echo get_string('customless', 'theme_flexibase')?></h4>
        <p><?php echo get_string('customlessdesc', 'theme_flexibase')?></p>
    </div>

    <!-- Layouts. -->
    <div role="tabpanel" class="tab-pane" id="layout">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_layout"
            class = "btn btn-success">
            <?php echo get_string('layoutheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('layoutheading', 'theme_flexibase')?></h4>
        <p class=lead><?php echo get_string('pagessettingslayoutlead', 'theme_flexibase')?></p>
        <p><img src="<?php echo $OUTPUT->pix_url('settings/layout1', 'theme'); ?>" alt="Pre and Post Layout" />
            <img src="<?php echo $OUTPUT->pix_url('settings/layout2', 'theme'); ?>" alt="Pre and Post Layout" />
            <img src="<?php echo $OUTPUT->pix_url('settings/layout3', 'theme'); ?>" alt="Pre and Post Layout" />
            <img src="<?php echo $OUTPUT->pix_url('settings/layout4', 'theme'); ?>" alt="Pre and Post Layout" />
            <img src="<?php echo $OUTPUT->pix_url('settings/layout5', 'theme'); ?>" alt="Pre and Post Layout" />
        </p>
        <p><?php echo get_string('pagessettingslayoutbody', 'theme_flexibase')?></p>
        <ul>
            <li><strong><?php echo get_string('pagessettingslayoutdefault', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('pagessettingslayouthome', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('pagessettingslayoutdash', 'theme_flexibase')?></strong></li>
            <li><strong><?php echo get_string('pagessettingslayoutcourse', 'theme_flexibase')?></strong></li>
        </ul>
    </div>

    <!-- Fonts. -->
    <div role="tabpanel" class="tab-pane" id="fonts">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_fonts"
            class = "btn btn-success">
            <?php echo get_string('fontsettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('fontsettings', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('fontheadingdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('fontsep', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('numberoffonts', 'theme_flexibase')?></strong>
            <?php echo get_string('pagessettingsfontsnumber', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('fontlink', 'theme_flexibase')?></strong>
            <?php echo get_string('fontlinkdesc', 'theme_flexibase')?>
        </p>
        <p><?php echo get_string('pagesettingsfontuploads', 'theme_flexibase')?></p>
        <h4><?php echo get_string('fontsep2', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('fontfacebody', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('fontfacebodydesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('fontfamilybody', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('fontfamilybodydesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('fontsizebody', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('fontsizebodydesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('fontfaceheadings', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('fontfamilyheadings', 'theme_flexibase')?></strong></p>
        <p><?php echo get_string('fontheaderdesc', 'theme_flexibase')?></p>
    </div>

    <!-- Image Bank. -->
    <div role="tabpanel" class="tab-pane" id="images">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank"
            class = "btn btn-success">
            <?php echo get_string('imagebanksettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('imagebanksettings', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('imagebankheadingdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('numberofimagebankimages', 'theme_flexibase')?></h4>
        <p><?php echo get_string('numberofimagebankimages_desc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('pagesettingsimagebank', 'theme_flexibase')?></h4>
        <p><?php echo get_string('imagebankheadingsub', 'theme_flexibase')?>
        <?php echo get_string('imagebankheadingdesc', 'theme_flexibase')?>
        <?php echo get_string('pagesettingsimagebankdesc', 'theme_flexibase')?>
        </p>
    </div>

    <!-- User Menus. -->
    <div role="tabpanel" class="tab-pane" id="menus">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank"
            class = "btn btn-success">
            <?php echo get_string('menussettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('menussettings', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('menusheadingdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('mainmenulocation', 'theme_flexibase')?></h4>
        <p><?php echo get_string('mainmenulocationdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('mainmenusheadingsub', 'theme_flexibase')?></h4>
        <p><?php echo get_string('pagesettingmmoptions', 'theme_flexibase')?></p>
        <p><strong><?php echo get_string('mmsitehome', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('mmsitehomedesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('mmdashboard', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('mmdashboarddesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('mmthiscourse', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('mmthiscoursedesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('mmcalendar', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('mmcalendardesc', 'theme_flexibase')?></p>
        <p><strong><?php echo get_string('mmthemehelp', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('mmthemehelpdesc', 'theme_flexibase')?>
        </p>

        <h4><?php echo get_string('usermenusheadingsub', 'theme_flexibase')?></h4>
        <p><?php echo get_string('usermenusheadingdesc', 'theme_flexibase')?></p>
        <p><strong><?php echo get_string('umdashboard', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umcalendar', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umprofile', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umeditprofile', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umpreferences', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umpassword', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('ummessagepreferences', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umblogpreferences', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umbadgepreferences', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('ummessages', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umfiles', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umposts', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umdiscussions', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umgrades', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('umbadges', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('usermenus', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('usermenusdesc', 'theme_flexibase')?>
        </p>
    </div>

    <!-- AwesomeBar. -->
    <div role="tabpanel" class="tab-pane" id="awesome">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank"
            class = "btn btn-success">
            <?php echo get_string('awesomebarheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('awesomebarheading', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('awesomebarsettingsdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('showawesomebar', 'theme_flexibase')?></h4>
        <p><?php echo get_string('showawesomebardesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('hidesettingsblock', 'theme_flexibase')?>/
            <?php echo get_string('hidenavigationblock', 'theme_flexibase')?>
        </h4>
        <p><?php echo get_string('pagesettingsabblocks', 'theme_flexibase')?></p>
        <h4><?php echo get_string('coursesloggedinonly', 'theme_flexibase')?></h4>
        <p><?php echo get_string('coursesloggedinonlydesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('coursesleafonly', 'theme_flexibase')?></h4>
        <p><?php echo get_string('coursesleafonlydesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('expandtoactivities', 'theme_flexibase')?></h4>
        <p><?php echo get_string('expandtoactivitiesdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('alwaysexpandsiteadmin', 'theme_flexibase')?></h4>
        <p><?php echo get_string('alwaysexpandsiteadmindesc', 'theme_flexibase')?></p>
    </div>

    <!-- Alerts. -->
    <div role="tabpanel" class="tab-pane" id="alerts">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_alerts"
            class = "btn btn-success">
            <?php echo get_string('alertsheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('alertsheading', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('alertsdesc', 'theme_flexibase')?></p>
        <p><?php echo get_string('pagesettingsalertsdesc2', 'theme_flexibase')?></p>
        <h4><?php echo get_string('enablealert', 'theme_flexibase')?></h4>
        <p><?php echo get_string('enablealertdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('alerttype', 'theme_flexibase')?></h4>
        <p><?php echo get_string('alerttypedesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('alerttitle', 'theme_flexibase')?></h4>
        <p><?php echo get_string('alerttitledesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('alerttext', 'theme_flexibase')?></h4>
        <p><?php echo get_string('alerttextdesc', 'theme_flexibase')?></p>
    </div>

    <!-- Carousel. -->
    <div role="tabpanel" class="tab-pane" id="carousel">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_carousel"
            class = "btn btn-success">
            <?php echo get_string('carouselheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('carouselheading', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('carouseldesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('pagesettingscarouselhead', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('toggleslideshow', 'theme_flexibase')?></strong>
            <ul>
                <li><?php echo get_string('alwaysdisplay', 'theme_flexibase')?></li>
                <li><?php echo get_string('displaybeforelogin', 'theme_flexibase')?></li>
                <li><?php echo get_string('displayafterlogin', 'theme_flexibase')?></li>
                <li><?php echo get_string('dontdisplay', 'theme_flexibase')?></li>
            </ul>
        </p>
        <p><strong><?php echo get_string('numberofslides', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('numberofslides_desc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('hideonphone', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('hideontablet', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('captiontextcolour', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('captiontextcolourdesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('captionbackgroundcolour', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('captionbackgroundcolourdesc', 'theme_flexibase')?>
        </p>
        <h4></h4><?php echo get_string('pagesettingscarouselhead2', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('slidetitle', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('slideimage', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('slideimagedesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('slidecaption', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('slidecaptiondesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('slideurl', 'theme_flexibase')?>Slide Link</strong>
            &nbsp;-&nbsp;<?php echo get_string('slideurldesc', 'theme_flexibase')?>
        </p>
    </div>

    <!-- Marketing. -->
    <div role="tabpanel" class="tab-pane" id="marketing">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_marketing"
            class = "btn btn-success">
            <?php echo get_string('marketingheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('marketingheading', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('marketingdesc', 'theme_flexibase')?>.</p>
        <h4><?php echo get_string('pagesettingsmarketinghead', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('togglemarketing', 'theme_flexibase')?></strong>
            <ul>
                <li><?php echo get_string('alwaysdisplay', 'theme_flexibase')?></li>
                <li><?php echo get_string('displaybeforelogin', 'theme_flexibase')?></li>
                <li><?php echo get_string('displayafterlogin', 'theme_flexibase')?></li>
                <li><?php echo get_string('dontdisplay', 'theme_flexibase')?></li>
            </ul>
        </p>
        <p><strong><?php echo get_string('flexmarketing', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('flexmarketingdesc', 'theme_flexibase')?>
        </p>
        <h4><?php echo get_string('pagesettingsmarketinghead2', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('marketingtitle', 'theme_flexibase')?>Title</strong>
            &nbsp;-&nbsp;<?php echo get_string('marketingtitledesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('marketingicon', 'theme_flexibase')?>Icon</strong>
            &nbsp;-&nbsp;<?php echo get_string('marketingicondesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('marketingcontent', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('marketingcontentdesc', 'theme_flexibase')?>
        </p>
    </div>

    <!-- Course Images -->
    <div role="tabpanel" class="tab-pane" id="courses">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_courses"
            class = "btn btn-success">
            <?php echo get_string('frontpagecoursesettings', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('frontpagecoursesettings', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('pagesettingscourseimagelead', 'theme_flexibase')?></p>
        <h4><?php echo get_string('coursetileimagesinfo', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('frontpagerenderer', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('frontpagerendererdesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('frontpagerendererdefaultimage', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('frontpagerendererdefaultimagedesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('rendereroverlaycolour', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('rendereroverlaycolourdesc', 'theme_flexibase')?>
        </p>
        <h4><?php echo get_string('coursepageimagesinfodesc', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('courseimageheaderoption', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('courseimageheaderoptiondesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('courseheaderdefaultimage', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('courseheaderdefaultimagedesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('courseheaderimageheight', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('courseheaderimageheightdesc', 'theme_flexibase')?>
        </p>
    </div>

    <!-- Category Icons -->
    <div role="tabpanel" class="tab-pane" id="categories">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_categories"
            class = "btn btn-success">
            <?php echo get_string('categoryiconheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('categoryiconheading', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('categoryicondesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('pagesettingscategoryhead', 'theme_flexibase')?></h4>
        <p><strong><?php echo get_string('enablecategoryicon', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('enablecategoryicondesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('defaultcategoryicon', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('defaultcategoryicondesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('categoryiconsize', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('categoryiconsizedesc', 'theme_flexibase')?>
        </p>
        <p><strong><?php echo get_string('enablecustomcategoryicon', 'theme_flexibase')?></strong>
            &nbsp;-&nbsp;<?php echo get_string('enablecustomcategoryicondesc', 'theme_flexibase')?>
        </p>
        <h4><?php echo get_string('categoryiconinfodesc', 'theme_flexibase')?></h4>
        <p><?php echo get_string('pagesettingscategorycustom', 'theme_flexibase')?></p>
    </div>

    <!-- Social -->
    <div role="tabpanel" class="tab-pane" id="social">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_social"
            class = "btn btn-success">
            <?php echo get_string('socialheading', 'theme_flexibase')?>
        </a>
        <h4><?php echo get_string('socialheading', 'theme_flexibase')?></h4>
        <p class="lead"><?php echo get_string('socialdesc', 'theme_flexibase')?></p>
        <h4><?php echo get_string('pagesettingspresetsocial', 'theme_flexibase')?></h4>
        <p><?php echo get_string('pagesettingspresetsocialdesc', 'theme_flexibase')?></p>
        <p><strong><?php echo get_string('website', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('blog', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('facebook', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('flickr', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('twitter', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('googleplus', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('linkedin', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('pinterest', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('instagram', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('youtube', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('vimeo', 'theme_flexibase')?></strong></p>
        <p><strong><?php echo get_string('skype', 'theme_flexibase')?></strong></p>
        <h4><?php echo get_string('pagesettingscustomsocial', 'theme_flexibase')?></h4>
        <p><?php echo get_string('pagesettingscustomsocialdesc', 'theme_flexibase')?></p>
    </div>

  </div>
</div>

<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
