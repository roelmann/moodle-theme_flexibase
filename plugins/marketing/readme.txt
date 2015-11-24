These plugins are deigned to work from within the existing plugins/name
folder. Simply copy the folder into your theme and add the lines below
as guided.
Remember to rename any instances of 'flexibase' to your theme name
and to Purge All Caches.


In language file
    require($CFG->dirroot .'/theme/flexibase/plugins/marketing/marketinglang_en.php');

In layout files
Inside your <head> section
    <link href="<?php echo $CFG->wwwroot.'/theme/flexibase/plugins/marketing/marketing.css';?>" rel="stylesheet">
Where you want to position the marketing spots - you may need to duplicate an
existing layout file to create one specifically for frontpage/dashboard
if one does not already exist - please see moodle.org theme documentation
for more detail on this area.
    require($CFG->dirroot .'/theme/flexibase/plugins/marketing/marketingconditions.php');

In settings file
    require($CFG->dirroot .'/theme/flexibase/plugins/marketing/marketing_settings.php');

In lib.php file
    require($CFG->dirroot .'/theme/flexibase/plugins/alerts/alertslib.php');

