<?php
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
	$mainlayouts="twomainsides";
}
if ($knownregionmainpre && !$knownregionmainpost) {
	$mainlayouts="onemainside";
}
if (!$knownregionmainpre && $knownregionmainpost) {
	$mainlayouts="onemainside";
}


//$regions = bootstrap_grid($hassidepre, $hassidepost);
//$layoutoption="twopre";

$PAGE->set_popup_notification_allowed(false);

$bodyclasses = array();
if (theme_flexibase_get_setting('enablecategoryicon')) {
    $bodyclasses[] = 'categoryicons';
    $bodyclasses[] = $mainlayouts;
}
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

<?php echo $OUTPUT->standard_top_of_body_html() ?>
