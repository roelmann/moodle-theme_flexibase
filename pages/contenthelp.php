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

$PAGE->set_title('Flexibase Content Creation Tips');
$PAGE->set_heading('Flexibase Content Creation Tips');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
require('helpnavbuttons.php');
?>
<h3><?php echo get_string('pagescontenttitle', 'theme_flexibase')?></h3>
<p><?php echo get_string('pagescontenttopbody', 'theme_flexibase')?></p>
<div class="flexhelpcontainer">
    <div class="panel panel-info flexhelpitem buttonspanel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescontentbuttonstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescontentbuttonsbodytop', 'theme_flexibase')?></p>
            <a class="btn btn-default" href="#" role="button">
                <?php echo get_string('pagescontentbuttonsdefault', 'theme_flexibase')?></a>
            <a class="btn btn-primary" href="#" role="button">
                <?php echo get_string('pagescontentbuttonsprimary', 'theme_flexibase')?></a>
            <a class="btn btn-info" href="#" role="button">
                <?php echo get_string('pagescontentbuttonsinfo', 'theme_flexibase')?></a>
            <a class="btn btn-success" href="#" role="button">
                <?php echo get_string('pagescontentbuttonssuccess', 'theme_flexibase')?></a>
            <a class="btn btn-warning" href="#" role="button">
                <?php echo get_string('pagescontentbuttonswarning', 'theme_flexibase')?></a>
            <a class="btn btn-danger" href="#" role="button">
                <?php echo get_string('pagescontentbuttonsdanger', 'theme_flexibase')?></a>
            <br><br>
            <pre>&lt;a class="btn btn-default" href="#" role="button"&gt;
    <?php echo get_string('pagescontentbuttonsdefault', 'theme_flexibase')?>&lt;/a&gt;<br>
&lt;a class="btn btn-primary" href="#" role="button"&gt;
    <?php echo get_string('pagescontentbuttonsprimary', 'theme_flexibase')?>&lt;/a&gt;<br>
&lt;a class="btn btn-info" href="#" role="button"&gt;
    <?php echo get_string('pagescontentbuttonsinfo', 'theme_flexibase')?>&lt;/a&gt;<br>
&lt;a class="btn btn-success" href="#" role="button"&gt;
    <?php echo get_string('pagescontentbuttonssuccess', 'theme_flexibase')?>&lt;/a&gt;<br>
&lt;a class="btn btn-warning" href="#" role="button"&gt;
    <?php echo get_string('pagescontentbuttonsbodytop', 'theme_flexibase')?>&lt;/a&gt;<br>
&lt;a class="btn btn-danger" href="#" role="button"&gt;
    <?php echo get_string('pagescontentbuttonswarning', 'theme_flexibase')?>&lt;/a&gt;
            </pre>
            <p><?php echo get_string('pagescontentbuttonsdanger', 'theme_flexibase')?></p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem imagespanel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescontentimagestitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescontentimagesbody', 'theme_flexibase')?></p>
            <p><img src="../pix/example_small.png" alt="..." class="img-rounded">
            <img src="../pix/example_small.png" alt="..." class="img-circle">
            <img src="../pix/example_small.png" alt="..." class="img-thumbnail"></p>
            <p><code>&lt;img src="..." alt="..." class="img-rounded"&gt;</code><br>
            <code>&lt;img src="..." alt="..." class="img-circle"&gt;</code><br>
            <code>&lt;img src="..." alt="..." class="img-thumbnail"&gt;</code></p>
        </div>
    </div>

    <div class="panelgroup flexhelpitem">
    <div class="panel panel-info flexhelpitem contenttippanel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescontentpanelstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescontentpanelsbodytop', 'theme_flexibase')?></p>
            <pre><?php echo get_string('pagescontentpanelspre', 'theme_flexibase')?></pre>
            <p><?php echo get_string('pagescontentpanelsbodybottom', 'theme_flexibase')?></p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem fontawesomepanel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescontentfatitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescontentfabody', 'theme_flexibase')?></p>
        </div>
    </div>
    <div class="panel panel-info flexhelpitem tabspanel" >
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescontenttabstitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescontenttabsbodytop', 'theme_flexibase')?></p>
            <div>
                <!-- Nav tabs - This is your actual tabs across the top-->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            <?php echo get_string('pagescontenttabshome', 'theme_flexibase')?>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            <?php echo get_string('pagescontenttabsprofile', 'theme_flexibase')?>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                            <?php echo get_string('pagescontenttabssetting', 'theme_flexibase')?>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes - This is the content of each tab-->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <p><?php echo get_string('pagescontenttabshc', 'theme_flexibase')?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <p><?php echo get_string('pagescontenttabspc', 'theme_flexibase')?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <p><?php echo get_string('pagescontenttabssc', 'theme_flexibase')?></p>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <pre>&lt;div&gt;
  &lt;!-- Nav tabs - This is your actual tabs across the top--&gt;
  &lt;ul class="nav nav-tabs" role="tablist"&gt;
    &lt;li role="presentation" class="active"&gt;
        &lt;a href="#home" aria-controls="home" role="tab" data-toggle="tab"&gt;
            <?php echo get_string('pagescontenttabshome', 'theme_flexibase')?>
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li role="presentation"&gt;
        &lt;a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"&gt;
            <?php echo get_string('pagescontenttabsprofile', 'theme_flexibase')?>
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li role="presentation"&gt;
        &lt;a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"&gt;
            <?php echo get_string('pagescontenttabssetting', 'theme_flexibase')?>
        &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;

  &lt;!-- Tab panes - This is the content of each tab--&gt;
  &lt;div class="tab-content"&gt;
    &lt;div role="tabpanel" class="tab-pane active" id="home"&gt;
        &lt;p&gt;<?php echo get_string('pagescontenttabshc', 'theme_flexibase')?>&lt;/p&gt;
    &lt;/div&gt;
    &lt;div role="tabpanel" class="tab-pane" id="profile"&gt;
        &lt;p&gt;<?php echo get_string('pagescontenttabspc', 'theme_flexibase')?>&lt;/p&gt;
    &lt;/div&gt;
    &lt;div role="tabpanel" class="tab-pane" id="settings"&gt;
        &lt;p&gt;<?php echo get_string('pagescontenttabssc', 'theme_flexibase')?>&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
            <p><?php echo get_string('pagescontenttabsbodybottom', 'theme_flexibase')?></p>
        </div>
    </div>
    </div>
    <div class="panel panel-info flexhelpitem carouselpanel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo get_string(
                'pagescontentcarouseltitle', 'theme_flexibase')?></h3>
        </div>
        <div class="panel-body">
            <p><?php echo get_string('pagescontentcarouselbodytop', 'theme_flexibase')?></p>
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
        <p><?php echo get_string('pagescontentcarouselcapone', 'theme_flexibase')?></p>
      </div>
    </div>
    <div class="item">
      <img src="../pix/carousel/slide2a.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
        <p><?php echo get_string('pagescontentcarouselcaptwo', 'theme_flexibase')?></p>
      </div>
    </div>
    <div class="item">
      <img src="../pix/carousel/slide3a.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
        <p><?php echo get_string('pagescontentcarouselcapthree', 'theme_flexibase')?></p>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only"><?php echo get_string('pagescontentcarouselprev', 'theme_flexibase')?></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only"><?php echo get_string('pagescontentcarouselnxt', 'theme_flexibase')?></span>
  </a>
</div>
</div>
            <pre><code>&lt;div style="max-width:600px;margin:auto"&gt;</code>
            <?php echo get_string('pagescontentcarouselnote', 'theme_flexibase')?>

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
        <code>&lt;p&gt;<?php echo get_string('pagescontentcarouselcapone', 'theme_flexibase')?>&lt;/p&gt;</code>
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      <code>&lt;img src="/theme/flexibase/pix/carousel/slide2a.jpg" alt="..."&gt;</code>
      &lt;div class="carousel-caption"&gt;
        <code>&lt;p&gt;<?php echo get_string('pagescontentcarouselcaptwo', 'theme_flexibase')?>&lt;/p&gt;</code>
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      <code>&lt;img src="/theme/flexibase/pix/carousel/slide3a.jpg" alt="..."&gt;</code>
      &lt;div class="carousel-caption"&gt;
        <code>&lt;p&gt;<?php echo get_string('pagescontentcarouselcapthree', 'theme_flexibase')?>&lt;/p&gt;</code>
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/div&gt;

  &lt;!-- Controls --&gt;
  &lt;a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"&gt;
    &lt;span class="glyphicon glyphicon-chevron-left" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="sr-only"&gt;<?php echo get_string('pagescontentcarouselprev', 'theme_flexibase')?>&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"&gt;
    &lt;span class="glyphicon glyphicon-chevron-right" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="sr-only"&gt;<?php echo get_string('pagescontentcarouselnxt', 'theme_flexibase')?>&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
            <p><?php echo get_string('pagescontentcarouselbodybottom', 'theme_flexibase')?></p>
        </div>
    </div>

</div>
<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
