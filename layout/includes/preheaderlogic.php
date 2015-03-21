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

$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);

$hassidetop = $PAGE->blocks->region_has_content('side-top', $OUTPUT);
$hassidebottom = $PAGE->blocks->region_has_content('side-bottom', $OUTPUT);
$hassidemainpre = $PAGE->blocks->region_has_content('side-mainpre', $OUTPUT);
$hassidemainpost = $PAGE->blocks->region_has_content('side-mainpost', $OUTPUT);
$hassidemaintop = $PAGE->blocks->region_has_content('side-maintop', $OUTPUT);
$hassidemainbottom = $PAGE->blocks->region_has_content('side-mainbottom', $OUTPUT);

$knownregionpre = $PAGE->blocks->is_known_region('side-pre');
$knownregionpost = $PAGE->blocks->is_known_region('side-post');

$knownregiontop = $PAGE->blocks->is_known_region('side-top');
$knownregionbottom = $PAGE->blocks->is_known_region('side-bottom');
$knownregionmainpre = $PAGE->blocks->is_known_region('side-mainpre');
$knownregionmainpost = $PAGE->blocks->is_known_region('side-mainpost');
$knownregionmaintop = $PAGE->blocks->is_known_region('side-maintop');
$knownregionmainbottom = $PAGE->blocks->is_known_region('side-mainbottom');

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

$PAGE->set_popup_notification_allowed(false);

$bodyclasses = array();
if (theme_flexibase_get_setting('enablecategoryicon')) {
    $bodyclasses[] = 'categoryicons';
    $bodyclasses[] = $mainlayouts;
}

require('awesomebarpreheaderinc.php');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">

    <script>Modernizr.addTest('flexbox', Modernizr.testAllProps('flex'));</script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body <?php echo $OUTPUT->body_attributes($bodyclasses); ?>>

<?php echo $OUTPUT->standard_top_of_body_html();
