<?php
// This file is part of The Bootstrap 3 Moodle theme
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
 * Theme Flexibase settings help page.
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

// Ref: http://docs.moodle.org/dev/Page_API.
require_once('../../../config.php');
require_once('../lib.php');

$PAGE->set_context(context_system::instance());
$thispageurl = new moodle_url('/theme/flexibase/pages/settingshelp.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

$PAGE->set_title('Flexibase Settings Support');
$PAGE->set_heading('Flexibase Settings Support');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
include ('helpnavbuttons.php');
?>
<p class="lead">Information to help the use of the settings pages in Flexibase. Theme settings pages are only available to site administrators.</p>
<p>You will find much of this information displayed with each setting on its own page, but it is presented here in one location for reference and support.</p>
<p><br></p>
<div>
  <!-- Nav tabs - This is your actual tabs across the top-->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
    <li role="presentation"><a href="#branding" aria-controls="branding" role="tab" data-toggle="tab">Main Branding</a></li>
    <li role="presentation"><a href="#less" aria-controls="less" role="tab" data-toggle="tab">Additional Less</a></li>
    <li role="presentation"><a href="#layout" aria-controls="layout" role="tab" data-toggle="tab">Layout</a></li>
    <li role="presentation"><a href="#fonts" aria-controls="fonts" role="tab" data-toggle="tab">Fonts</a></li>
    <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Image Bank</a></li>
    <li role="presentation"><a href="#menus" aria-controls="menus" role="tab" data-toggle="tab">Menu Settings</a></li>
    <li role="presentation"><a href="#awesome" aria-controls="awesome" role="tab" data-toggle="tab">AwesomeBar</a></li>
    <li role="presentation"><a href="#alerts" aria-controls="alerts" role="tab" data-toggle="tab">User Alerts</a></li>
    <li role="presentation"><a href="#carousel" aria-controls="carousel" role="tab" data-toggle="tab">Carousel Slider</a></li>
    <li role="presentation"><a href="#marketing" aria-controls="marketing" role="tab" data-toggle="tab">Marketing</a></li>
    <li role="presentation"><a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">Course Images</a></li>
    <li role="presentation"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">Category Icons</a></li>
    <li role="presentation"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social Networking</a></li>
  </ul>

  <!-- Tab panes - This is the content of each tab-->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="general">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_generic" class="btn btn-success">General</a>
        <p class="lead">In flexibase, all settings which affect LESS or CSS values have a call back which automtically clears the cache. This may affect page load time when you save changes, but avoids the need for theme designer mode or purging caches.</p>
        <h4>Favicon</h4>
        <p>Drag your favicon here to upload it. Note: browsers often cache the favicon, so it may be necessary to clear your browser cache before changes are seen.</p>
        <h4>Main Header Logo</h4>
        <p>Drag a header logo, if required, into this file-picker box. Normally the recommended height for this logo is 75px. If your logo is different to that, you may need to add a customcss rule to adjust the height of the header eg. <code>a.logo {height: 100px;}</code>. You can also add customcss to hide the page title using css displayed with this setting e.g. <code>.headerlogo h1 {display:none;}</code>.</p>
        <h4>Show Main Header Logo</h4>
        <p>This setting determines whether the main header logo is displayed on just the front page (and My Dashboard), or throughout the site - Note: If you don't want to display a main header logo at all, then leave the above file picker empty.</p>
        <h4>Top Bar Logo</h4>
        <p>Instead of (or as well as) the main header logo, you can add a mini logo to the top branding bar. This icon should be no more than 30px high and if one is added it will override any font-awesome icon added to the top branding bar in the setting below.</p>
        <h4>Top Bar FontAwesome Icon</h4>
        <p>A font-awesome icon will only be displayed if no top bar logo image is uploaded. The default image of 'home' will be used if no other icon is identified in this setting. However, if no mini-logo is added above, and 'o' is added in this setting, then no top bar logo or icon will display.</p>
        <h4>Site header background image</h4>
        <p>This setting allows a header background image to be displayed throughout the site - although it will be overridden on course pages if course header images are also used. The image should be approximately 1200px x 75px, although this may vary with the expected screen size of the majority of your users, or your institutional branding design.<br>No default image is added to this setting, although there are several example images in the theme pix folder.</p>
        <h4>Top NavBar(Branding) colour</h4>
        <h4>Main Menu NavBar colour</h4>
        <p>These settings don't actually set the colour, but determine whether the main branding colours, or their inverse, are used for the top branding bar and the main menu.</p>
        <h4>Login Background</h4>
        <p>This setting allows you to upload a background image for the login page. The suggested image size is around 1200x800px, although this may vary with your expected user screen size, or institutional branding design.</p>
        <h4>Custom CSS</h4>
        <p>The customcss setting box effictively allows you full control over any and all css within the theme as this setting can override everything within the theme styles, including those items set in other areas of the settings pages. It is worth noting that the Flexibase theme also has a customLESS setting (see the additional LESS page) which allows you to utilise LESS as well as the CSS.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="branding">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_lessbrand" class = "btn btn-success">Main Branding</a>
        <h4>Brading Colours</h4>
        <p class ="lead">8 main branding colour settings are provided as colour pickers, although the hex colour value, html recognised text colour name, or rgb codes can also be entered in the text box with each colour picker. The colour settings are the main ones used in bootstrap/bootswatch themes to ensure compatability of other bootswatches are used as a base for redesigning your theme colours. Colour pickers are provided for:</p>
        <ul>
            <li><strong>Brand Primary</strong> - your main brand colour</li>
            <li><strong>Brand Success</strong> - for succesful alerts, postive panels, buttons, etc</li>
            <li><strong>Brand Info</strong> - for information alerts and panels, etc</li>
            <li><strong>Brand Warning</strong> - for warning alerts and panels, etc</li>
            <li><strong>Brand Danger</strong> - for danger alerts and buttons, etc</li>
            <li><strong>Black</strong> - Default black will obviously be black, but this can be altered for contrast purposes</li>
            <li><strong>White</strong> - Default white will obviously be white, but this can be altered for contrast purposes</li>
            <li><strong>Gray Base</strong> - This is the colour used to create gray shades. It defaults as black, but can be altered for contrast purposes</li>
        </ul>
    </div>
    <div role="tabpanel" class="tab-pane" id="less">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_lessadditional" class = "btn btn-success">Additional LESS</a>

        <h4>Additional colours</h4>
        <p class="lead">Additional colours for the theme - These are the secondary colours, usually lighter/darker forms of the primary colours</p><p>These should proably only be adjusted where contrast levels need changing because of the choice of brand colours.<br>These settings have been left as a text field (rather than a colour picker) so that LESS rules can be added (as per the default) but they can also set an html colour name, hex value or rgb/rgba colour value.</p>
        <ul>
            <li><strong>Brand Primary Light</strong></li>
            <li><strong>Brand Primary Lighter</strong></li>
            <li><strong>Brand Primary Lightest</strong></li>
            <li><strong>Brand Success Light</strong></li>
            <li><strong>Brand Info Light</strong></li>
            <li><strong>Brand Warning Light</strong></li>
            <li><strong>Brand Danger Light</strong></li>
        </ul>
        <p>This settings page also contains the fields for the shades of gray based on the gray-base setting on the Main Brand Colours page</p>
        <ul>
            <li><strong>Gray Darker</strong></li>
            <li><strong>Gray Dark</strong></li>
            <li><strong>Gray</strong></li>
            <li><strong>Gray Light</strong></li>
            <li><strong>Gray Lighter</strong></li>
            <li><strong>Gray Lightest</strong></li>
        </ul>
        <p>An additional LESS setting for <strong>border radius</strong> is also found on this page as this is used in the LESS variables to also calculate radii for smaller and larger shapes.</p>
        <h4>Custom LESS</h4>
        <p>Flexibase is one of few themes that have these LESS settings and makes use of compiling LESS 'on the fly' from both the settings and from a custom LESS box. This allows any LESS variable or rule to be overridden in the same way that the customCSS box overrides the theme css. (Note: customcss will override customLESS as the css rules are the alst to be applied).</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="layout">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_layout" class = "btn btn-success">Layout</a>
        <h4>Page Layouts</h4>
        <p class=lead>There are 5 layouts available for your site pages:</p>
        <p><img src="<?php echo $OUTPUT->pix_url('settings/layout1', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout2', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout3', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout4', 'theme'); ?>" alt="Pre and Post Layout" />  <img src="<?php echo $OUTPUT->pix_url('settings/layout5', 'theme'); ?>" alt="Pre and Post Layout" /> </p>
        <p>There are also additional block regions at the top and bottom and within the main content area, giving enormous flexibility without the need to set layout files in the code. These are available on all the page types below and can be used (or not) as required. It is not really expected that anyone will use ALL these block regions on one page as that would probably create a very cluttered page (or require a very large monitor). However, the additional regions are provided to allow as much flexibility as possible in the design and layout of pages, in combination with th eability to adjust the main layout for different page types without needing to access the theme code or alter the config.php.<br>All layouts are designed to be RTL compatible and responsive.</p>
        <p>The pages you can apply these layouts to are:</p>
        <ul>
            <li><strong>Default</strong> - Any pages that do not fall into any of the other standard page layout categories</li>
            <li><strong>Front Page</strong></li>
            <li><strong>My Dashboard/My Home page</strong></li>
            <li><strong>Course Pages</strong></li>
        </ul>
    </div>
    <div role="tabpanel" class="tab-pane" id="fonts">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_fonts" class = "btn btn-success">Fonts</a>
        <h4>Font Settings</h4>
        <p class="lead">This settings page allows you to link to upto 6 web-based fonts (eg Google fonts). It also allows you to apply fonts to certain areas of your typogaphy styling and override the default theme ones.</p>
        <h4>Web Fonts</h4>
        <p><strong>Number of Webfonts</strong> - You can link to upto 6 webfonts. This can easily be extended in the theme code, but before making code changes like that you should consider first the impact of future upgrades (ie follow recommended practice and make code changes in your own clone/child theme) and also whether you really want to have more than 6 fonts (in addition to those web-safe default fonts installed on most computers) within your site design. The setting should default to 0, and you will need to first change that number and save the page. The page refresh will then provide you with the number of Font Link settings that you have chosen to use.</p>
        <p><strong>Font Link</strong> - Find the web link for the font you want to use. This is provided by sites such as google fonts and other online font stores. Copy the entire weblink into this setting. The background code of the theme will split and rebuild this link to ensure seceurity and reduce malicious links being posted.</p>
        <p>Currently, individual font file uploads are not supported although this on on the future roadmap for the theme.</p>
        <h4>Font Usage</h4>
        <p><strong>Body Text Font-face</strong> - provide the name of the font you want to use for the main body text e.g. Ubuntu or Open Sans.</p>
        <p><strong>Body Text Font-family</strong> - serif or sans-serif. This allows a fallback to be used if the main font is not working (e.g. network connection to the web-font is lost).</p>
        <p><strong>Body font size</strong> - Set the default size of body text for your site.</p>
        <p><strong>Header Text Font-face</strong></p>
        <p><strong>Header Text Font-family</strong></p>
        <p>Note: Header font sizes are calculated from the body text size in order to maintain a perspective. They are also preset as bold (font-weight:700).<br>However, once a web-based font is loaded above, it can be used to override any preset values, so that different fonts and weights can be set for each header type as required by using customcss. eg. <code>h3 {font-family:"your font", serif;font-weight:900;font-size:18pt;font-color:red</code> This also applies to any other css selector, giving fine grained control over your typography, while not congesting the settings pages with settings used by very few people.<br>Be aware that changing those font-sizes manually may mean you need to think about adjusting line height (also calculated from the body font-size) and margins in order to maintain an appropriate look and feel for your typography.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="images">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank" class = "btn btn-success">Image Bank</a>
        <h4>Image Bank</h4>
        <p class="lead">The image bank allows you to store images through the theme settings pages and to enable the use of those images by providing a URL for them.</p>
        <h4>Number of images in the bank</h4>
        <p>Set the number of images you want to store in the bank (upto 16) and then save the page. This will provide a file picker for each of the number of images you have selected.</p>
        <h4>Image 1, Image 2...</h4>
        <p>Drag the image you want to use into the file picker for each 'vault' and save the page.</p>
        <p>To use each image, copy and paste the URL provided below each file picker. As the Image Bank itself is only available to site administrators, it may be worth considering keeping a copy of those URL links somewhere accessible to others who may need to use them (if they are for use by anyone other than the site administrator).</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="menus">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank" class = "btn btn-success">Menus</a>
        <h4>Settings related to the main menu and user profile dropdown</h4>
        <p class="lead">These settings can be used to control menu options such as which items appear on the Main Menu Bar or in the User Menu dropdown and where the Main Menu appears. Some of the items may be available to both the main menu and the user dropdown - it is upto the site administrator to determine which location (or both) is required for their site.</p>
        <h4>Main Menu Bar</h4>
        <h4>Main Menu Location</h4>
        <p>You can opt to position the main menu on the awesomebar (the black menu at the top of the page), on the branding bar (the top bar where the user login and dropdown are) or the lower main menu bar itself.<br>It should be noted that, at the moment, the main menu bar (the default location) is the only location which is set up to be fully responsive and to properly collapse and expand the menu on smaller screens. Adding the main menu to the awesomebar, but not enabling the awesomebar, will hide the main menu from view.</p>
        <h4>Main Menu Options</h4>
        <p>You can opt to show:</p>
        <p><strong>Site Home</strong> - This bypasses the redirect to My Dashboard if that is set as the login users home page.</p>
        <p><strong>Dashboard</strong> - with a dropdown of enrolled courses.</p>
        <p><strong>This Course</strong> - With a dropdown of resources and links for the course (if you are currently inside a course).</p>
        <p><strong>Calendar</strong></p>
        <h4>User Menu Options</h4>
        <p>These are the options for the drop down menu when you click the logged in user name. You can select or deslect any of these for display in the User Menu dropdown</p>
        <p><strong>Dashboard</strong></p>
        <p><strong>Calendar</strong></p>
        <p><strong>Profile</strong></p>
        <p><strong>Edit Profile</strong></p>
        <p><strong>Preferences</strong></p>
        <p><strong>Change Password</strong></p>
        <p><strong>Message Preferences</strong></p>
        <p><strong>Blog Preferences</strong></p>
        <p><strong>Badge Preferences</strong></p>
        <p><strong>Messages</strong></p>
        <p><strong>Private Files</strong></p>
        <p><strong>Forum Posts</strong></p>
        <p><strong>Forum Discussions</strong></p>
        <p><strong>My Grades</strong></p>
        <p><strong>My Badges</strong></p>
        <p>The page also includes a custom user menu box, which replaces the one on the main themes settings page. In this box you can add custom menu links in the format <code>name|url|fontawesome icon name</code> e.g. <code>My Profile|/user/profile.php|user</code></p>
    </div>
    <div role="tabpanel" class="tab-pane" id="awesome">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_imagebank" class = "btn btn-success">AwesomeBar</a>
        <h4>Awesomebar</h4>
        <p class="lead">The AwesomeBar is the nickname of the top navigation and settings bar - usually narrow and black - at the top of the page in Flexibase.</p>
        <h4>Show Awesomebar</h4>
        <p>Determines whether the Awesomebar is used at all</p>
        <h4>Hide Settings/Navigation</h4>
        <p>Because the functionality of these blocks is duplicated by the AwesomeBar, this gives you the option to hide them. As a personal recommendation, I normally leave them shown, but configure them to default into the site administrators region at the bottom of the screen.</p>
        <h4>Hide Courses from non-logged-in users</h4>
        <p>Prevents site visitors who are not logged in from seeing the courses menu</p>
        <h4>Populate Courses list</h4>
        <p>On sites with large numbers of courses, generating the full list of courses in the Awesomebar can cause performance issues. Disable this setting (set it to "No") to prevent the list from being generated - the "Courses" node will remain as a quick way to reach the course list.</p>
        <h4>Expand to show activities within sections</h4>
        <p>The AwesomeBar navigation can be expanded to show resources and activities within course sections - this can cause a performance hit in courses with significant amounts of content.</p>
        <h4>Always populate site administration menu</h4>
        <p>Enabling this option will populate the Site Administration menu (if applicable), at the expense of performance.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="alerts">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_alerts" class = "btn btn-success">User Alerts</a>
        <h4>User Alerts</h4>
        <p class="lead">Display important messages to your users on the front page. The alerts settings will display an alert (upto 3) in three possible styles to your users on the Moodle frontpage/dashboard.</p><p>These alerts can be dismissed by the user - for that session, but if the page is refreshed they will reappear. This is deliberate as the alerts are intended for important messages that need to be kept on screen. There are other methods to display pop-up dismissable messages, such as the globalmessage local plugin. Please remember to disable the messages when they are no longer needed.</p>
        <h4>Enable message</h4>
        <p>Allows that message (out of the three) to be shown. Disabling this setting also allows the content of the alert to be left in place if it may be re-used, but not shown.</p>
        <h4>Level</h4>
        <p>Information, Warning, Danger - these levels apply the relevant icon and theme colour to the alerts.</p>
        <h4>Title</h4>
        <p>A short heading for the alert.</p>
        <h4>Alert text</h4>
        <p>This is the main text of the alert. Alerts should be kept as short as possible in order to ensure that users do read them.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="carousel">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_carousel" class = "btn btn-success">Carousel</a>
        <h4>Carousel Slideshow</h4>
        <p class="lead">The carousel slideshow allows upto 8 slides to be displayed on the front page, with an image, caption and url link.</p>
        <h4>Main Carousel Settings</h4>
        <p><strong>Toggle carousel display</strong> - Always, Before login, After login, Never</p>
        <p><strong>Number of slides</strong> - Upto 8</p>
        <p><strong>Hide on Tablets/Hide on Mobiles</strong></p>
        <p><strong>Caption text colour</strong> - normally defaults to white</p>
        <p><strong>Caption background</strong> - select between a light or dark semi-transparent background</p>
        <h4>Slide settings</h4>
        <p><strong>Slide Title</strong></p>
        <p><strong>Slide Image</strong> - a file picker to drag your images. Ideally ensure all your images are the same size.</p>
        <p><strong>Slide Caption</strong> - the main text for the slide. This is plain text only and does not include html.</p>
        <p><strong>Slide Link</strong> - a url link for each slide.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="marketing">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_marketing" class = "btn btn-success">Marketing</a>
        <h4>Marketing Spots</h4>
        <p class="lead">This theme provides the option of enabling upto four "marketing" or "ad" spots just under the slideshow. These allow you to easily identify core information to your users and provide direct links.</p>
        <h4>General Marketing Spot Settings</h4>
        <p><strong>Marketing Spot display</strong> - Always, Before login, After login, Never</p>
        <p><strong>Flex marketing spots</strong> - Set whether marketing spots flex with content or are even widths. For example if 3 marketing spots are used and the middle one has more content, then it will 'flex' so that it is larger than the spots either side.</p>
        <h4>Marketing Spot settings - Spot1, Spot2...</h4>
        <p><strong>Title</strong> - A short heading for the marketing panel</p>
        <p><strong>Icon</strong> - A font awesome icon to include with the heading</p>
        <p><strong>Content</strong> - The content of each marketing spot is provided through an html editor, so can include formatted text, images, even bootstrap components such as a small carousel.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="courses">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_courses" class = "btn btn-success">Course Images</a>
        <h4>Course Images</h4>
        <p class="lead">This settings page controls both the front page course tiles and the course page header images</p>
        <p>The course tiles and header images are set in the course page itself as the course summary file (Course Adminsitration > Edit Settings > Course Summary files. If you set the Site Administration > Appearance > Courses > Course Summary Files Limit to allow more than one file then you can use different images for both the front page course tile (first image) and the course header image (last image).</p>
        <h4>Front Page Course Tile Images</h4>
        <p><strong>Frontpage Course Boxes</strong> - Render the course tile boxes on the front page with or without the overlay.</p>
        <p><strong>Default Front Page course tile image</strong> - A default image for the course tiles if none is set in the course individual settings page.</p>
        <p><strong>Overlay colours</strong> - background of the overlay itself and the font colour to go with it.</p>
        <h4>Course Page Header Images</h4>
        <p><strong>Course Header Images</strong> - Select no image, image as a header background or image as a separate image at the top of the course page.</p>
        <p><strong>Default course header image</strong> - The default image to be used for course header images when no course image is found - if this is left empty, then only courses with a course image in the Course Summary files will have a heading image.</p>
        <p><strong>Course Header image height</strong> - Set the height for any images used as header banners (recommended height 150-175px)<br>Note: If you set this to less than 125px, you may also need to alter the font-size on the course grade to bring it to a single line (add <code>.courseheadergradepercentage table tbody tr:last-of-type .column-itemname, .courseheadergradepercentage table tbody tr:last-of-type .column-percentage {font-size:120%;}</code> to your customcss.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="categories">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_categories" class = "btn btn-success">Category Icons</a>
        <h4>Category Icons</h4>
        <p class="lead">Use icons to represent your categories. If enabled this will allow you to set icons for each category of courses.</p>
        <p>Note: If category icons are used, then they are given a fixed height suitable for a single line name with a small lower margin, or a two line name. If your categories sometimes have titles longer than this you may want to reset that in your customcss to allow additional space eg. <code>.flexibasecats.panel.withicon {height: 230px;}</code></p>
        <h4>General category icon settings</h4>
        <p><strong>Enable category icons</strong> - This will enable category icons to be displayed, but only a default one will be used unless the cosutom settings is also enabled below.</p>
        <p><strong>Default category icons</strong> - Default font awesome icon for categories</p>
        <p><strong>Category icon size</strong> - Icon size for the category tiles</p>
        <p><strong>Enable custom category icons</strong> - This ebales a different icon to be set for each category if required</p>
        <h4>Custom Category icons</h4>
        <p>This area will list each of the categories/sub-caetgories available and will allow a custom font awesome icon name to be added for that category. Note: you do not need the 'fa-' part of the name, just the actual name of the icon, although if you also wish to add other fa effects, you can add those after the icon name and those will need the fa- section.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="social">
        <a href = "<?php echo $CFG->wwwroot ?>/admin/settings.php?section=theme_flexibase_social" class = "btn btn-success">Social Icons</a>
        <h4>Social Icons</h4>
        <p class="lead">This setting page allows you to provide links to your common web and social media pages.</p>
        <h4>Preset social icons</h4>
        <p>The most common links are provided with set icons, so all you need to do is add your relevant URL. If no URL is provided and the setting is left empty, then the icon will not be displayed, so you only get the icons you want.</p>
        <p><strong>Website</strong></p>
        <p><strong>Blog</strong></p>
        <p><strong>Facebook</strong></p>
        <p><strong>Flikr</strong></p>
        <p><strong>Twitter</strong></p>
        <p><strong>Google+</strong></p>
        <p><strong>LinkedIn</strong></p>
        <p><strong>Pinterest</strong></p>
        <p><strong>Instagram</strong></p>
        <p><strong>YouTube</strong></p>
        <p><strong>Vimeo</strong></p>
        <p><strong>Skype</strong></p>
        <h4>Custom Social Links</h4>
        <p>There are also three custom links where you can add both a URL and an associated fontawesome icon. This enables you to target institution specific links (e.g. an internal page on an intranet site) or new/regional technologies that have not been applied as part of the theme default list.</p>
    </div>

  </div>
</div>

<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
