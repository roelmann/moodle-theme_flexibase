These plugins are deigned to work from within the existing plugins/name
folder. Simply copy the folder into your theme and add the lines below
as guided.
Remember to rename any instances of 'flexibase' to your theme name
and to Purge All Caches.


In language file
    require($CFG->dirroot .'/theme/flexibase/plugins/alerts/alertslang_en.php');

In layout files
Inside your <head> section
    <link href="<?php echo $CFG->wwwroot.'/theme/bcu/plugins/alerts/alerts.css';?>" rel="stylesheet">
Where you want to position the alerts - you may need to duplicate an
existing layout file to create one specifically for frontpage/dashboard
if one does not already exist - please see moodle.org theme documentation
for more detail on this area.
    require($CFG->dirroot .'/theme/flexibase/plugins/alerts/alerts.php');

In settings file
    require($CFG->dirroot .'/theme/flexibase/plugins/alerts/alerts_settings.php');

In lib.php file
    require($CFG->dirroot .'/theme/flexibase/plugins/alerts/alertslib.php');


TESTED by adding into BCU theme
