<?php global $PAGE, $USER;
    $pageid=$PAGE->bodyid;
    $showlogo = $PAGE->theme->settings->showlogo;
?>

<nav role="navigation" class='navbar navbar-<?php echo $topbarcolour; ?> navbarbranding'>
    <div class="container-fluid">
		<div class="navbar-header">
			<?php
			if ($hasnavbarlogo) {
			?>
				<div class="navbar-image">&nbsp;</div>
				<a class="navbar-brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
			<?php
			} else {
			?>
				<a class="navbar-brand" href="<?php echo $CFG->wwwroot;?>"><i class="fa fa-lg fa-<?php echo theme_flexibase_get_setting('falogo'); ?>">&nbsp;</i><?php echo $SITE->shortname; ?></a>
			<?php
			}
			?>
		</div>
        <?php echo $OUTPUT->flexibase_user_menu(); ?>
    </div>
</nav>
		<?php if (isloggedin() ) { ?>
        <div class="navbaruserpicture">
			<?php echo $OUTPUT->user_picture($USER, array('link' => false, 'size'=> 75)); ?>
		</div>
		<?php } ?>
<header class="moodleheader">
    <div class="container-fluid">
	<div class="headerlogo col-md-8 pull-left">
		<?php if ($pageid !== 'page-site-index' && $showlogo == 'frontpage') { ?>
			<a href="<?php echo $CFG->wwwroot ?>" class="nologo"></a>
		<?php } else { ?>
			<a href="<?php echo $CFG->wwwroot ?>" class="logo"></a>
		<?php } ?>
		<?php echo $OUTPUT->page_heading(); ?>
	</div>
    <?php include('social.php'); ?>
    </div>
</header>

<nav role="navigation" class="navbar navbar-<?php echo $menunavbarcolour ?>">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#moodle-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div id="moodle-navbar" class="navbar-collapse collapse">
        <?php echo $OUTPUT->custom_menu(); ?>
        <ul class="nav pull-right">
            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
        </ul>
    </div>
    </div>
</nav>
<!-- Browser flexbox warnings -->
<div class="browserwarningnoflex useralerts alert alert-danger"><span class="fa fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span><?php echo "Your Browser does not support Flexbox layouts, so some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)"?></div>
<div class="browserwarningflexleg useralerts alert alert-danger"><span class="fa fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span><?php echo "Your Browser supports legacy flexbox layouts, so while you should be able to use this theme as intended, some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)"?></div>

