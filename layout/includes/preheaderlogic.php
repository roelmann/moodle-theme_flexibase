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

    // Initialise and generate Awesomebar.
    if (!empty($PAGE->theme->settings->showawesomebar) && $PAGE->theme->settings->showawesomebar) {

		$flexibase = clone $PAGE->theme->settings;
		$flexibase->awesome_nav = '';
		$flexibase->awesome_settings = '';

		if (empty($PAGE->layout_options['noawesomebar'])) {
			// Ensure that navigation has been initialised properly, in case Navigation block is not visible.
			$PAGE->navigation->initialise();
			$PAGE->requires->yui_module('moodle-theme_flexibase-awesomebar', 'M.theme_flexibase.initAwesomeBar');
			$flexibase->topsettings = $PAGE->get_renderer('theme_flexibase','topsettings');
			$flexibase->awesome_nav = $flexibase->topsettings->navigation_tree($PAGE->navigation);
			$flexibase->awesome_settings = $flexibase->topsettings->settings_tree($PAGE->settingsnav);
			if (!strlen($flexibase->awesome_nav) && !strlen($flexibase->awesome_settings)) {
				if (!$flexibase->custommenuinawesomebar || !(empty($PAGE->layout_options['nocustommenu']) && strlen($OUTPUT->custom_menu()))) {
					// No Awesomebar content - hide it.
					$bodyclasses[] = 'flexibase_no_awesomebar';
				}
			}
		} else {
			$bodyclasses[] = 'flexibase_no_awesomebar';
		}
    
	} else {
        $bodyclasses[] = 'flexibase_no_awesomebar';
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
