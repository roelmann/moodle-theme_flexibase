AWESOMEBAR PLUGIN GUIDE
=======================
Create folder
-------------
First of all copy the /plugins/awesombar folder into your theme and
find/replace all instances of 'flexibase' with your theme name
e.g. (for linux users)
grep -rl "flexibase" /var/www/html/moodle/theme/yourthemename/plugins/awesomebar  | xargs sed -i 's|flexibase|yourthemename|g'

If you want to keep most of the files within the plugins folder you can
add includes that point to them using the guides below. Alternatively you
could copy and paste the content of each file into the relevant main file,
or move it into the relevant folder - depending on how your theme is
organised. However, some of the code is adjusted to make sure it works
directly within this plugins folder and would need to be ammended if the
files are moved out to their 'traditional' locations - e.g. images in the
css are served directly from the awesomebarpix folder rather than using
the [[pix:theme|filename]] format.
Note also, that it is assumed that this plugin feature is provided in
this way for the use of individual site administrators. It is assumed that
anyone developing for a wider release would ensure that the files are
moved to their correct locations and standard moodle methodologies are used.

Layout files (various files depending on theme design - note if your theme
------------  inherits layouts from a parent theme, you may need to copy
              those layout files into your own theme first)
Immeditately prior to the doctype statement in your layout file(s)
    require('path/to/awesomebarpreheaderinc.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/awesomebar/awesomebarpreheaderinc.php');

In the layout files, positioned where you want the awesomebar - usually
immediately prior to the main navbar
    require('path/to/awesomebarinc.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/awesomebar/awesomebarinc.php');

Add the following line into your <head> section of your layout pages.
    <link href='path/to/awesomebar.css' rel="stylesheet">
e.g.
    <link href="<?php echo $CFG->wwwroot.'/theme/flexibase/plugins/awesomebar/awesomebar.css';?>" rel="stylesheet">

Language file (lang/en/theme_yourtheme.php)
-------------
    require('path/to/awesomebarlang_en.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/awesomebar/awesomebarlang_en.php');

Renderers file (renderers.php)
--------------
    require_once('path/to/topsettings_renderer.php');
e.g.
    require_once($CFG->dirroot .'/theme/flexibase/plugins/awesomebar/topsettings_renderer.php');

If your theme does not already override core_renderer, then you can include the awesomebar core renderer in the same way. If it does already have a core_renderer override however, you will need to copy the function in that file into the existing core_renderer file.

Lib file (lib.php)
--------
    require('path/to/awesomelib.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/awesomebar/awesomelib.php');

Settings file (settings.php)
-------------
    require('path/to/awesomebar_settings.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/awesomebar/awesomebar_settings.php');
Note - the original settings file is suitable for themes which use several
settings pages - although the variable names need to be checked for consistency
with your theme. An awesomebar_settings_alternate.php is provided for themes
such as Clean which use a single settings page - again variable names
must be checked for consistency.

yui folder
----------
You will need to move the entire yui folder into the root of your theme, so that you
have /yourtheme/yui/awesomebar/awesombar.js
If your theme has a yui folder already, then extract the contents of the included one
and add them to the existing yourtheme/yui folder.

***************************************************************************
* REMEMBER: Purge All Caches when complete - theme designer mode does not *
* clear language caches.                                                  *
***************************************************************************

IMPORTANT NOTES:
1. Clean (and some other themes) theme only has a single settings page
and so requires the awesomebar_settings_alternate.php file for its settings
and not the one used in flexibase.
2. Some css alteration is required when using awesomebar as by default in
Clean (and other themes) it is present but behind the top navbar - as this
varies from theme to theme it is not part of the plugin, but in most cases
adding a top margin to body will remove any display issues like this.
