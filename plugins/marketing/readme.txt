These plugins are deigned to work from within the existing plugins/name
folder. Simply copy the folder into your theme and add the lines below
as guided.
Remember to rename any instances of 'clean' to your theme name
and to Purge All Caches.


In language file
    require($CFG->dirroot .'/theme/clean/plugins/marketing/marketinglang_en.php');

In layout files
Inside your <head> section
    <link href="<?php echo $CFG->wwwroot.'/theme/clean/plugins/marketing/marketing.css';?>" rel="stylesheet">
If your theme does not already have fontawesome installed
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
If your theme is based on Bootstrap2 (Panels were added in BS3, but do not require javascript so this is a css only addition)
	<link href="<?php echo $CFG->wwwroot.'/theme/clean/plugins/marketing/bootstrap3panels.css';?>" rel="stylesheet">


Where you want to position the marketing spots - you may need to duplicate an
existing layout file to create one specifically for frontpage/dashboard
if one does not already exist - please see moodle.org theme documentation
for more detail on this area.
    require($CFG->dirroot .'/theme/clean/plugins/marketing/marketingconditions.php');

In settings file
    require($CFG->dirroot .'/theme/clean/plugins/marketing/marketing_settings.php');

