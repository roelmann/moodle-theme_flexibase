<?php

$mktingcount=0;

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
$evenflexmkting='';
if (!empty($PAGE->theme->settings->flexmarketing)) {
	if($PAGE->theme->settings->flexmarketing == 2) {
		$evenflexmkting = 'evenmkting'.$mktingcount;
	}
}
 ?>

	<div id="page-marketing" class="">
<?php /* Section hidden as not used in flexibase but left in for porting to other themes.
		<h2 class="marketingheader panel-title header">
			<i class="fa fa-<?php echo $PAGE->theme->settings->marketingtitleicon ?>"></i>
			<?php echo $PAGE->theme->settings->marketingtitle ?>
		</h2>
		*/ ?>
		
		<div class="marketing-wrapper <?php echo $evenflexmkting; ?>">

			<!-- Start Spot One -->
			<?php if ($hasmarketing1) { ?>
				<div class="marketing-block block panel panel-default">
					<h3 class="panel-title header">
						<i class="fa fa-<?php echo $PAGE->theme->settings->marketing1icon ?>"></i>
						<?php echo $PAGE->theme->settings->marketing1 ?>
					</h3>
					<div class="marketing-block-content">
						<?php echo $PAGE->theme->settings->marketing1content ?>
					</div>
				</div>
			<?php } ?>
			<!-- End Spot One -->
	
			<!-- Start Spot Two -->
			<?php if ($hasmarketing2) { ?>
				<div class="marketing-block block panel panel-default">
					<h3 class="panel-title header">
						<i class="fa fa-<?php echo $PAGE->theme->settings->marketing2icon ?>"></i>
						<?php echo $PAGE->theme->settings->marketing2 ?>
					</h3>
					<div class="marketing-block-content">
						<?php echo $PAGE->theme->settings->marketing2content ?>
					</div>
				</div>
			<?php } ?>
			<!-- End Spot Two -->
						
			<!-- Start Spot Three -->
			<?php if ($hasmarketing3) { ?>
				<div class="marketing-block block panel panel-default">
					<h3 class="panel-title header">
						<i class="fa fa-<?php echo $PAGE->theme->settings->marketing3icon ?>"></i>
						<?php echo $PAGE->theme->settings->marketing3 ?>
					</h3>
					<div class="marketing-block-content">
						<?php echo $PAGE->theme->settings->marketing3content ?>
					</div>
				</div>
			<?php } ?>
			<!-- End Spot Three -->
						
			<!-- Start Spot Four -->
			<?php if ($hasmarketing4) { ?>
				<div class="marketing-block block panel panel-default">
					<h3 class="panel-title header">
						<i class="fa fa-<?php echo $PAGE->theme->settings->marketing4icon ?>"></i>
						<?php echo $PAGE->theme->settings->marketing4 ?>
					</h3>
					<div class="marketing-block-content">
						<?php echo $PAGE->theme->settings->marketing4content ?>
					</div>
				</div>
			<?php } ?>
			<!-- End Spot Four -->

		</div>
	</div>
