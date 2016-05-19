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

$allblockregions = array('pre', 'post', 'top', 'bottom',
            'mainpre', 'mainpost', 'maintop', 'mainbottom',
            'adminbottom', 'teachbtm', 'creatorbtm', 'alert',
            'modaltop', 'modalmain', 'modalside');
foreach (array_keys($allblockregions) as $i) {
    $region = $allblockregions[$i];
    $hasside[$region] = $PAGE->blocks->region_has_content('side-'.$region, $OUTPUT);
    $knownregion[$region] = $PAGE->blocks->is_known_region('side-'.$region);
    if ($PAGE->user_is_editing()) {
        $hasside[$region] = true;
    }
}
/* Leave these in for now while refactoring flexibase code - but also need
 * to check if they are used in any core JS etc. */
$hassidepre = $hasside['pre']; $knownregionpre = $knownregion['pre'];
$hassidepost = $hasside['post']; $knownregionpost = $knownregion['post'];
$hassidetop = $hasside['top']; $knownregiontop = $knownregion['top'];
$hassidebottom = $hasside['bottom']; $knownregionbottom = $knownregion['bottom'];
$hassidemainpre = $hasside['mainpre']; $knownregionmainpre = $knownregion['mainpre'];
$hassidemainpost = $hasside['mainpost']; $knownregionmainpost = $knownregion['mainpost'];
$hassidemaintop = $hasside['maintop']; $knownregionmaintop = $knownregion['maintop'];
$hassidemainbottom = $hasside['mainbottom']; $knownregionmainbottom = $knownregion['mainbottom'];
$hassideadminbottom = $hasside['adminbottom']; $knownregionadminbottom = $knownregion['adminbottom'];
$hassideteachbtm = $hasside['teachbtm']; $knownregionteachbtm = $knownregion['teachbtm'];
$hassidecreatorbtm = $hasside['creatorbtm']; $knownregioncreatorbtm = $knownregion['creatorbtm'];
$hassidealert = $hasside['alert']; $knownregionalert = $knownregion['alert'];
$hassidemodalmain = $hasside['modalmain']; $knownregionmodalmain = $knownregion['modalmain'];
$hassidemodaltop = $hasside['modaltop']; $knownregionmodaltop = $knownregion['modaltop'];
$hassidemodalside = $hasside['modalside']; $knownregionmodalside = $knownregion['modalside'];

$hasnavbarlogo = (empty($PAGE->theme->settings->minilogo)) ? false : true;
$topbarcolour = (empty($PAGE->theme->settings->topbarcolour)) ? 'default' : $PAGE->theme->settings->topbarcolour;
$menunavbarcolour = (empty($PAGE->theme->settings->menunavbarcolour)) ? 'default' : $PAGE->theme->settings->menunavbarcolour;

$mainlayouts = '';
if ($knownregionmainpre && $knownregionmainpost) {
    $mainlayouts = "twomainsides";
}
if ($knownregionmainpre && !$knownregionmainpost) {
    $mainlayouts = "onemainside";
}
if (!$knownregionmainpre && $knownregionmainpost) {
    $mainlayouts = "onemainside";
}

$mktingcount = 0;

$hasmarketing1 = (!empty($PAGE->theme->settings->marketing1));
if ($hasmarketing1) {
    $marketing1title = $PAGE->theme->settings->marketing1;
    $marketing1icon = $PAGE->theme->settings->marketing1icon;
    $marketing1content = $PAGE->theme->settings->marketing1content;
    $mktingcount += 1;
}

$hasmarketing2 = (!empty($PAGE->theme->settings->marketing2));
if ($hasmarketing2) {
    $marketing2title = $PAGE->theme->settings->marketing2;
    $marketing2icon = $PAGE->theme->settings->marketing2icon;
    $marketing2content = $PAGE->theme->settings->marketing2content;
    $mktingcount += 1;
}

$hasmarketing3 = (!empty($PAGE->theme->settings->marketing3));
if ($hasmarketing3) {
    $marketing3title = $PAGE->theme->settings->marketing3;
    $marketing3icon = $PAGE->theme->settings->marketing3icon;
    $marketing3content = $PAGE->theme->settings->marketing3content;
    $mktingcount += 1;
}

$hasmarketing4 = (!empty($PAGE->theme->settings->marketing4));
if ($hasmarketing4) {
    $marketing4title = $PAGE->theme->settings->marketing4;
    $marketing4icon = $PAGE->theme->settings->marketing4icon;
    $marketing4content = $PAGE->theme->settings->marketing4content;
    $mktingcount += 1;
}

$evenflexmkting = '';
if (!empty($PAGE->theme->settings->flexmarketing)) {
    if ($PAGE->theme->settings->flexmarketing == 2) {
        $evenflexmkting = 'evenmkting'.$mktingcount;
    }
}

$courserenderer = $PAGE->get_renderer('core', 'course');
$PAGE->set_popup_notification_allowed(false);

$bodyclasses = array();
if (theme_flexibase_get_setting('enablecategoryicon')) {
    $bodyclasses[] = 'categoryicons';
}
    $bodyclasses[] = $mainlayouts;

// AwesomeBar.
require('awesomebarpreheaderinc.php');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
    <head>
        <title><?php echo $OUTPUT->page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
        <?php
        // Add custom web fonts.
        if (theme_flexibase_get_setting('numberoffonts')) {
            $numberoffonts = theme_flexibase_get_setting('numberoffonts');
            for ($i = 1; $i <= $numberoffonts; $i++) {
                $fontlink = '';
                $fontlinkdata = $fontlinkhref = array();
                $fontlink = theme_flexibase_get_setting('font' . $i . 'link');
                // Break up fontlink and rebuild to ensure security.
                $fontlinkdata = explode('href=', $fontlink);
                $explode = '"';
                if (substr($fontlinkdata[1], 0, 1) === "'") {
                    $explode = "'";
                }
                $fontlinkhref = explode($explode, $fontlinkdata[1]);
                $linkline = '<link href="'.$fontlinkhref[1].'" rel="stylesheet" type="text/css">';
                echo $linkline;
            }
        }
        ?>
        <!-- Add FontAwesome CDN. -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <?php echo $OUTPUT->standard_head_html(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
        <script>Modernizr.addTest('flexbox', Modernizr.testAllProps('flex'));</script>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    </head>

    <body <?php echo $OUTPUT->body_attributes($bodyclasses); ?>>
    <?php echo $OUTPUT->standard_top_of_body_html();
