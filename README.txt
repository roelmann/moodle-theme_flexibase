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
files. To supplement the layouts, the theme has a wide range of additional block
regions - page top and page bottom, main content top and bottom, and main content
left and right. While it is not anticipated that all of these block regions will
be used on a single page, they provide a huge amount of flexibility for the
course creator.

The theme also makes use of less compilation on the fly through its settings pages.
It has a range of colour and branding options which affect the less variables, but
also makes use of a 'CustomLess' setting in the same manner as many themes have a
'CustomCSS' (as flexibase also does). It should be noted that the LESS compiler is
not as error tolerant as most css and if there is a simple typo, this can cause the
page to be served with no css at all. In this instance, simply backtrack your latest
change to the LESS and you will restore the less/css styling.

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
'plugins' folder of flexibase. Each component comes with its own set of
instructions, but these can vary according to the theme the component is being added
to - as folder structure, existance/inheritance of layout files, lib.php etc will
all have a bearing on implementing these components. The plugins have been tested
on Clean and should work on any reasonably modern theme. THESE HAVE NOW BEEN RETIRED
FROM THE THEME AND WILL BE DEVELOPED AS A SEPARATE REPOSITORY.

A readmes folder is also provided which contains some of the theme support
materials - in this case a text version of the base css and less that is used to
create the theme. The less file in particular is useful as a starting point if
editing the customLESS setting as it allows you to copy and paste the existing
LESS which can then be edited, without necesarily searching for it in the
parent theme or bootswatch. This folder also contains a demo course backup. This
can be restored to any Moodle3+ site and will give an example of some of the
layout options as well as some documentation about the theme and its settings
pages.

I hope you find the theme useful. Please submit any comments and feedback via the
moodle.org forums or any bugs via the github issues page
https://github.com/roelmann/theme_flexibase/issues

Richard

CHANGELOG:
==========
3.2.2   - Update boostrap LESS links re theme_bootstrap. Now 3.3.7
3.2.1   - Bug and style fixes
        - Block Modal Page - default region reverted back to standard side-pre
3.2.0d  - Quiz bug fixed on conditional block regions (no course->id on quiz pages?)
          Minor style/bug fixes
          Set 'Read More' button text per slide in the carousel
          Block display options - standard (coloured heading background etc) or borderless (no header background or
              borders), separately selectable for main pages or block modal page.
3.2.0   - CSS styling moved to LESS where appropriate
        - New BLOCK Modal Page - with additional regions and as default region
            This page was requested to give those who require it an opportunity to create a 'blockless' main course
            page. Block regions remain (and will continue to remain) available on the main page as previously, but
            users now have the option to move blocks onto this secondary page, making them still available, but not
            part of the initial course main page. The page itself has a top region, a side region and the main region.
        - Radial course grade display replaces previous display on header
        - Radial completion display
        - Several 3.1 compatability issues fixed
        - New tagged, promoted and 'my' course sliders added to front page and dashboard
3.1.1c  - Added editor.css
3.1.1b  - Setting added to select/deselect tiles view on dashboard
          Secure.php bug corrected (thanks for the heads up to Mary E)
3.1.1   - 2 new block regions:
              Teacher only (similar to existing Admin only region)
              Alerts region - an alternative to the Alerts settings where an html block can be added
                  and controlled by anyone with appropriate editing rights (Alert theme setting is Admin
                  only)
          FontAwesome CDN updated to 4.6.1
          Dashboard now uses Course Tiles look - additional info for course on hover, with banner notice
3.1.0b  - Fix Issue #62 - Blocks not working correctly in IE 10/11 on smaller screens
3.1.0a  - Refactor less and css
        - Refactor php layout, renderer, css, etc files to allow for changes in core Travis code checker
        - Add new setting and style for marketing spots - large icon style or 'blocks' format
3.1.0   - Style fixes
        - Settings navigation moved to layout files to clear language strings
        - Image Bank added (theme specific adaptation of work by Gareth Barnard)
        - favicon setting added
        - Category font-awesome icon size setting added
        - Category tiles height css fixed to only apply to icon display not main panel when icon not used
        - Classes added to allow custom styling of category and course in breadcrumb
        - Settings to show/hide items on the user dropdown menu, including a custom menu items setting
        - Settings to show/hide the items on the main menu (Home, Dashboard)
        - Block renderer override to render blocks as Bootstrap3 panels
        - Admin Only block region added
        - User/preferences.php restyles as panels (to match restyled user/profile.php)
        - Web font settings (e.g. google fonts) added
        - Theme documentation pages added - with a link from the main menu
        - Remove 'Plugins' folder. These will eventually be added to a separate repository
        - Sample course removed to reduce theme zip size. Course download will be made available from demo site
3.0.7   - Style fixes (thanks Derek Chirnside for valuable extended use and testing)
        - Updated modernizr.js
3.0.6   - Bug fixes to awesomebar (hiding nav & settings, correctly applying yui)
          Adding a site header background setting
          Various minor styling and minor bug fixes
3.0     - (There is no 2.x release - major version numbering updated to match Moodle)
    - Course page header images
    - Course grade display on course header
    - 'theme feature plugins' development feature added (including example 'cleanplugged' theme suing those features)
    - example course backup added to readmes folder to demonstrate some features and provide documentation for theme
    - Various minor style developments
    - horizontal 'quick links' added to settings pages
    - No major changes to flex layout or bootstrap upstream code

1.1     - Update for 2.9 - Update parent requirement for changes to Bootstrap parent

1.0     - Initial Release
