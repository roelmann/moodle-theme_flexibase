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
$string['region-side-teachbtm'] = 'Course Teachers Only';
$string['region-side-creatorbtm'] = 'Course Creators Only';
$string['region-side-alert'] = 'Optional Alert Region';
$string['region-side-modalmain'] = 'PopUp Modal main block region';
$string['region-side-modaltop'] = 'PopUp Modal top block region';
$string['region-side-modalside'] = 'PopUp Modal side block region';

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
$string['favicondesc'] = 'Drag your favicon here to upload it. Note: browsers often cache the favicon, so it may be necessary to clear your browser cache before changes are seen.';

$string['logo'] = 'Main Header Logo';
$string['logodesc'] = 'Please upload your custom logo for the Main Heading here if you want to add it to the header.<br>Normally, the recommended height for this logo is 75px. If your logo is different to that, you may need to add a customcss rule to adjust the height of the header eg. <code>a.logo {height: 100px;}</code>.<br>You can also add customcss to hide the page title using css displayed with this setting e.g. <code>.headerlogo h1 {display:none;}</code>.';

$string['showlogo'] = 'Show Main Header Logo';
$string['showlogodesc'] = 'This setting determines whether the main header logo is displayed on just the front page (and My Dashboard), or throughout the site - Note: If you don\'t want to display a main header logo at all, then leave the above file picker empty.';
$string['showlogofrontonly'] = 'Front page only';
$string['showlogoeverywhere'] = 'All pages';

$string['minilogo'] = 'Top Bar Logo';
$string['minilogodesc'] = 'Instead of (or as well as) the main header logo, you can add a mini logo to the top branding bar. This icon should be no more than 30px high and if one is added it will override any font-awesome icon added to the top branding bar in the setting below.';

$string['falogo'] = 'Top Bar FontAwesome Icon';
$string['falogodesc'] = 'A font-awesome icon will only be displayed if no top bar logo image is uploaded. The default image of \'home\' will be used if no other icon is identified in this setting. However, if no mini-logo is added above, and \'o\' is added in this setting, then no top bar logo or icon will display.<br />A full list of FontAwesome icons can be found at http://fontawesome.io/icons/';

$string['headerbg'] = 'A site header background image';
$string['headerbgdesc'] = 'This setting allows a header background image to be displayed throughout the site - although it will be overridden on course pages if course header images are also used. The image should be approximately 1200px x 75px, although this may vary with the expected screen size of the majority of your users, or your institutional branding design.<br>No default image is added to this setting, although there are several example images in the theme pix folder.';

$string['topbarcolour'] = 'Top NavBar colour';
$string['topbarcolourdesc'] = 'Rather than setting the actual colour, this determines whether the main branding colours, or their inverse, are used.';
$string['menunavbarcolour'] = 'Main Menu NavBar colour';
$string['menunavbarcolourdesc'] = 'Rather than setting the actual colour, this determines whether the main branding colours, or their inverse, are used.';
$string['default'] = 'default';
$string['inverse'] = 'inverse';

$string['loginbg'] = 'Login Background';
$string['loginbgdesc'] = 'This setting allows you to upload a background image for the login page. The suggested image size is around 1200x800px, although this may vary with your expected user screen size, or institutional branding design.';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'The customcss setting box effictively allows you full control over any and all css within the theme as this setting can override everything within the theme styles, including those items set in other areas of the settings pages. It is worth noting that the Flexibase theme also has a customLESS setting (see the additional LESS page) which allows you to utilise LESS as well as the CSS.';

// Brand Colour Settings.
$string['lessbrandsettings'] = 'Main Brand Colours';
$string['lessbrandsub'] = 'Main Brand Colours';
$string['lessbranddesc'] = 'Main colours for the theme - These are the key colours that everything else is built from.';
$string['brandprimary'] = 'Brand Primary';
$string['brandprimarydesc'] = 'Your main brand colour';
$string['brandsuccess'] = 'Brand Success';
$string['brandsuccessdesc'] = 'Brand colour for succesful alerts, postive panels, buttons, etc';
$string['brandinfo'] = 'Brand info';
$string['brandinfodesc'] = 'Brand colour information alerts and panels, etc';
$string['brandwarning'] = 'Brand Warning';
$string['brandwarningdesc'] = 'Brand colour for warning alerts and panels, etc';
$string['branddanger'] = 'Brand Danger';
$string['branddangerdesc'] = 'Brand colour for danger alerts and panels, etc';
$string['black'] = 'Black';
$string['blackdesc'] = 'Black setting - Default will be #000, but this can be adapted if there is a need to adjust contrast levels';
$string['white'] = 'White';
$string['whitedesc'] = 'White setting - Default will be #fff, but this can be adapted if there is a need to adjust contrast levels';
$string['graybase'] = 'Gray Base';
$string['graybasedesc'] = 'Gray Base setting - This is the colour used to create gray shades. Default will be #000, but this can be adapted if there is a need to adjust contrast levels';
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
$string['customlessdesc'] = 'Whatever LESS rules you add to this textarea will be reflected in every page, making for easier customization of this theme. Flexibase is one of few themes that have these LESS settings and makes use of compiling LESS \'on the fly\' from both the settings above and from this custom LESS box. This setting allows any LESS variable or rule to be overridden in the same way that the customCSS box overrides the theme css. (Note: customcss will override customLESS as the css rules are the alst to be applied).';
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
$string['enablealert'] = 'Enable alert';
$string['enablealertdesc'] = 'Allows the message to be shown. Disabling this setting also allows the content of the alert to be left in place if it may be re-used, but not shown.';
$string['alert1'] = 'First alert';
$string['alert2'] = 'Second alert';
$string['alert3'] = 'Third alert';
$string['alertinfodesc'] = 'Enter the settings for your alert.';
$string['alerttitle'] = 'Title';
$string['alerttitledesc'] = 'Main title/heading for your alert.';
$string['alerttype'] = 'Level';
$string['alerttypedesc'] = 'Set the appropriate alert level/type to best inform your users, Information, Warning, Danger - these levels apply the relevant icon and theme colour to the alerts.';
$string['alerttext'] = 'Alert text';
$string['alerttextdesc'] = 'This is the main text of the alert. Alerts should be kept as short as possible, while maintaining the meaning, in order to ensure that users do read them.';
$string['alert_info'] = 'Information';
$string['alert_warning'] = 'Warning';
$string['alert_general'] = 'Announcement';

// Image bank.
$string['imagebanksettings'] = 'Image Bank';
$string['imagebankheadingsub'] = 'Image Bank settings';
$string['imagebankheadingdesc'] = 'The image bank allows you to store images through the theme settings pages and to enable the use of those images by providing a URL for them.';
$string['numberofimagebankimages'] = 'Number of images in the image bank';
$string['numberofimagebankimages_desc'] = 'Set the number of images you want to store in the bank (upto 16) and then save the page. This will provide a file picker for each of the number of images you have selected.';
$string['imagebankheading'] = 'Image bank';
$string['imagebankheadingsub'] = 'Drag the image you want to use into the file picker for each \'vault\' and save the page.';
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
$string['fontlinkdesc'] = "Find the web link for the font you want to use. This is provided by sites such as google fonts and other online font stores. Copy the entire weblink into this setting. e.g. <code>< link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700italic,500,700' rel='stylesheet' type='text/css'\></code>";
$string['fontfacebody'] = 'Body text font-face';
$string['fontfacebodydesc'] = 'provide the name of the font you want to use for the main body text e.g. Ubuntu or Open Sans.';
$string['fontfamilybody'] = 'Body text font-family';
$string['fontfamilybodydesc'] = 'Serif or sans-serif. This allows a fallback to be used if the main font is not working (e.g. network connection to the web-font is lost).';
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
$string['numberofslides_desc'] = 'Number of slides on the carousel. You can set upto 8 slides.';
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
$string['slideimagedesc'] = 'A file picker to drag your images. Ideally ensure all your images are the same size.';
$string['slidecaption'] = 'Slide caption';
$string['slidecaptiondesc'] = 'Enter the caption text to use for the slide. This is plain text only and does not include html.';
$string['slideurl'] = 'Slide link';
$string['slideurldesc'] = 'Enter the target destination of the slide\'s image link';
$string['captiontextcolour'] = 'Caption text colour';
$string['captiontextcolourdesc'] = 'Colour for the carousel slide caption text. This defaults to white.';
$string['captionbackgroundcolour'] = 'Caption background colour';
$string['captionbackgroundcolourdesc'] = 'Select between a light or dark semi-transparent background.';
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
$string['frontpagerendererdesc'] = 'Control the way that the course boxes on the front page are rendered, with or without the overlay.';
$string['frontpagerendereroption1'] = 'Tiles';
$string['frontpagerendereroption2'] = 'Tiles w/ overlay';
$string['rendereroverlaycolour'] = 'Overlay colour';
$string['rendereroverlaycolourdesc'] = 'The colour of the overlay, when the "Tiles w/ overlay" renderer is selected.';
$string['rendereroverlayfontcolour'] = 'Overlay font colour';
$string['rendereroverlayfontcolourdesc'] = 'The colour of the font, when hovering over a coursebox with "Tiles w/ overlay" renderer enabled.';
$string['frontpagerendererdefaultimage'] = 'Default Front Page course tile image';
$string['frontpagerendererdefaultimagedesc'] = 'The default image to be used for front page course tiles when no course image is found, (applies for Tiles w/ overlay)';
$string['dashboardcoursetileinfo'] = 'Dashboard Coarse listing options';
$string['dashboardcoursetileinfodesc'] = 'Settings for Dashboard course tiles. Note: the default image used for the front page course tiles with overlay is used when course tiles are displayed on the My Dashboard page, along with the overlay colours set for the front page course tiles options.';
$string['dashboardrenderer'] = 'Dashboard Course Listing';
$string['dashboardrendererdesc'] = 'Control the way that the course listing is rendered on the My Dashboard page - as a standard listing or as course tiles.';
$string['dashboardrendereroption1'] = 'Course tiles';
$string['dashboardrendereroption2'] = 'Default listing';
$string['courseheaderdefaultimage'] = 'Default course header image';
$string['courseheaderdefaultimagedesc'] = 'The default image to be used for course header images when no course image is found - if this is left empty, then only courses with a course image in the Course Summary files will have a heading image.';
$string['courseimageheaderoption'] = 'Course Header Images';
$string['courseimageheaderoptiondesc'] = 'Configure the way the images are used for course headers. Select no image, image as a header background or image as a separate image at the top of the course page.';
$string['courseimageheaderoption1'] = 'Course image as a header banner';
$string['courseimageheaderoption2'] = 'Course image as a separate image';
$string['courseimageheaderoption3'] = 'No course header image';
$string['coursepageimagesinfo'] = 'Course Page Images';
$string['coursepageimagesinfodesc'] = 'Settings for Course Page header images';
$string['courseheaderimageheight'] = 'Course Header image height';
$string['courseheaderimageheightdesc'] = 'Set the height for any images used as header banners (recommended height 150-175px)<br>Note: If you set this to less than 125px, you may also need to alter the font-size on the course grade to bring it to a single line (add <code>.courseheadergradepercentage table tbody tr:last-of-type .column-itemname, .courseheadergradepercentage table tbody tr:last-of-type .column-percentage {font-size:120%;}</code> to your customcss.';
$string['courseboxactivitynotice'] = 'Activity<br>Notices';

//promoted courses Bottom
$string['promotedtitledefault'] = 'Featured courses';
$string['promotedtitledesc'] = 'Please give the Promoted courses block title,
either language key or Text.For ex: lang:display or Display';
$string['pcourseenable'] = 'Enable admin set promoted courses slider';
$string['pcoursetagenable'] = 'Enable Tagged recommended courses slider';
$string['pcoursemyenable'] = 'Enable My courses slider';

$string['pcourses'] = 'Featured Courses';
$string['pcoursesdesc'] = 'LIMIT=9 You cannot enter more than 9 course ids. Please give the featured courses id should separated by comma.';
$string['promotedcoursesheading'] = 'Featured Courses Slider';
$string['title'] = 'Title';
$string['promotedlinktext'] = 'View More Courses Text';
$string['promotedlinktext_desc'] = 'This provides an option to link to a course category to show more courses.  Enter a URL below.';
$string['promotedlink'] = 'View More Courses URL';
$string['promotedlink_desc'] = 'Enter a URL to one of your course catagories.  This is displayed next to the featured courses title.';
$string['settingpromotedlinktext'] = 'View More Courses';
$string['settingpromotedlink'] = $CFG->wwwroot.'/course/index.php?categoryid=1';
$string['settingfeaturedslider'] = 'Featured Courses';

$string['tagscoursestitle'] = 'Tagged courses recommended for you';
$string['settingcoursestitle'] = 'Promoted courses';
$string['mycoursestitle'] = 'My courses';
$string['promotedcourseslinkdefault'] = 'View all courses';

// Category Icons.
$string['categoryiconheading'] = 'Category icons';
$string['categoryiconheadingsub'] = 'Use icons to represent your categories';
$string['categoryicondesc'] = 'If enabled this will allow you to set icons for each category of course.<br>Note: If category icons are used, then they are given a fixed height suitable for a single line name with a small lower margin, or a two line name. If your categories sometimes have titles longer than this you may want to reset that in your customcss to allow additional space eg. <code>.flexibasecats.panel {height: 230px;}</code>';
$string['categoryiconcategory'] = 'The icon for the category: {$a->category}.';
$string['enablecategoryicon'] = 'Enable category icons';
$string['enablecategoryicondesc'] = 'This will enable category icons to be displayed, but only a default one will be used unless the custom settings is also enabled below.';
$string['usecategoryicon'] = 'Enable category icons';
$string['usecategoryicondesc'] = 'Use custom icons for categories';
$string['defaultcategoryicon'] = 'Default category icon';
$string['defaultcategoryicondesc'] = 'Set a default category icon';
$string['categoryiconsize'] = 'Category icon size';
$string['categoryiconsizedesc'] = 'Set a category icon size';
$string['enablecustomcategoryicon'] = 'Enable custom category icons';
$string['enablecustomcategoryicondesc'] = 'If enabled below this section you will see each category with a customizable option behind each category, please save after enabling and disabling this option.';
$string['categoryiconinfo'] = 'Category Icon';
$string['categoryiconinfodesc'] = ' Custom Category Icon';

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
$string['flexmarketingdesc'] = 'Set whether marketing spots flex with content or are even widths. For example if 3 marketing spots are used and the middle one has more content, then it will \'flex\' so that it is larger than the spots either side.';
$string['flexmktingspots'] = 'Flex with content';
$string['evenmktingspots'] = 'Even width';

$string['stylemarketing'] = 'Style marketing spots';
$string['stylemarketingdesc'] = 'Set whether marketing spots are displayed styled as spots with large icons, or as \'standard\' block styling.';
$string['stylemarketingblocks'] = 'Block style';
$string['stylemarketingspots'] = 'Icon spot style';

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
$string['marketingcontentdesc'] = 'Content to display in the marketing box. Keep it short and sweet. The content of each marketing spot is provided through an html editor, so can include formatted text, images, even bootstrap components such as a small carousel.';
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
$string['showawesomebardesc'] = 'Determines whether the Awesomebar is used at all';
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
$string['awesomebarsettingsdesc'] = 'The "Awesomebar" is the black navigation bar that is fixed to the top of the browser window.<br>These settings relate to the "Awesomebar" and other page navigation.';
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
$string['pageshelplinks'] = 'Help Page Links:';
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

// Bootstrap Examples.
$string['pagesbscsstitle'] = 'Bootstrap CSS Snippets';
$string['pagesbscssbodya'] = 'These examples are from the bootstrap theme template at <a href="http://getbootstrap.com/examples/theme/">http://getbootstrap.com/examples/theme/</a></p>
<p><strong>Any of these snippets can be copied and reused in your own content within Flexibase.</strong>';

// Content Creation.
$string['pagescontenttitle'] = 'Useful code snippets';
$string['pagescontenttopbody'] = 'While the full Bootstrap CSS and Components can be found on the appropriate buttons above, this page aims to collect just a few of the more useful ones together in one place for a quick reference and how they can be used in content within the flexibase theme.<br><strong>Note 1:</strong> Because flexibase is built around Bootstrap3, some of these features may not work if you then change theme to a Bootstrap2 based theme, or an older theme which has no bootstrap foundation at all.<br><strong>Note 2:</strong> If you are using TinyMCE, then this relies on a separate css file, editor.css. The editor.css is not compiled "on the fly" from the LESS settings and so colour and other changes in settings will NOT be reflected in the TinyMCE WYSIWYG editor, although they are reflected in the display of that content on the page itself. The Atto editor works slightly differently and theme changes are picked up by the Atto WYSIWYG editor.';
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

// Customisation.
$string['pagescustomisationtitle'] = 'Theme Customisation for Administrators';
$string['pagescustomisationbody'] = '<strong>Note:</strong> customisations to core code should generally be done through a clone of the theme to avoid issues when upgrading (See more detail on the <a href="adminhelp.php" class="btn btn-info">Admin Help</a> page.';
$string['pagescustompixcoretitle'] = 'Pix_Core Icons';
$string['pagescustompixcorebody'] = 'Flexibase has a set of pix_core icons which are recoloured to match the default colour scheme of the theme. This may not be suitable for everyone, so the pix_core folder contains the same set of svg icons recoloured in separate folders as /blue (the theme default set), /red, /yellow and /green. Simply replace the existing icons with the ones from the chosen colour set if required. If you wish to return to the Moodle default grey icons, then simply delete the pix_core folder and the theme will no longer override the core icons.<br><br>It is possible to create a set of icons with your own colour scheme using tools on the internet and replace the existing ones with your own colour scheme. One way of doing this on a Linux PC is to use a bash command such as <code>grep -rl "2fa4e7" path/to/your/pix_core/folder  | xargs sed -i \'s|2fa4e7|86fb96|g\'</code> Where 2fa4e7 is the blue colour of the existing icons and 86fb96 is the new colour (as HEX values).<br><br>Note: If you do this within flexibase, rather than in your own clone, then it is recommended to keep a separate copy of your recoloured icon set so that you can easily replace it when you upgrade the theme.';
$string['pagescustomblockstitle'] = 'Block Headers';
$string['pagescustomblocksbodya'] = 'Flexibase renders the blocks as panels and uses panel-primary colours to style the blocks. This can be overridden in customLESS settings either for all blocks, or even for individual blocks giving different colours as required. For example:<br><br>All block headers - this could go in customcss rather than customless if prefered.';
$string['pagescustomblocksbodyb'] = 'Targetting the navigation block specifically using its class selector (as written below this would be customLESS, but if a simple background is used as above, then it could go in customcss).';
$string['pagescustomblocksbodyc'] = 'Using LESS variables within customLESS to alter the heading of the calendar block.';
$string['pagescustomcsslesstitle'] = 'LESS/CSS Reference and customisation';
$string['pagescustomcsslessbody'] = 'In order to assist with any CSS or LESS customisation, the full theme CSS and the flexibase theme variables.less and flexibase.less files are also provided as text files in the theme /readmes folder. It is suggested that these are extracted separately to a handy location so that they can be referred to without access to the server files when any front-end customisation is being carried out.<br><br>Because LESS is compiled \'on-the-fly\', use of Theme Designer Mode can make page renderering very slow indeed. This is expected and is not an issue when TDM is disabled and all generated css is cached. One other point to note with regard to customising LESS is that, while errors in CSS are often ignored, or have unexpected visually results, errors in LESS will cause the compilation to fail and no style to be applied to the site at all. In this case undo your last changes and the site should return to normal. This is one of the reasons why the LESS files have been made available as reference text documents, to assist in reducing potential errors in any customisations.<br><br>When doing any theme customisation, whether to code or to settings, t is also recommended to ensure the general theme setting \'Allow Theme Changes in URL\' is enabled. This will allow you to fall back to the Clean theme in the unlikely event of your changes causing flexibase to fail.';

// Layouts.
$string['pageslayoutstitle'] = 'Layouts and Regions';
$string['pageslayoutsadmintitle'] = 'Layouts - for administrators';
$string['pageslayoutsadminhead'] = 'Layouts - for administrators';
$string['pageslayoutsadminbody'] = 'Flexibase has 5 different selectable layouts for 4 of the main page types.<br><br>These layouts can be applied to the default page, front page, course page or my home page. One additional note is that the two layouts with single side bars, so in fact use both side-pre and side-post, but they display side-post below side-pre in a single visual region. While no \'content only\' layout is provided, this can be achieved easily by removing all blocks from all regions - the main content space will expand to fill the entire page.';
$string['pageslayoutsregionstitle'] = 'Regions - for content creators';
$string['pageslayoutsregionshead'] = 'Regions - for content creators';
$string['pageslayoutsregionsbody'] = 'As shown in the diagrams, Flexibase also has a range of regions to hold content blocks. Those blocks can be the predefined blocks (Turn Editing On > Add a Block) or from that list you can add an HTML block which allows you to add your own content to any region being used on the page. As a design tip - the number of regions is provided to allow flexibility, it is not anticipated that most sites will use every region on any single page. While this may be appropriate in a very few cases, it is likely to create an overly busy look to the page and distract from the content in the vast majority of circumstances.';
$string['pagesadditionalregionstitle'] = 'Regions - Additional special purpose regions';
$string['pagesadditionalregionshead'] = 'Regions - Additional special purpose regions';
$string['pagesadditionalregionsbody'] = 'Four additional regions have been added to the theme.<br /><strong>Site Administrator Only</strong> - This region allows the Administrator to add blocks in a region that will not be visible to other users. e.g. Admin Bookmarks.<br /><strong>Course Creators Only</strong> - Allows blocks (e.g. meassages within an HTML block) to be shown only to people with the site wide Course Creator role.<br /><strong>Course Teachers Only</strong> - Allows blocks to be placed that are only visible to course teachers. e.g. placing a notice in an html block visible site wide to course teachers (similar to setting the role permissions on an individual block, but this applies to the whole region and ensures those blocks are always in the same location)<br /><strong>Alerts</strong> - This is a special region added to the top of the page allowing anyone with course editing rights to add an Alert notice in an html block. Site Alerts remain available through the Theme settings pages, but these can only be accessed by the site administrators and display on the front page and dashboard. This block region can be edited by anyone with those permissions and applies to every page, including courses. This allows an html block to be added to either an individual course or page, or by setting it to appear across the whole site, using the normal block positioning settings. Blocks added to this region have their panel heading hidden when not in editing mode, so they look more like an alert.';
$string['pageslayoutsdiagramstitle'] = 'Layout diagrams';

// Settings Help.
$string['pagessettingstitle'] = 'Settings Pages Help';
$string['pagessettingslead'] = 'Information to help the use of the settings pages in Flexibase. Theme settings pages are only available to site administrators.';
$string['pagessettingsbody'] = 'You will find much of this information displayed with each setting on its own page, but it is presented here in one location for reference and support.';
$string['pagesettingsgenericlead'] = 'In flexibase, all settings which affect LESS or CSS values have a call back which automtically clears the cache. This may affect page load time when you save changes, but avoids the need for theme designer mode or purging caches.';
$string['pagesettingsbrandlead'] = '8 main branding colour settings are provided as colour pickers, although the hex colour value, html recognised text colour name, or rgb codes can also be entered in the text box with each colour picker. The colour settings are the main ones used in bootstrap/bootswatch themes to ensure compatability of other bootswatches are used as a base for redesigning your theme colours. These are the key colours that the theme is built from.<br />Colour pickers are provided for:';
$string['pagesettingsadditionallead'] = 'Additional colours for the theme - These are the secondary colours, usually lighter/darker forms of the primary colours</p><p>These should proably only be adjusted where contrast levels need changing because of the choice of brand colours.<br>These settings have been left as a text field (rather than a colour picker) so that LESS rules can be added (as per the default) but they can also set an html colour name, hex value or rgb/rgba colour value.';
$string['pagesettingsbrandbody1'] = 'This settings page also contains the fields for the shades of gray based on the gray-base setting on the Main Brand Colours page';
$string['pagesettingsbrandbody2'] = 'An additional LESS setting for <strong>border radius</strong> is also found on this page as this is used in the LESS variables to also calculate radii for smaller and larger shapes.';
$string['pagessettingslayoutlead'] = 'There are 5 layouts available for your site pages:';
$string['pagessettingslayoutbody'] = 'There are also additional block regions at the top and bottom and within the main content area, giving enormous flexibility without the need to set layout files in the code. These are available on all the page types below and can be used (or not) as required. It is not really expected that anyone will use ALL these block regions on one page as that would probably create a very cluttered page (or require a very large monitor). However, the additional regions are provided to allow as much flexibility as possible in the design and layout of pages, in combination with th eability to adjust the main layout for different page types without needing to access the theme code or alter the config.php.<br>All layouts are designed to be RTL compatible and responsive.<br><br>The pages you can apply these layouts to are:';
$string['pagessettingslayoutdefault'] = 'Default';
$string['pagessettingslayouthome'] = 'Site Front Page';
$string['pagessettingslayoutdash'] = 'My Home/Dashboard';
$string['pagessettingslayoutcourse'] = 'Course Pages';
$string['pagessettingsfontslead'] = 'This settings page allows you to link to upto 6 web-based fonts (eg Google fonts). It also allows you to apply fonts to certain areas of your typography styling and override the default theme ones.';
$string['pagessettingsfontsnumber'] = ' - You can link to upto 6 webfonts. This can easily be extended in the theme code, but before making code changes like that you should consider first the impact of future upgrades (ie follow recommended practice and make code changes in your own clone/child theme) and also whether you really want to have more than 6 fonts (in addition to those web-safe default fonts installed on most computers) within your site design. The setting should default to 0, and you will need to first change that number and save the page. The page refresh will then provide you with the number of Font Link settings that you have chosen to use.';
$string['pagesettingsfontuploads'] = 'Currently, individual font file uploads are not supported although this on on the future roadmap for the theme.';
$string['pagesettingsimagebank'] = 'Image 1, Image 2... ';
$string['pagesettingsimagebankdesc'] = 'As the Image Bank itself is only available to site administrators, it may be worth considering keeping a copy of those URL links somewhere accessible to others who may need to use them (if they are for use by anyone other than the site administrator).';
$string['pagesettingmmoptions'] = 'You can choose to show:';
$string['pagesettingsabblocks'] = 'Because the functionality of these blocks is duplicated by the AwesomeBar, this gives you the option to hide them. As a personal recommendation, I normally leave them shown, but configure them to default into the site administrators region at the bottom of the screen.';
$string['colorheading'] = 'These alerts can be dismissed by the user - for that session, but if the page is refreshed they will reappear. This is deliberate as the alerts are intended for important messages that need to be kept on screen. There are other methods to display pop-up dismissable messages, such as the globalmessage local plugin. Please remember to disable the messages when they are no longer needed.';
$string['pagesettingsalertsdesc2'] = 'Colour';
$string['pagesettingscarouselhead'] = 'Main Carousel Settings';
$string['pagesettingscarouselhead2'] = 'Slide settings';
$string['pagesettingsmarketinghead'] = 'General Marketing Spot Settings';
$string['pagesettingsmarketinghead2'] = 'Marketing Spot settings - Spot1, Spot2...';
$string['pagesettingscourseimagelead'] = 'This settings page controls both the front page course tiles and the course page header images<br><br>The course tiles and header images are set in the course page itself as the course summary file (Course Adminsitration > Edit Settings > Course Summary files. If you set the Site Administration > Appearance > Courses > Course Summary Files Limit to allow more than one file then you can use different images for both the front page course tile (first image) and the course header image (last image).';
$string['pagesettingscategoryhead'] = 'General category icon settings';
$string['pagesettingscategorycustom'] = 'This area will list each of the categories/sub-caetgories available and will allow a custom font awesome icon name to be added for that category. Note: you do not need the \'fa-\' part of the name, just the actual name of the icon, although if you also wish to add other fa effects, you can add those after the icon name and those will need the fa- section.';
$string['pagesettingspresetsocial'] = 'Preset social icons';
$string['pagesettingspresetsocialdesc'] = 'The most common links are provided with set icons, so all you need to do is add your relevant URL. If no URL is provided and the setting is left empty, then the icon will not be displayed, so you only get the icons you want.';
$string['pagesettingscustomsocial'] = 'Custom Social Links';
$string['pagesettingscustomsocialdesc'] = 'There are also three custom links where you can add both a URL and an associated fontawesome icon. This enables you to target institution specific links (e.g. an internal page on an intranet site) or new/regional technologies that have not been applied as part of the theme default list.';
