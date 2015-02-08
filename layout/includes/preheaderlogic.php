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

//$regions = bootstrap_grid($hassidepre, $hassidepost);
//$layoutoption="twopre";

$PAGE->set_popup_notification_allowed(false);

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>
