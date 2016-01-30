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
$thispageurl = new moodle_url('/theme/flexibase/pages/contenthelp.php');
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
<h3>Useful code snippets</h3>
<p>While the full Bootstrap CSS and Components can be found on the appropriate buttons above, this page aims to collect just a few of the more useful ones together in one place for a quick reference and how they can be used in content within the flexibase theme. Note: Becuase flexibase is built around Bootstrap3, some of these features may not work if you then change theme to a Bootstrap2 based theme, or an older theme which has no bootstrap foundation at all.</p>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem buttonspanel">
        <div class="panel-heading">
            <h3 class="panel-title">Adding buttons</h3>
        </div>
        <div class="panel-body">
            <p>Buttons can add visual appeal to certain links and can bring a consistent style between buttons in the main theme and links within your content. Because flexibase is built on bootstrap you can simply use the bootstrap classes to add buttons, such as:</p>
            <a class="btn btn-default" href="#" role="button">Default</a><a class="btn btn-primary" href="#" role="button">Primary</a><a class="btn btn-info" href="#" role="button">Info</a><a class="btn btn-success" href="#" role="button">Success</a><a class="btn btn-warning" href="#" role="button">Warning</a><a class="btn btn-danger" href="#" role="button">Danger</a>
            <p><br></p>
            <pre>&lt;a class="btn btn-default" href="#" role="button"&gt;Default&lt;/a&gt;<br>&lt;a class="btn btn-primary" href="#" role="button"&gt;Primary&lt;/a&gt;<br>&lt;a class="btn btn-info" href="#" role="button"&gt;info&lt;/a&gt;<br>&lt;a class="btn btn-success" href="#" role="button"&gt;Success&lt;/a&gt;<br>&lt;a class="btn btn-warning" href="#" role="button"&gt;Warning&lt;/a&gt;<br>&lt;a class="btn btn-danger" href="#" role="button"&gt;Danger&lt;/a&gt;<br></pre>
            <p>You can apply button classes to other objects, such as &lt;button&gt; or inputs, but links like those above are probably the most common use within teacher created content.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem imagespanel">
        <div class="panel-heading">
            <h3 class="panel-title">Controlling Images</h3>
        </div>
        <div class="panel-body">
            <p>You can control the appearance of images by adding bootstrap classes to them - if you are using the TinyMCE editor, the image insert function allows you to add classes, if you are using Atto (the default editor) you may need to access the html:</p>
            <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the .img-responsive class.<br><code>&lt;img src="..." class="img-responsive" alt="Responsive image"&gt;</code></p>
            <p>and you can add shapes to an image:</p>
            <p><img src="../pix/example_small.png" alt="..." class="img-rounded">  <img src="../pix/example_small.png" alt="..." class="img-circle">  <img src="../pix/example_small.png" alt="..." class="img-thumbnail"></p>
            <p><code>&lt;img src="..." alt="..." class="img-rounded"&gt;</code><br><code>&lt;img src="..." alt="..." class="img-circle"&gt;</code><br><code>&lt;img src="..." alt="..." class="img-thumbnail"&gt;</code></p>
        </div>
    </div>

    <div class="panelgroup flexhelpitem">
    <div class="panel panel-info flexhelpitem contenttippanel">
        <div class="panel-heading">
            <h3 class="panel-title">Using panels</h3>
        </div>
        <div class="panel-body">
            <p>These help pages are made up of panels. These can be used to add box-out information in your content for example.</p>
            <pre>&lt;div class="panel panel-danger"&gt;<br>    &lt;div class="panel-heading"&gt;<br>        &lt;h3 class="panel-title"&gt;your Heading&lt;/h3&gt;<br>    &lt;/div&gt;<br>    &lt;div class="panel-body"&gt;<br>        &lt;p&gt;Your content.&lt;/p&gt;<br>    &lt;/div&gt;<br>&lt;/div&gt;</pre>
            <p>If its a 'one-off' panel, you could add a css rule such as style="width:200px; float:right" into the initial <code>div class=panel</code> line to create a breakout box panel. Alternatively if you will be using it regularly, you could add a class and create some customcss for styling your own panels (This particular tips page is not intended to cover more advanced topics such as custom styling as these can only be added by the site administrator).<br><br>The class "panel-danger" can be replaced with any of the other standard bootstrap types - panel-primary, panel-success, panel-warning, panel-danger, panel-info or panel-default, for different colour combinations.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem fontawesomepanel">
        <div class="panel-heading">
            <h3 class="panel-title">Using fontawesome</h3>
        </div>
        <div class="panel-body">
            <p>Flexibase is built using fontawesome font based icons, which means you can use font awesome in your own content as well. There is a <a href="https://moodle.org/plugins/filter_fontawesome">font-awesome filter</a> available in the plugins database to avoid going into the html. but if you are not able to install the filter, then you can still use font-awesome icons either via the html, if you want to use some of the more advanced effect, OR for really simple use - just copy and paste the icon you want from the <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/">fontawesome icon page</a>.</p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem tabspanel" >
        <div class="panel-heading">
            <h3 class="panel-title">Adding tabs</h3>
        </div>
        <div class="panel-body">
            <p>Tabs can be a very useful way of displaying content within one area and reducing the 'scroll of death'. They can however be awkward to add if the user is not comfortable using html as there is more to adapt to your own purposes than with, for example, buttons.</p>
            <div>
                <!-- Nav tabs - This is your actual tabs across the top-->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                </ul>

                <!-- Tab panes - This is the content of each tab-->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <p>Content of Home tab</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <p>Content of Profile tab</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <p>Content of Settings tab</p>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <pre>&lt;div&gt;
  &lt;!-- Nav tabs - This is your actual tabs across the top--&gt;
  &lt;ul class="nav nav-tabs" role="tablist"&gt;
    &lt;li role="presentation" class="active"&gt;&lt;a href="#home" aria-controls="home" role="tab" data-toggle="tab"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"&gt;Profile&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"&gt;Settings&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;

  &lt;!-- Tab panes - This is the content of each tab--&gt;
  &lt;div class="tab-content"&gt;
    &lt;div role="tabpanel" class="tab-pane active" id="home"&gt;
        &lt;p&gt;Content of Home tab&lt;/p&gt;
    &lt;/div&gt;
    &lt;div role="tabpanel" class="tab-pane" id="profile"&gt;
        &lt;p&gt;Content of Profile tab&lt;/p&gt;
    &lt;/div&gt;
    &lt;div role="tabpanel" class="tab-pane" id="settings"&gt;
        &lt;p&gt;Content of Settings tab&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
            <p>You can apply button classes to other objects, such as &lt;button&gt; or inputs, but links like those above are probably the most common use within teacher created content.</p>
        </div>
    </div>
    </div>
    <div class="panel panel-info flexhelpitem carouselpanel">
        <div class="panel-heading">
            <h3 class="panel-title">Carousel</h3>
        </div>
        <div class="panel-body">
            <p>Although there is a large carousel for the site home page provided in the theme, this may not always be suitable, or an individual teacher may want a slider of content on their own course page. Provided the user is confident enough to use and adapt the html below to add their own text and images (although in fact only the highlighted lines actually need to be adjusted, then a bootstrap carousel slider can be added to any html block or content section label - blocks themselves can then be added to any of the layout regions on the page.</p>
<div style="max-width:600px;margin:auto">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../pix/carousel/slide1a.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
        <p>Caption for the first slide</p>
      </div>
    </div>
    <div class="item">
      <img src="../pix/carousel/slide2a.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
        <p>Caption for the second slide</p>
      </div>
    </div>
    <div class="item">
      <img src="../pix/carousel/slide3a.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
        <p>Caption for the third slide</p>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
            <pre><code>&lt;div style="max-width:600px;margin:auto"&gt;</code> &lt;!-- This line is needed because the flexbox used in flexibase would otherwise adjust the width of the content block used to fit the image, rather than the other way around - either adjust the image sizes used appropriately, or use this wrapper and adjust the width accordingly --&gt;

&lt;div id="carousel-example-generic" class="carousel slide" data-ride="carousel"&gt;
  &lt;!-- Indicators --&gt;
  &lt;ol class="carousel-indicators"&gt;
    &lt;li data-target="#carousel-example-generic" data-slide-to="0" class="active"&gt;&lt;/li&gt;
    &lt;li data-target="#carousel-example-generic" data-slide-to="1"&gt;&lt;/li&gt;
    &lt;li data-target="#carousel-example-generic" data-slide-to="2"&gt;&lt;/li&gt;
  &lt;/ol&gt;

  &lt;!-- Wrapper for slides --&gt;
  &lt;div class="carousel-inner" role="listbox"&gt;
    &lt;div class="item active"&gt;
      <code>&lt;img src="/theme/flexibase/pix/carousel/slide1a.jpg" alt="..."&gt;</code>
      &lt;div class="carousel-caption"&gt;
        <code>&lt;p&gt;Caption for the first slide&lt;/p&gt;</code>
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      <code>&lt;img src="/theme/flexibase/pix/carousel/slide2a.jpg" alt="..."&gt;</code>
      &lt;div class="carousel-caption"&gt;
        <code>&lt;p&gt;Caption for the second slide&lt;/p&gt;</code>
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      <code>&lt;img src="/theme/flexibase/pix/carousel/slide3a.jpg" alt="..."&gt;</code>
      &lt;div class="carousel-caption"&gt;
        <code>&lt;p&gt;Caption for the third slide&lt;/p&gt;</code>
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/div&gt;

  &lt;!-- Controls --&gt;
  &lt;a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"&gt;
    &lt;span class="glyphicon glyphicon-chevron-left" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"&gt;
    &lt;span class="glyphicon glyphicon-chevron-right" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="sr-only"&gt;Next&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
            <p>You can apply button classes to other objects, such as &lt;button&gt; or inputs, but links like those above are probably the most common use within teacher created content.</p>
        </div>
    </div>

</div>
<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
