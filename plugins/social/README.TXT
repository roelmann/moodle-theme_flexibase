SOCIAL ICONS PLUGIN GUIDE
=======================
Create folder
-------------
First of all copy the /plugins/social folder into your theme and
find/replace all instances of 'flexibase' with your theme name
e.g. (for linux users)
grep -rl "flexibase" /var/www/html/moodle/theme/yourthemename/plugins/social  | xargs sed -i 's|flexibase|yourthemename|g'

If you want to keep most of the files within the plugins folder you can
add includes that point to them using the guides below. Alternatively you
could copy and paste the content of each file into the relevant main file,
or move it into the relevant folder - depending on how your theme is
organised.
Note also, that it is assumed that this plugin feature is provided in
this way for the use of individual site administrators. It is assumed that
anyone developing for a wider release would ensure that the files are
moved to their correct locations and standard moodle methodologies are used.

Layout files (various files depending on theme design - note if your theme
------------  inherits layouts from a parent theme, you may need to copy
              those layout files into your own theme first. You may also
              wish to duplicate an existing layout file if for example you
              only want the social icons to appear on the frontpage,
              but the same layout file is used for the frontpage and other
              page types - please see moodle.org theme documentation for
              more detail on this area.)
Inside your <head> section, but only if your theme does not already have
fontawesome installed
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
Where you want to position the social icons
    require('path/to/social.php');
e.g.
    require($CFG->dirroot .'/theme/clean/plugins/social/social.php');

Language file (lang/en/theme_yourtheme.php)
-------------
    require('path/to/sociallang_en.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/social/sociallang_en.php');

Settings file (settings.php)
-------------
    require('path/to/social_settings.php');
e.g.
    require($CFG->dirroot .'/theme/flexibase/plugins/socail/social_settings.php');
Note - the original settings file is suitable for themes which use several
settings pages - although the variable names need to be checked for consistency
with your theme. An alerts_settings_alternate.php is provided for themes
such as Clean which use a single settings page - again variable names
must be checked for consistency.

***************************************************************************
* REMEMBER: Purge All Caches when complete - theme designer mode does not *
* clear language caches.                                                  *
***************************************************************************

