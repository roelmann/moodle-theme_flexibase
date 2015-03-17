About this theme
================

 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @parents    Bootstrap
 * @copyright  2014 Bas Brands
 * @credits    Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 *             Many others for non-specific but vital inspirations,
 *             suggestions and support
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later

This is the flexibase theme for Moodle. It is a Bootstrap3 theme, but uses
flexbox to create the layouts, rather than the bootstrap grid.

This theme depends upon Bas Brands bootstrap theme for bootstrap3.

The aim of the theme is to provide an experimental format for making use of the
flexbox css layouts to provide greater options for administrators and to simplify
the layout code when considering rtl languages, editing on/off, use of side-bars
and docking as well as other factors which influence the layouts. The theme allows
administrators to choose layout structures for set page layout types (standard pre
and post, 2 pre, 2 post etc) from a settings page without the need to edit theme
files.

The theme also makes use of less compilation on the fly through its settings pages.
It has a range of colour and branding options which affect the less variables, but
also makes use of a 'CustomLess' setting in the same manner as many themes have a
'CustomCSS' (as flexibase also does).

IMPORTANT NOTE: Older versions of IE do not support any version of the flexbox
format. So, although provision has been made for vendor prefix support in some older
browsers, as well as support for legacy versions of the flexbox structure itself, 
older IE versions do not support either (IE 9 and below - IE 10 supports legacy, 
prefixed forms and is supported). This means that elements of this theme, including
the main layouts will not work as expected in IE9 and below. They do give a similar
look and layout to the small screen responsive view, along with identifying the 
browser as not supporting flexbox in an alert warning.
Suggested workarounds: Update the browser - any PC using IE9 is capable of running
IE10/11 or FF/Chrome - given that some IT departments in some institutions do not
support this option and remain with IE8 and other older options. Alternatively,
make use of the device detection features in Moodle theme settings and set a device
as /MSIE 9/ and use that to add a separate legacy theme for those users.
This may make this theme unsuitable for you if you have significant users on older
versions of IE.

As a secondary consideration, this theme is also being used to develop several of
the features as 'plugable' options for other themes, which you can find in the
'theme components' folder of flexibase. Each component comes with its own set of
instructions, but these can vary according to the theme the component is being added
to - as folder structure, existance/inheritance of layout files, lib.php etc will
all have a bearing on implementing these components.

I hope you find the theme useful. Please submit any comments and feedback via the
moodle.org forums or any bugs via the github issues page
https://github.com/roelmann/theme_flexibase/issues

Richard

