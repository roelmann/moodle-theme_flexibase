<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Flexibase language file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['choosereadme'] = '
<p>flexibase was based on the Bootstrap3 parent theme (bootstrap) and the bootswatch Spacelab</p>
<p>However, it uses flexbox layouts for the main layout component areas, rather than bootstrap grids in order to provide an easy way for admins to manage a wide variety of layouts on their site through the theme settings pages, without needing to customise any code.</p><p class="alert-warning"><b>NOTE:</b> These layout options are not applied in browsers which do not support Flexbox at all such as IE 9 and below. Flexbox legacy and prefixed versions are supported.</p>
<p>You can find more details in the theme README.txt file and also in the included course backup file which can be restored to your own site for more information about some of the theme features.</p>';

$string['configtitle'] = 'FlexiBase';
$string['pluginname'] = 'FlexiBase';

$string['noflexbox'] = 'Your Browser does not support Flexbox layouts, so some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)';
$string['legacyflexbox'] = 'Your Browser supports legacy flexbox layouts, so while you should be able to use this theme as intended, some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)';

// Regions.
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['region-side-mainpost'] = 'Main Content Right';
$string['region-side-mainpre'] = 'Main Content Left';
$string['region-side-maintop'] = 'Main Content Top';
$string['region-side-mainbottom'] = 'Main Content Bottom';
$string['region-side-top'] = 'Top';
$string['region-side-bottom'] = 'Bottom';
$string['region-side-adminbottom'] = 'Site Administrator Only';

// Settings.
// Readme.
$string['readme_title'] = 'FlexiBase read-me';
$string['readme_desc'] = 'Please {$a->url} containing more information about the FlexiBase theme.';
$string['readme_click'] = 'click for README.txt';

// Docs.
$string['settingsdocs'] = 'Settings Pages Help Docs';
$string['docsheadingsub'] = 'Settings Docs';
$string['docsheadingdesc'] = 'Page information - text here to create a help page for settings pages';

// General.
$string['genericsettings'] = 'General';
$string['generalheadingsub'] = 'General settings';
$string['generalheadingdesc'] = 'Configure the general settings for the theme here.';
$string['favicon'] = 'Favicon';
$string['favicondesc'] = 'Please upload your favicon here.';
$string['logo'] = 'Main Header Logo';
$string['logodesc'] = 'Please upload your custom logo for the Main Heading here if you want to add it to the header.<br>
If the height of your logo is more than 75px add the following CSS rule to the Custom CSS box below.<br>
<code>a.logo {height: 100px;}</code> or whatever height in pixels the logo is.<br />Note, if you wish to hide the page header and only show the logo, add the following CSS rule to the Custom CSS box below<br /><code>.headerlogo h1 {display:none;}</code>';
$string['showlogo'] = 'Show Main Header Logo';
$string['showlogodesc'] = 'Hide Main Logo other than front page.<br />Note: for this and several other layout options (Alerts etc) the My Home page is treated in the same way as the Site Home Page.';
$string['showlogofrontonly'] = 'Front page only';
$string['showlogoeverywhere'] = 'All pages';
$string['minilogo'] = 'Top Bar Logo';
$string['minilogodesc'] = 'Please upload a custom logo for the Top NavBar here if required.<br>
This should be a small logo - usually a maximum of 30px high and will replace any FontAwesome icon added in the setting above. If no icon or logo is added, the standard "home" icon will be used.';
$string['falogo'] = 'Top Bar FontAwesome Icon';
$string['falogodesc'] = 'Please add a FontAwesome icon for the Top NavBar Home link here if required.<br>
This should be a small logo - usually a maximum of 40px high and will replace any FontAwesome icon added in the setting above. If no icon or logo is added, the stadard "home" icon will be used. Adding "o" here and no mini logo below will prevent any logo or icon appearing on the top navbar.<br />A full list of FontAwesome icons can be found at http://fontawesome.io/icons/';
$string['headerbg'] = 'A site header background image';
$string['headerbgdesc'] = 'A background image for the header of your site - this will be overwritten on course pages if a course image (or default course image) is used.<br>Suggested image size 1200px x 75px. There is deliberately no default image stored, although there are several example header images in the pix/header folder of the theme.';
$string['topbarcolour'] = 'Top NavBar colour';
$string['topbarcolourdesc'] = 'Top NavBar colour setting - default or inverse colour scheme';
$string['menunavbarcolour'] = 'Main Menu NavBar colour';
$string['menunavbarcolourdesc'] = 'Main Menu NavBar colour setting - default or inverse colour scheme';
$string['default'] = 'default';
$string['inverse'] = 'inverse';
$string['loginbg'] = 'Login Background';
$string['loginbgdesc'] = 'Login Page Background image - should be around 1200x800px';
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

// Brand Colour Settings.
$string['lessbrandsettings'] = 'Main Brand Colours';
$string['lessbrandsub'] = 'Main Brand Colours';
$string['lessbranddesc'] = 'Main colours for the theme - These are the key colours that everything else is built from.';
$string['brandprimary'] = 'Brand Primary';
$string['brandprimarydesc'] = 'Main brand colour';
$string['brandsuccess'] = 'Brand Success';
$string['brandsuccessdesc'] = 'Brand colour for success alerts etc';
$string['brandinfo'] = 'Brand info';
$string['brandinfodesc'] = 'Brand colour for info alerts etc';
$string['brandwarning'] = 'Brand Warning';
$string['brandwarningdesc'] = 'Brand colour for warning alerts etc';
$string['branddanger'] = 'Brand Danger';
$string['branddangerdesc'] = 'Brand colour for danger alerts etc';
$string['black'] = 'Black';
$string['blackdesc'] = 'Black setting - Default will be #000, but this can be adapted if there is a need to adjust contrast levels';
$string['white'] = 'White';
$string['whitedesc'] = 'White setting - Default will be #fff, but this can be adapted if there is a need to adjust contrast levels';
$string['graybase'] = 'Gray Base';
$string['graybasedesc'] = 'Gray Base setting - Default will be #000, but this can be adapted if there is a need to adjust contrast levels';
$string['lessadditionalsettings'] = 'Additional LESS';
$string['lessadditionalsub'] = 'Additional LESS Settings';
$string['lessadditionaldesc'] = 'Additional for the theme - These are the secondary colours, usually lighter/darker forms of the primary colours - these should proably only be adjusted where contrast levels need changing because of choice of brand colours.<br />These settings have been left as a text field so that LESS rules can be added (as per the default) but they can also set an html colour name, hex value or rgb/rgba colour value.<br /><b>NOTE:</b> An error or typo in these fields can cause the LESS compiler to fail and for the page to be returned with no CSS applied. <b style="background-color:yellow;">TODO</b> Error trapping for these entries - difficult as there are many optional styles of entry, LESS - which could include mixins, html names, hex, rgb(a)';
$string['brandprimarylight'] = 'Brand Primary Light';
$string['brandprimarylightdesc'] = 'Brand Primary Light';
$string['brandprimarylighter'] = 'Brand Primary Lighter';
$string['brandprimarylighterdesc'] = 'Brand Primary Lighter';
$string['brandprimarylightest'] = 'Brand Primary Lightest';
$string['brandprimarylightestdesc'] = 'Brand Primary Lightest';
$string['brandsuccesslight'] = 'Brand Success Light';
$string['brandsuccesslightdesc'] = 'Brand Success Light';
$string['brandinfolight'] = 'Brand Info Light';
$string['brandinfolightdesc'] = 'Brand Info Light';
$string['brandwarninglight'] = 'Brand Warning Light';
$string['brandwarninglightdesc'] = 'Brand Warning Light';
$string['branddangerlight'] = 'Brand Danger Light';
$string['branddangerlightdesc'] = 'Brand Danger Light';
$string['graydarker'] = 'Gray Darker';
$string['graydarkerdesc'] = 'Gray Darker';
$string['graydark'] = 'Gray Dark';
$string['graydarkdesc'] = 'Gray Dark';
$string['gray'] = 'Gray';
$string['graydesc'] = 'Gray';
$string['graylight'] = 'Gray Light';
$string['graylightdesc'] = 'Gray Light';
$string['graylighter'] = 'Gray Lighter';
$string['graylighterdesc'] = 'Gray Lighter';
$string['graylightest'] = 'Gray Lightest';
$string['graylightestdesc'] = 'Gray Lightest';
$string['customless'] = 'Custom LESS';
$string['customlessdesc'] = 'Whatever LESS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';
$string['lessvarclick'] = 'LESS Variables file';
$string['lessvariablesfile'] = 'LESS Variables';
$string['lessvariablesfiledesc'] = 'For reference purposes when editing the additional LESS settings or CustomLESS, please click to see a text version of the {$a->url}';
$string['borderradius'] = 'Border radius';
$string['borderradiusdesc'] = 'Border radius';

// Layouts.
$string['layoutheading'] = 'Layout';
$string['layoutheadingsub'] = 'Set the layouts used by pages in your site';
$string['layoutdesc'] = '<p>There are 5 layouts available for your site pages:</p>
<p><img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout1&amp;component=theme" alt="Pre and Post Layout" title="Pre and Post layout">  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout2&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/>  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout3&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/>  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout4&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/>  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout5&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/></p>
<p>There are also additional block regions at the top and bottom and within the main content area, giving enormous flexibility without the need to set layout files in the code. These are available on all the page types below and can be used (or not) as required. It is not really expected that anyone will use ALL these block regions on one page as that would probably create a very cluttered page (or require a very large monitor). However, the additional regions are provided to allow as much flexibility as possible in the design and layout of pages, in combination with th eability to adjust the main layout for different page types without needing to access the theme code or alter the config.php.<br />All layouts are designed to be RTL compatible and responsive.<br /></p><p class="alert-warning"><b>NOTE:</b> These layout options are not applied in browsers which do not support Flexbox at all such as IE 9 and below. Flexbox legacy and prefixed versions are supported.</p>';
$string['defaultlayout'] = 'Default';
$string['defaultlayoutdesc'] = 'SideBar layout for default pages';
$string['courseslayout'] = 'Courses';
$string['courseslayoutdesc'] = 'SideBar layout for course pages';
$string['frontpagelayout'] = 'Front Page';
$string['frontpagelayoutdesc'] = 'SideBar layout for the front page';
$string['myhomelayout'] = 'My Home';
$string['myhomelayoutdesc'] = 'SideBar layout for the My Home dashboard page';

// Alerts.
$string['alertsheading'] = 'User alerts';
$string['alertsheadingsub'] = 'Display important messages to your users on the front page';
$string['alertsdesc'] = 'This will display an alert (or multiple) in three different styles to your users on the Moodle frontpage. Please remember to disable these when no longer needed.';
$string['enablealert'] = 'Enable alerts';
$string['enablealertdesc'] = 'Enable or disable alerts';
$string['alert1'] = 'First alert';
$string['alert2'] = 'Second alert';
$string['alert3'] = 'Third alert';
$string['alertinfodesc'] = 'Enter the settings for your alert.';
$string['alerttitle'] = 'Title';
$string['alerttitledesc'] = 'Main title/heading for your alert.';
$string['alerttype'] = 'Level';
$string['alerttypedesc'] = 'Set the appropriate alert level/type to best inform your users.';
$string['alerttext'] = 'Alert text';
$string['alerttextdesc'] = 'What is the text you wish to display in your alert.';
$string['alert_info'] = 'Information';
$string['alert_warning'] = 'Warning';
$string['alert_general'] = 'Announcement';

// Image bank.
$string['imagebanksettings'] = 'Image Bank';
$string['imagebankheadingsub'] = 'Image Bank settings';
$string['imagebankheadingdesc'] = 'Create a bank of images for your site here.';
$string['numberofimagebankimages'] = 'Number of images in the image bank';
$string['numberofimagebankimages_desc'] = 'Number of images you want in the image bank.';
$string['imagebankheading'] = 'Image bank';
$string['imagebankheadingsub'] = 'Use images anywhere by using the image bank.';
$string['imagebankheadingdesc'] = "To change the number of available images in the image bank change the 'Number of images in the image bank' below and save the page to update.";
$string['imagebankimage'] = 'Image ';
$string['imagebankimage_desc'] = 'Image URL to copy: \'{$a->imagedesc}\' and use, i.e. insert in an HTML editor.';
$string['none'] = 'none';

// Fonts.
$string['fontsettings'] = 'Fonts';
$string['fontheadingsub'] = 'Font settings';
$string['fontheadingdesc'] = "This settings page allows you to link to upto 6 different web fonts (e.g. <a href='https://www.google.com/fonts'>Google fonts</a>). Copy and paste the <code><link\></code> code provided for your selected font into one of the setting boxes. You can add web available fonts from any source in this way, not just Google ones.";
$string['fontsep'] = 'Web fonts Links';
$string['fontsepdesc'] = '';
$string['fontsep2'] = 'Font Usage';
$string['fontsep2desc'] = 'Note: you can use any font that is generally considered "web-safe" ie would normally be installed on your users\' computers, or any of the web fonts you have linked above. ';
$string['numberoffonts'] = 'Number of web fonts';
$string['numberoffontsdesc'] = 'You can opt to download upto 6 web based fonts.';
$string['fontlink'] = 'Font Link';
$string['fontlinkdesc'] = "Copy the <code><link\></code> code from the web source of your font. e.g. <code>< link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700italic,500,700' rel='stylesheet' type='text/css'\></code>";
$string['fontfacebody'] = 'Body text font-face';
$string['fontfacebodydesc'] = 'Add the name of the font you want to use for body text';
$string['fontfamilybody'] = 'Body text font-family';
$string['fontfamilybodydesc'] = 'Fall back font type incase of failure (e.g. lost connection to web-font link). Serif/Sans-Serif';
$string['fontsizebody'] = 'Body font size';
$string['fontsizebodydesc'] = 'This can be as a px, pt or em, but please ensure the units are specified.';
$string['fontfaceheadings'] = 'Header text font-face';
$string['fontfaceheadingsdesc'] = 'Add the name of the font you want to use for header text (H1-H6)';
$string['fontfamilyheadings'] = 'Header text font-family';
$string['fontfamilyheadingsdesc'] = 'Fall back font type incase of failure (e.g. lost connection to web-font link). Serif/Sans-Serif';
$string['fontheader'] = '';
$string['fontheaderdesc'] = 'Note: Header font sizes are calculated from the body text size in order to maintain a perspective. They are also preset as bold (font-weight:700).<br>However, once a web-based font is loaded above, it can be used to override any preset values, so that different fonts and weights can be set for each header type (or any other css selector) as required by using customcss. eg. <code>h3 {font-family:"your font", serif;font-weight:900;font-size:18pt;font-color:red</code><br>Be aware that changing those font-sizes manually may mean you need to think about adjusting line height (also calculated from the body font-size) and margins in order to maintain an appropriate look and feel for your typography.';

// User menus.
$string['menussettings'] = 'Menu Settings';
$string['menusheadingsub'] = 'Settings related to the Main and User menus';
$string['menusheadingdesc'] = 'These settings can be used to control menu options such as which items appear on the Main Menu Bar or in the User Menu dropdown and where the Main Menu appears. Some of the items may be available to both the main menu and the user dropdown - it is upto the site administrator to determine which location (or both) is required for their site.';

$string['mainmenusheadingsub'] = 'Main Menu Bar options';
$string['mainmenusheadingdesc'] = 'These settings allow the site admin to determine options for the main menu.';
$string['mainmenulocation'] = 'Main Menu Bar location';
$string['mainmenulocationdesc'] = 'Where should the main menu bar appear. Note: If the AwesomeBar is not enabled, selecting the AwesomeBar location will cause the main menu, and all its options, to be hidden.<br><strong>Note: The theme was designed with the main menu in the lower bar (main menu bar) as per the default and this is currently the only location where the menu is responsive on small screens. Please bear this in mind if selecting alternative locations following the addition of this setting per user request.</strong>';
$string['mmmain'] = 'On the main menu bar (below the heading)';
$string['mmbranding'] = 'On the branding bar (above the heading)';
$string['mmawesome'] = 'On the AwesomeBar (if enabled).';
$string['mmsitehome'] = 'Main Menu -Site Home';
$string['mmsitehomedesc'] = 'Display Site Home link on Main menu - This bypasses the redirect to MyHome if that option is selected';
$string['mmdashboard'] = 'Main Menu -Dashboard';
$string['mmdashboarddesc'] = 'Display Dashboard link on Main menu';
$string['mmthiscourse'] = 'Main Menu -This Course';
$string['mmthiscoursedesc'] = 'Display This Course link on Main menu, within a course page';
$string['mmcalendar'] = 'Main Menu -Calendar';
$string['mmcalendardesc'] = 'Display Calendar link on Main menu';
$string['mmthemehelp'] = 'Main Menu -Theme Help';
$string['mmthemehelpdesc'] = 'Display link to theme help on Main menu';

$string['usermenusheadingsub'] = 'User Drop Down Menu options';
$string['usermenusheadingdesc'] = 'These settings allow the site admin to determine what items appear on the user dropdown menu.<br>There is currently no option to reorder these items, however they can be hidden in the main options and then added in a different order in the custom user menu setting box.';
$string['usermenus'] = 'Custom User Menu';
$string['usermenusdesc'] = 'This option replaces the main user menu option on the Appearance > Themes > Settings page.<br>It is in the format name|url|fontawesome icon name<br>eg.<br><pre>My Profile|/user/profile.php|user<br>
Messages|/message/index.php|envelope</pre>';
$string['umdashboard'] = 'User Menu - Dashboard';
$string['umdashboarddesc'] = 'Display Dashboard Link in User menu';
$string['umcalendar'] = 'User Menu - Calendar';
$string['umcalendardesc'] = 'Display Calendar Link in User menu';
$string['umprofile'] = 'User Menu - Profile';
$string['umprofiledesc'] = 'Display Profile Link in User menu';
$string['umeditprofile'] = 'User Menu - Edit Profile';
$string['umeditprofiledesc'] = 'Display Edit Profile Link in User menu';
$string['umpassword'] = 'User Menu - Change Password';
$string['umpassworddesc'] = 'Display Change Password link in User menu';
$string['umpreferences'] = 'User Menu - Preferences';
$string['umpreferencesdesc'] = 'Display User Preferences link in User menu';
$string['ummessagepreferences'] = 'User Menu - Message Prefereneces';
$string['ummessagepreferencesdesc'] = 'Display Message Preferences Link in User menu';
$string['umblogpreferences'] = 'User Menu - Blog Preferences';
$string['umblogpreferencesdesc'] = 'Display Blog Preferences Link in User menu';
$string['umbadgepreferences'] = 'User Menu - Badge Preferences';
$string['umbadgepreferencesdesc'] = 'Display Badge Preferences Link in User menu';
$string['ummessages'] = 'User Menu - Messages';
$string['ummessagesdesc'] = 'Display Messages Link in User menu';
$string['umfiles'] = 'User Menu - Private Files';
$string['umfilesdesc'] = 'Display Private Files Link in User menu';
$string['umposts'] = 'User Menu - Forum Posts';
$string['umpostsdesc'] = 'Display Forum Posts Link in User menu';
$string['umdiscussions'] = 'User Menu - Forum Discussions';
$string['umdiscussionsdesc'] = 'Display Forum Discussions Link in User menu';
$string['umgrades'] = 'User Menu - My Grades';
$string['umgradesdesc'] = 'Display My Grades Link in User menu';
$string['umbadges'] = 'User Menu - Badges';
$string['umbadgesdesc'] = 'Display Badges Link in User menu';
$string['umlogout'] = 'User Menu - Logout';
$string['umlogoutdesc'] = 'Display Logout Link in User menu';

// Carousel.
$string['carouselheading'] = 'Carousel Slideshow';
$string['carouselheadingsub'] = 'Set images and captions for the frontpage carousel';
$string['carouseldesc'] = 'Set upto 8 images, with title, caption and link url for the front page carousel.';
$string['toggleslideshow'] = 'Toggle Carousel display';
$string['toggleslideshowdesc'] = 'Choose if you wish to hide or show the carousel.';
$string['numberofslides'] = 'Number of slides';
$string['numberofslides_desc'] = 'Number of slides on the carousel.';
$string['hideonphone'] = 'Hide carousel on mobiles';
$string['hideonphonedesc'] = 'Choose if you wish to disable slide show on mobiles.';
$string['hideontablet'] = 'Hide carousel on tablets';
$string['hideontabletdesc'] = 'Choose if you wish to disable the carousel on tablets.';
$string['alwaysdisplay'] = 'Always show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never show';
$string['readmore'] = 'Read more';
$string['slideno'] = 'Slide {$a->slide}';
$string['slidenodesc'] = 'Enter the settings for slide {$a->slide}.';
$string['slidetitle'] = 'Slide title';
$string['slidetitledesc'] = 'Enter a descriptive title for your slide';
$string['noslidetitle'] = 'No title for slide {$a->slide}';
$string['slideimage'] = 'Slide image';
$string['slideimagedesc'] = 'Image works best if it is transparent.';
$string['slidecaption'] = 'Slide caption';
$string['slidecaptiondesc'] = 'Enter the caption text to use for the slide';
$string['slideurl'] = 'Slide link';
$string['slideurldesc'] = 'Enter the target destination of the slide\'s image link';
$string['captiontextcolour'] = 'Caption text colour';
$string['captiontextcolourdesc'] = 'Colour for the carousel slide caption text';
$string['captionbackgroundcolour'] = 'Caption background colour';
$string['captionbackgroundcolourdesc'] = 'Colour for the carousel slide caption background';
$string['captionlight'] = 'Light background';
$string['captiondark'] = 'Dark background';
$string['captiontheme'] = 'Theme primary brand colour';

// Course Image rendering.
$string['frontpagecoursesettings'] = 'Course Images';
$string['frontpagesettingsheading'] = 'Using Course Images';
$string['frontpagedesc'] = 'Configure the way that the images are used for course tiles on the frontpage and as course images on the course pages.';
$string['coursetileimagesinfo'] = 'Front Page Course Tile Images';
$string['coursetileimagesinfodesc'] = 'Settings for Front Page course tile images';
$string['frontpagerenderer'] = 'Frontpage Course Boxes';
$string['frontpagerendererdesc'] = 'Control the way that the coure boxes on the front page are rendered.';
$string['frontpagerendereroption1'] = 'Tiles';
$string['frontpagerendereroption2'] = 'Tiles w/ overlay';
$string['rendereroverlaycolour'] = 'Overlay colour';
$string['rendereroverlaycolourdesc'] = 'The colour of the overlay, when the "Tiles w/ overlay" renderer is selected.';
$string['rendereroverlayfontcolour'] = 'Overlay font colour';
$string['rendereroverlayfontcolourdesc'] = 'The colour of the font, when hovering over a coursebox with "Tiles w/ overlay" renderer enabled.';
$string['frontpagerendererdefaultimage'] = 'Default Front Page course tile image';
$string['frontpagerendererdefaultimagedesc'] = 'The default image to be used for front page course tiles when no course image is found, (applies for Tiles w/ overlay)';
$string['courseheaderdefaultimage'] = 'Default course header image';
$string['courseheaderdefaultimagedesc'] = 'The default image to be used for course header images when no course image is found - if this is left empty, then only courses with a course image in the Course Summary files will have a heading image.';
$string['courseimageheaderoption'] = 'Course Header Images';
$string['courseimageheaderoptiondesc'] = 'Configure the way the images are used for course headers';
$string['courseimageheaderoption1'] = 'Course image as a header banner';
$string['courseimageheaderoption2'] = 'Course image as a separate image';
$string['courseimageheaderoption3'] = 'No course header image';
$string['coursepageimagesinfo'] = 'Course Page Images';
$string['coursepageimagesinfodesc'] = 'Settings for Course Page header images';
$string['courseheaderimageheight'] = 'Course Header image height';
$string['courseheaderimageheightdesc'] = 'Set the height for any images used as header banners (recommended height 150-175px)<br>Note: If you set this to less than 125px, you may also need to alter the font-size on the course grade to bring it to a single line (add <code>.courseheadergradepercentage table tbody tr:last-of-type .column-itemname, .courseheadergradepercentage table tbody tr:last-of-type .column-percentage {font-size:120%;}</code> to your customcss.';

// Category Icons.
$string['categoryiconheading'] = 'Category icons';
$string['categoryiconheadingsub'] = 'Use icons to represent your categories';
$string['categoryicondesc'] = 'If enabled this will allow you to set icons for each category of course.<br>Note: If category icons are used, then they are given a fixed height suitable for a single line name with a small lower margin, or a two line name. If your categories sometimes have titles longer than this you may want to reset that in your customcss to allow additional space eg. <code>.flexibasecats.panel {height: 230px;}</code>';
$string['categoryiconcategory'] = 'The icon for the category: {$a->category}.';
$string['enablecategoryicon'] = 'Enable category icons';
$string['enablecategoryicondesc'] = 'If enabled you will be able to select category icons after clicking "Save changes".';
$string['usecategoryicon'] = 'Enable category icons';
$string['usecategoryicondesc'] = 'Use custom icons for categories';
$string['defaultcategoryicon'] = 'Default category icons';
$string['defaultcategoryicondesc'] = 'Set a default category icon';
$string['categoryiconsize'] = 'Category icon size';
$string['categoryiconsizedesc'] = 'Set a category icon size';
$string['enablecustomcategoryicon'] = 'Enable custom category icons';
$string['enablecustomcategoryicondesc'] = 'If enabled below this section you will see each category with a customizable option behind each category, please save after enabling and disabling this option.';
$string['categoryiconinfo'] = 'Category Icon';
$string['categoryiconinfodesc'] = 'Category Icon';

// Social Networks.
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with social networking.';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
$string['socialnetworks'] = 'Social Networks';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/pukunui)';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/pukunui)';
$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e https://google.com/+Pukunui/)';
$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/pukunui-technology)';
$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/moodleman)';
$string['tumblr'] = 'Tumblr URL';
$string['tumblrdesc'] = 'Enter the URL of your Tumblr. (i.e http://moodleman.tumblr.com)';
$string['vimeo'] = 'Vimeo URL';
$string['vimeodesc'] = 'Enter the URL of your Vimeo channel. (i.e http://vimeo.com/moodleman)';
$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';
$string['vk'] = 'VKontakte URL';
$string['vkdesc'] = 'Enter the URL of your Vkontakte page. (i.e http://www.vk.com/mycollege)';
$string['skype'] = 'Skype Account';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';
$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/mycollege)';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/mycollege)';
$string['website'] = 'Website URL';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://www.pukunui.com)';
$string['blog'] = 'Blog URL';
$string['blogdesc'] = 'Enter the URL of your institution blog. (i.e http://www.moodleman.net)';
$string['sociallink'] = 'Custom Social Link';
$string['sociallinkdesc'] = 'Enter the URL of your your custom social media link. (i.e http://www.moodleman.net)';
$string['sociallinkicon'] = 'Link Icon';
$string['sociallinkicondesc'] = 'Enter the fontawesome name of the icon for your link<br />A full list of FontAwesome icons can be found at http://fontawesome.io/icons/';

// Marketing Spots.
$string['marketingheading'] = 'Marketing Spots';
$string['marketinginfodesc'] = 'Enter the settings for your marketing spot.';
$string['marketingheadingsub'] = 'Four locations on the front page to add information and links.';
$string['marketingheight'] = 'Height of Marketing Images';
$string['marketingheightdesc'] = 'If you want to display images in the Marketing boxes you can specify their height here.';
$string['marketingdesc'] = 'This theme provides the option of enabling four "marketing" or "ad" spots just under the slideshow.  These allow you to easily identify core information to your users and provide direct links.';
$string['togglemarketing'] = 'Marketing Spot display';
$string['togglemarketingdesc'] = 'Choose if you wish to hide or show the four Marketing Spots.';
$string['flexmarketing'] = 'Flex marketing spots';
$string['flexmarketingdesc'] = 'Set whether marketing spots flex with content or are even widths';
$string['flexmktingspots'] = 'Flex with content';
$string['evenmktingspots'] = 'Even width';
$string['marketingtitleicon'] = 'Heading Icon';
$string['marketingtitleicondesc'] = 'Name of the icon you wish to use in the heading for the marketing spots. List is <a href="http://fontawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';
$string['marketing1'] = 'Marketing Spot One';
$string['marketing2'] = 'Marketing Spot Two';
$string['marketing3'] = 'Marketing Spot Three';
$string['marketing4'] = 'Marketing Spot Four';
$string['marketingtitle'] = 'Title';
$string['marketingtitledesc'] = 'Title to show in this marketing spot.';
$string['marketingicon'] = 'Icon';
$string['marketingicondesc'] = 'Name of the icon you wish to use. List is <a href="http://fontawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';
$string['marketingimage'] = 'Image';
$string['marketingimagedesc'] = 'This provides the option of displaying an image above the text in the marketing spot.';
$string['marketingcontent'] = 'Content';
$string['marketingcontentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketingbuttontext'] = 'Link Text';
$string['marketingbuttontextdesc'] = 'Text to appear on the button.';
$string['marketingbuttonurl'] = 'Link URL';
$string['marketingbuttonurldesc'] = 'URL the button will point to.';
$string['alwaysdisplay'] = 'Always show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never show';

// CustomMenu.
$string['mycoursesinfo'] = 'Enrolled courses menu';
$string['mycoursesinfodesc'] = 'Displays a dynamic list of enrolled courses to the user.';
$string['displaymycourses'] = 'Display enrolled courses';
$string['displaymycoursesdesc'] = 'Display enrolled courses for users in the Custom Menu';
$string['mycoursetitle'] = 'Terminology';
$string['mycoursetitledesc'] = 'Change the terminology for the "My Courses" link in the dropdown menu';
$string['mycourses'] = 'My courses';
$string['myunits'] = 'My units';
$string['mymodules'] = 'My modules';
$string['myclasses'] = 'My classes';
$string['allcourses'] = 'All courses';
$string['allunits'] = 'All units';
$string['allmodules'] = 'All modules';
$string['allclasses'] = 'All classes';
$string['noenrolments'] = 'You have no current enrolments';
$string['few'] = 'A few ';
$string['loggedinas'] = ' logged in as ';
$string['loggedinfrom'] = 'Logged in from ';
$string['mygrades'] = 'My grades';
$string['coursegrades'] = 'Course grades';
$string['thiscourse'] = 'This course';
$string['blogpreferences'] = 'Blog preferences';
$string['badgepreferences'] = 'Badge preferences';
$string['messagepreferences'] = 'Message preferences';

// AwesomeBar.
$string['awesomebarheading'] = 'AwesomeBar Settings';
$string['showawesomebar'] = 'Show AwesomeBar';
$string['showawesomebardesc'] = 'Show Awesomebar';
$string['hidesettingsblock'] = 'Hide Settings block';
$string['hidesettingsblockdesc'] = 'This setting removes the standard Settings block from all pages.';
$string['hidenavigationblock'] = 'Hide Navigation block';
$string['hidenavigationblockdesc'] = 'This setting removes the standard Navigation block from all pages.';
$string['custommenuinawesomebar'] = 'Add custom menu to Awesomebar';
$string['custommenuinawesomebardesc'] = 'Moves the custom menu into the Awesomebar.  Otherwise, it will appear below the header.';
$string['custommenuafterawesomebar'] = 'Place custom menu after Awesomebar';
$string['custommenuafterawesomebardesc'] = 'Places custom menu after Awesomebar content.  Otherwise, it will appear before the Settings menus.  (Only applicable if previous option is enabled.)';
$string['coursesloggedinonly'] = 'Hide Courses menu from non-logged-in users';
$string['coursesloggedinonlydesc'] = 'If you do not want users who are not logged in to see the "Courses" menu in the Awesomebar, enable this setting.';
$string['expandtoactivities'] = 'Expand to show activities within sections';
$string['expandtoactivitiesdesc'] = 'Enabling this option shows activities underneath the sections in the Awesomebar, but degrades performance - especially in courses with lots of activities/resources.';
$string['awesomebarsettings'] = 'Awesomebar / Navigation Settings';
$string['awesomebarsettingsdesc'] = 'The "Awesomebar" is the black navigation bar that is fixed to the top of the browser window when using Decaf.<br>The following settings relate to the "Awesomebar" and other page navigation.';
$string['coursesleafonly'] = 'Populate "Courses" menu'; // This seems backwards, but makes it easier for users to understand as it eliminates the double-negative.
$string['coursesleafonlydesc'] = 'On sites with large numbers of courses, generating the full list of courses in the Awesomebar can cause performance issues.  Disable this setting (set it to "No") to prevent the list from being generated - the "Courses" node will remain as a quick way to reach the course list.';
$string['alwaysexpandsiteadmin'] = 'Always populate site administration menu';
$string['alwaysexpandsiteadmindesc'] = 'Enabling this option will populate the Site Administration menu (if applicable), at the expense of performance.';

// Layouts.
$string['preandpost'] = 'Pre and Post sidebars';
$string['twopre'] = 'Two sidebars - Pre';
$string['twopost'] = 'Two sidebars - Post';
$string['singlepre'] = 'Single sidebar - Pre';
$string['singlepost'] = 'Single sidebar - Post';

// Colours.
$string['colorheading'] = 'Colour';
$string['colorheadingsub'] = 'Set the colours used in your theme';
$string['colordesc'] = 'Here you can find various settings to change many of the colours found in this theme.';

// Help Pages.
// Buttons.
$string['adminhelp'] = 'Admin Help';
$string['settingshelp'] = 'Settings Help';
$string['customisationshelp'] = 'Customisations Help';
$string['layoutshelp'] = 'Layout and Regions Help';
$string['contenthelp'] = 'Tips for Content Creation';
$string['bootstraphelp'] = 'Bootstrap Examples';

// Admin Help.
$string['pagesadminhelpheading'] = 'Support for Administrators';
$string['pagesadmininstallationtitle'] = 'Installation';
$string['pagesadmininstallationtop'] = 'There are several ways to install flexibase to your site.';
$string['pagesadmininstallationlista'] = 'Use github to clone the theme from <a href="https://github.com/roelmann/moodle-theme_flexibase">its repository.</a>
<pre>cd /path/to/your/moodle/theme<br>git clone https://github.com/roelmann/moodle-theme_flexibase.git flexibase</pre>';
$string['pagesadmininstallationlistb'] = 'Download the theme from the <a href="https://moodle.org/plugins/theme_flexibase">Moodle plugins database</a> and extract the folder to your /themes folder on your server.';
$string['pagesadmininstallationlistc'] = 'Install from your site front-end at <code>Site Administration > Plugins > <a href="https://docs.moodle.org/30/en/Installing_plugins">Install Plugin</a></code>. This gives you the option to Install directly from the plugins database or to use a previously downloaded zip file.';
$string['pagesadmininstallationbottom'] = 'However you upload your theme, you should then visit <code>Site Administration > Notifications</code> which will trigger the database upgrade process and finalise the installation of the theme.';
$string['pagesadminsettingstitle'] = 'Settings';
$string['pagesadminsettingsbodya'] = 'The flexibase theme can be largely managed, by the site administrators, through the settings pages and it is encouraged to use these settings where possible. This is because theme settings will persist when the theme is upgraded, while code changes will be overwritten on an upgrade.';
$string['pagesadminsettingsbodyb'] = 'Full help about the theme settings can be found on the <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/settingshelp.php">Settings help</a> page.';
$string['pagesadminsettingsbodyc'] = 'Settings exist for logos, colours, menus, fonts, course header images and many features such as alerts, layouts and the front page carousel. There are also customless and customcss settings to allow fine tuning of theme overrides.';
$string['pagesadminlayoutstitle'] = 'Layouts';
$string['pagesadminlayoutsbodya'] = 'There are two elements to page layouts in flexibase.';
$string['pagesadminlayoutslista'] = 'Defined layouts - The defined layouts allow the site administrator to set a predefined layout for common page types.';
$string['pagesadminlayoutslistb'] = 'Block Regions - There are a range of block regions in flexibase. These allow a content creator (e.g. a tutor) to position content blocks, other than the designated main content, in a wide variety of positions on the page. It is not anticipated that all regions would be used in any one page, but they provide a huge amount of flexibility of layout for the content creator without the need for administrator input.';
$string['pagesadminlayoutsbodyb'] = 'Full details and support for the layout options can be found on the <a class="btn btn-info" href="<?php echo $CFG->wwwroot ?>/theme/flexibase/pages/layouthelp.php">Layout and regions help</a> page.';
$string['pagesadmincloningtitle'] = 'Theme Cloning';
$string['pagesadmincloningbody'] = 'If you wish to edit or alter any theme, it is often advisable to make a child theme of that main theme, or to make a clone of it. Given the way flexibase uses Moodle core LESS compiling and the extended use of LESS in the settings pages, creating a child theme can in fact become more complex than using and maintaining a clone. Therefore, it is recommended to use a clone of the theme - however this does need to be maintained for stable upgrades with the parent theme.<br>To create a clone of flexibase:';
$string['pagesadmincloninglista'] = 'Copy theme';
$string['pagesadmincloninglistb'] = 'Remove the /readmes and /plugins folders (not essential, they are not working parts of the theme so doesn\'t actually matter if they are there or not, but it gets them out of the way of the renaming - Note: the /plugins folder has been removed from)';
$string['pagesadmincloninglistc'] = 'Rename folder';
$string['pagesadmincloninglistd'] = 'Rename lang file (/lang/en/theme_themename.php)';
$string['pagesadmincloningliste'] = 'Rename less file (/less/themename.less)';
$string['pagesadmincloninglistf'] = 'Find and replace all instances of flexibase (including CAPS variations)
<pre>On Linux you can use a grep command (had to do this 3 times - flexibase, Flexibase and FlexiBase) <br><code>grep -rl "flexibase" /var/www/html/moodle/theme/yourthemename/  | xargs sed -i \'s|flexibase|yourthemename|g\'</code></pre>';
$string['pagesadmincloninglistg'] = 'Install as normal';
$string['pagesadmincsstitle'] = 'CSS and LESS';
$string['pagesadmincssbody'] = 'The flexibase theme is created with LESS and CSS to create the look and feel. The original LESS variables and CSS files used to create the theme can be found in the /readmes folder of the theme for reference. Flexibase uses LESS compilation on the fly (when Theme Designer Mode is enabled) allowing some of the settings to make use of the flexibility of LESS.<br><br>As a design decision, the theme colour options have been restricted to the main branding colours used in most bootstrap themes and their lighter/darker variations. These are applied through LESS, but can be overwritten as needed for more specific requirements using custom css.<br><br>One caution when using LESS settings - incorrect CSS will often simply be ignored by the browser, incorrect LESS will cause the entire LESS to fail and the look and feel of the site not to render. If this happens, simply correct or undo your last change and your site should return to normal. I recommend enabling theme changes by url (in <code>Site Admin > Appearance > Themes > Theme Settings</code>) when making changes as you can then fall-back to another theme such as Clean, if your changes should cause problems with your site.';

$string['pagesbscsstitle'] = 'Bootstrap CSS Snippets';
$string['pagesbscssbodya'] = 'These examples are from the bootstrap theme template at <a href="http://getbootstrap.com/examples/theme/">http://getbootstrap.com/examples/theme/</a></p>
<p><strong>Any of these snippets can be copied and reused in your own content within Flexibase.</strong>';

$string['pagescontenttitle'] = 'Useful code snippets';
$string['pagescontenttopbody'] = 'While the full Bootstrap CSS and Components can be found on the appropriate buttons above, this page aims to collect just a few of the more useful ones together in one place for a quick reference and how they can be used in content within the flexibase theme. Note: Becuase flexibase is built around Bootstrap3, some of these features may not work if you then change theme to a Bootstrap2 based theme, or an older theme which has no bootstrap foundation at all.';
$string['pagescontentbuttonstitle'] = 'Adding Buttons';
$string['pagescontentbuttonsbodytop'] = 'Buttons can add visual appeal to certain links and can bring a consistent style between buttons in the main theme and links within your content. Because flexibase is built on bootstrap you can simply use the bootstrap classes to add buttons, such as:';
$string['pagescontentbuttonspre'] = '&lt;a class="btn btn-default" href="#" role="button"&gt;Default&lt;/a&gt;<br>&lt;a class="btn btn-primary" href="#" role="button"&gt;Primary&lt;/a&gt;<br>&lt;a class="btn btn-info" href="#" role="button"&gt;info&lt;/a&gt;<br>&lt;a class="btn btn-success" href="#" role="button"&gt;Success&lt;/a&gt;<br>&lt;a class="btn btn-warning" href="#" role="button"&gt;Warning&lt;/a&gt;<br>&lt;a class="btn btn-danger" href="#" role="button"&gt;Danger&lt;/a&gt;';
$string['pagescontentbuttonsdefault'] = 'Default';
$string['pagescontentbuttonsprimary'] = 'Primary';
$string['pagescontentbuttonsinfo'] = 'Info';
$string['pagescontentbuttonssuccess'] = 'Success';
$string['pagescontentbuttonswarning'] = 'Warning';
$string['pagescontentbuttonsdanger'] = 'Danger';
$string['pagescontentbuttonsbodybottom'] = 'You can apply button classes to other objects, such as &lt;button&gt; or inputs, but links like those above are probably the most common use within teacher created content.';
$string['pagescontentimagestitle'] = 'Controlling Images';
$string['pagescontentimagesbody'] = 'You can control the appearance of images by adding bootstrap classes to them - if you are using the TinyMCE editor, the image insert function allows you to add classes, if you are using Atto (the default editor) you may need to access the html:<br><br>Images in Bootstrap 3 can be made responsive-friendly via the addition of the .img-responsive class.<br><code>&lt;img src="..." class="img-responsive" alt="Responsive image"&gt;</code><br><br>and you can add shapes to an image:';
$string['pagescontentpanelstitle'] = 'Using panels';
$string['pagescontentpanelsbodytop'] = 'These help pages are made up of panels. These can be used to add box-out information in your content for example.';
$string['pagescontentpanelspre'] = '&lt;div class="panel panel-danger"&gt;<br>    &lt;div class="panel-heading"&gt;<br>        &lt;h3 class="panel-title"&gt;your Heading&lt;/h3&gt;<br>    &lt;/div&gt;<br>    &lt;div class="panel-body"&gt;<br>        &lt;p&gt;Your content.&lt;/p&gt;<br>    &lt;/div&gt;<br>&lt;/div&gt;';
$string['pagescontentpanelsbodybottom'] = 'If its a \'one-off\' panel, you could add a css rule such as style="width:200px; float:right" into the initial <code>div class=panel</code> line to create a breakout box panel. Alternatively if you will be using it regularly, you could add a class and create some customcss for styling your own panels (This particular tips page is not intended to cover more advanced topics such as custom styling as these can only be added by the site administrator).<br><br>The class "panel-danger" can be replaced with any of the other standard bootstrap types - panel-primary, panel-success, panel-warning, panel-danger, panel-info or panel-default, for different colour combinations.';
$string['pagescontentfatitle'] = 'Using fontawesome';
$string['pagescontentfabody'] = 'Flexibase is built using fontawesome font based icons, which means you can use font awesome in your own content as well. There is a <a href="https://moodle.org/plugins/filter_fontawesome">font-awesome filter</a> available in the plugins database to avoid going into the html. but if you are not able to install the filter, then you can still use font-awesome icons either via the html, if you want to use some of the more advanced effect, OR for really simple use - just copy and paste the icon you want from the <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/">fontawesome icon page</a>.';
$string['pagescontenttabstitle'] = 'Adding tabs';
$string['pagescontenttabsbodytop'] = 'Tabs can be a very useful way of displaying content within one area and reducing the \'scroll of death\'. They can however be awkward to add if the user is not comfortable using html as there is more to adapt to your own purposes than with, for example, buttons.';
$string['pagescontenttabshome'] = 'Home';
$string['pagescontenttabsprofile'] = 'Profile';
$string['pagescontenttabssetting'] = 'Settings';
$string['pagescontenttabshc'] = 'Content of Home tab';
$string['pagescontenttabspc'] = 'Content of Profile tab';
$string['pagescontenttabssc'] = 'Content of Settings tab';
$string['pagescontenttabsbodybottom'] = 'You can apply button classes to other objects, such as &lt;button&gt; or inputs, but links like those above are probably the most common use within teacher created content.';
$string['pagescontentcarouseltitle'] = 'Carousel';
$string['pagescontentcarouselbodytop'] = 'Although there is a large carousel for the site home page provided in the theme, this may not always be suitable, or an individual teacher may want a slider of content on their own course page. Provided the user is confident enough to use and adapt the html below to add their own text and images (although in fact only the highlighted lines actually need to be adjusted, then a bootstrap carousel slider can be added to any html block or content section label - blocks themselves can then be added to any of the layout regions on the page.';
$string['pagescontentcarouselcapone'] = 'Caption for the first slide';
$string['pagescontentcarouselcaptwo'] = 'Caption for the second slide';
$string['pagescontentcarouselcapthree'] = 'Caption for the third slide';
$string['pagescontentcarouselprev'] = 'Previous';
$string['pagescontentcarouselnxt'] = 'Next';
$string['pagescontentcarouselbodybottom'] = 'You can apply button classes to other objects, such as &lt;button&gt; or inputs, but links like those above are probably the most common use within teacher created content.';
$string['pagescontentcarouselnote'] = '&lt;!-- This line is needed because the flexbox used in flexibase would otherwise adjust the width of the content block used to fit the image, rather than the other way around - either adjust the image sizes used appropriately, or use this wrapper and adjust the width accordingly --&gt;';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
$string['colorheading'] = 'Colour';
