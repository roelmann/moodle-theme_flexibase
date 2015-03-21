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
<p>flexibase is based on the Bootstrap3 parent theme (bootstrap), child theme (Cerulean) and the bootswatch Spacelab</p>
<p>However, it uses flexbox layouts for the main layout component areas, rather than bootstrap grids in order to provide an easy way for admins to manage a wide variety of layouts on their site through the theme settings pages, without needing to customise any code.</p><p class="alert-warning"><b>NOTE:</b> These layout options are not applied in browsers which do not support Flexbox at all such as IE 9 and below. Flexbox legacy and prefixed versions are supported.</p>';

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

// Settings.
// Readme.
$string['readme_title'] = 'FlexiBase read-me';
$string['readme_desc'] = 'Please {$a->url} containing more information about the FlexiBase theme.';
$string['readme_click'] = 'click for README.txt';

// General.
$string['genericsettings'] = 'General';
$string['generalheadingsub'] = 'General settings';
$string['generalheadingdesc'] = 'Configure the general settings for the theme here.';
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

// CourseBox rendering.
$string['frontpagecoursesettings'] = 'Frontpage Courses';
$string['frontpagesettingsheading'] = 'Frontpage rendering';
$string['frontpagedesc'] = 'Configure the way that the course boxes are rendered on the frontpage.';
$string['frontpagerenderer'] = 'Frontpage Course Boxes';
$string['frontpagerendererdesc'] = 'Control the way that the coure boxes on the front page are rendered.';
$string['frontpagerendereroption1'] = 'Tiles';
$string['frontpagerendereroption2'] = 'Tiles w/ overlay';
$string['rendereroverlaycolour'] = 'Overlay colour';
$string['rendereroverlaycolourdesc'] = 'The colour of the overlay, when the "Tiles w/ overlay" renderer is selected.';
$string['rendereroverlayfontcolour'] = 'Overlay font colour';
$string['rendereroverlayfontcolourdesc'] = 'The colour of the font, when hovering over a coursebox with "Tiles w/ overlay" renderer enabled.';
$string['frontpagerendererdefaultimage'] = 'Default course image';
$string['frontpagerendererdefaultimagedesc'] = 'The default image to use when no course image is found, (only applies for Tiles w/ overlay)';

// Category Icons.
$string['categoryiconheading'] = 'Category icons';
$string['categoryiconheadingsub'] = 'Use icons to represent your categories';
$string['categoryicondesc'] = 'If enabled this will allow you to set icons for each category of course.';
$string['categoryiconcategory'] = 'The icon for the category: {$a->category}.';
$string['enablecategoryicon'] = 'Enable category icons';
$string['enablecategoryicondesc'] = 'If enabled you will be able to select category icons after clicking "Save changes".';
$string['usecategoryicon'] = 'Enable category icons';
$string['usecategoryicondesc'] = 'Use custom icons for categories';
$string['defaultcategoryicon'] = 'Default category icons';
$string['defaultcategoryicondesc'] = 'Set a default category icon';
$string['enablecustomcategoryicon'] = 'Enable custom category icons';
$string['enablecustomcategoryicondesc'] = 'If enabled below this section you will see each category with a customizable option behind each category, please save after enabling and disabling this option.';
$string['categoryiconinfo'] = 'Set custom category icons';
$string['categoryiconinfodesc'] = 'Enter the name of the icon you wish to use.  List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>. Just enter what is after "fa-".';

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

// Regions.
$string['preandpost'] = 'Pre and Post sidebars';
$string['twopre'] = 'Two sidebars - Pre';
$string['twopost'] = 'Two sidebars - Post';
$string['singlepre'] = 'Single sidebar - Pre';
$string['singlepost'] = 'Single sidebar - Post';

// Colours.
$string['colorheading'] = 'Colour';
$string['colorheadingsub'] = 'Set the colours used in your theme';
$string['colordesc'] = 'Here you can find various settings to change many of the colours found in this theme.';
