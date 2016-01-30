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
$thispageurl = new moodle_url('/theme/flexibase/pages/bscss.php');
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
<h2>Bootstrap CSS Snippets</h2>
<p>These examples are from the bootstrap theme template at <a href="http://getbootstrap.com/examples/theme/">http://getbootstrap.com/examples/theme/</a></p>
<p><strong>Any of these snippets can be copied and reused in your own content within Flexibase.</strong></p>
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Theme example</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap [But applied within the flexibase theme, so showing you how these elements look in flexibase]. Use it as a starting point to make use of Bootstrap snippets in your own code.</p>
      </div>
      <pre>&lt;div class="jumbotron"&gt;
    &lt;h1&gt;Theme example&lt;/h1&gt;
    &lt;p&gt;This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.&lt;/p&gt;
&lt;/div&gt;</pre>


      <div class="page-header">
        <h1>Buttons</h1>
      </div>
      <p>
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
        <button type="button" class="btn btn-lg btn-danger">Danger</button>
        <button type="button" class="btn btn-lg btn-link">Link</button>
      </p>
      <pre>&lt;button type="button" class="btn btn-lg btn-default"&gt;Default&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-lg btn-link"&gt;Link&lt;/button&gt;</pre>
      <p>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
      </p>
      <pre>&lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;</pre>
      <p>
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
        <button type="button" class="btn btn-sm btn-success">Success</button>
        <button type="button" class="btn btn-sm btn-info">Info</button>
        <button type="button" class="btn btn-sm btn-warning">Warning</button>
        <button type="button" class="btn btn-sm btn-danger">Danger</button>
        <button type="button" class="btn btn-sm btn-link">Link</button>
      </p>
      <pre>&lt;button type="button" class="btn btn-sm btn-default"&gt;Default&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-sm btn-link"&gt;Link&lt;/button&gt;</pre>
      <p>
        <button type="button" class="btn btn-xs btn-default">Default</button>
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
        <button type="button" class="btn btn-xs btn-success">Success</button>
        <button type="button" class="btn btn-xs btn-info">Info</button>
        <button type="button" class="btn btn-xs btn-warning">Warning</button>
        <button type="button" class="btn btn-xs btn-danger">Danger</button>
        <button type="button" class="btn btn-xs btn-link">Link</button>
      </p>
      <pre>&lt;button type="button" class="btn btn-xs btn-default"&gt;Default&lt;/button&gt;
&lt;button type="button" class="btn btn-xs btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-xs btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-xs btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-xs btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-xs btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-xs btn-link"&gt;Link&lt;/button&gt;</pre>

      <div class="page-header">
        <h1>Tables</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <pre>&lt;table class="table"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First Name&lt;/th&gt;
      &lt;th&gt;Last Name&lt;/th&gt;
      &lt;th&gt;Username&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</pre>
        </div>
        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <pre>&lt;table class="table table-striped"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First Name&lt;/th&gt;
      &lt;th&gt;Last Name&lt;/th&gt;
      &lt;th&gt;Username&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</pre>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2">1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@TwBootstrap</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <pre>&lt;table class="table table-bordered"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First Name&lt;/th&gt;
      &lt;th&gt;Last Name&lt;/th&gt;
      &lt;th&gt;Username&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td rowspan="2"&gt;1&lt;/td&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@TwBootstrap&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td colspan="2"&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</pre>
        </div>
        <div class="col-md-6">
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <pre>&lt;table class="table table-condensed"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First Name&lt;/th&gt;
      &lt;th&gt;Last Name&lt;/th&gt;
      &lt;th&gt;Username&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td colspan="2"&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</pre>
        </div>
      </div>


      <div class="page-header">
        <h1>Thumbnails</h1>
      </div>
      <img src="../pix/example_small.png" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
      <pre>&lt;img src="image.png" class="img-thumbnail" alt="alt text here"&gt;</pre>

      <div class="page-header">
        <h1>Labels</h1>
      </div>
      <h1>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h1>
      <h2>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h2>
      <h3>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h3>
      <h4>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h4>
      <h5>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h5>
      <h6>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h6>
      <p>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </p>
      <pre>&lt;span class="label label-default"&gt;Default&lt;/span&gt;
&lt;span class="label label-primary"&gt;Primary&lt;/span&gt;
&lt;span class="label label-success"&gt;Success&lt;/span&gt;
&lt;span class="label label-info"&gt;Info&lt;/span&gt;
&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;
&lt;span class="label label-danger"&gt;Danger&lt;/span&gt;

The different sizes of labels come from being wrapped in headings (h1, h2, h3, h4, h5, h6 or p)</pre>

      <div class="page-header">
        <h1>Badges</h1>
      </div>
      <p>
        <a href="#">Inbox <span class="badge">42</span></a>
      </p>
      <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
      </ul>
      <pre>&lt;p&gt;
  &lt;a href="#"&gt;Inbox &lt;span class="badge"&gt;42&lt;/span&gt;&lt;/a&gt;
&lt;/p&gt;
&lt;ul class="nav nav-pills" role="tablist"&gt;
  &lt;li role="presentation" class="active"&gt;&lt;a href="#"&gt;Home &lt;span class="badge"&gt;42&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a href="#"&gt;Messages &lt;span class="badge"&gt;3&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>

      <div class="page-header">
        <h1>Dropdown menus</h1>
      </div>
      <div class="dropdown theme-dropdown clearfix">
        <a id="dropdownMenu1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li class="active"><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
      <pre>&lt;div class="dropdown theme-dropdown clearfix"&gt;
  &lt;a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenu1"&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li role="separator" class="divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>

      <div class="page-header">
        <h1>Navs</h1>
      </div>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
      </ul>
      <pre>&lt;ul class="nav nav-tabs" role="tablist"&gt;
  &lt;li role="presentation" class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

This displays tabs - but for more information on making working tabs (which need the javascript included in the theme) please see <a class="btn btn-info" href="contenthelp.php">Tips for content creation</a></pre>

      <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
      </ul>
      <pre>&lt;ul class="nav nav-pills" role="tablist"&gt;
  &lt;li role="presentation" class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>

      <div class="page-header">
        <h1>Navbars</h1>
      </div>

      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <pre>&lt;nav class="navbar navbar-default"&gt;
&lt;div class="container"&gt;
  &lt;div class="navbar-header"&gt;
    &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"&gt;
      &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
      &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;span class="icon-bar"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;a class="navbar-brand" href="#"&gt;Project name&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="navbar-collapse collapse"&gt;
    &lt;ul class="nav navbar-nav"&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#about"&gt;About&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;
      &lt;li class="dropdown"&gt;
        &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;ul class="dropdown-menu"&gt;
          &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;li role="separator" class="divider"&gt;&lt;/li&gt;
          &lt;li class="dropdown-header"&gt;Nav header&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;&lt;!--/.nav-collapse --&gt;
&lt;/div&gt;
&lt;/nav&gt;</pre>

      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <pre>&lt;nav class="navbar navbar-inverse"&gt;
&lt;div class="container"&gt;
  &lt;div class="navbar-header"&gt;
    &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"&gt;
      &lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
      &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;span class="icon-bar"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;a class="navbar-brand" href="#"&gt;Project name&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="navbar-collapse collapse"&gt;
    &lt;ul class="nav navbar-nav"&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#about"&gt;About&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;
      &lt;li class="dropdown"&gt;
        &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;ul class="dropdown-menu"&gt;
          &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;li role="separator" class="divider"&gt;&lt;/li&gt;
          &lt;li class="dropdown-header"&gt;Nav header&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;&lt;!--/.nav-collapse --&gt;
&lt;/div&gt;
&lt;/nav&gt;</pre>

      <div class="page-header">
        <h1>Alerts</h1>
      </div>
      <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert alert-info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
      <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
      </div>
      <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
      <pre>&lt;div class="alert alert-success" role="alert"&gt;
  &lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.
&lt;/div&gt;
&lt;div class="alert alert-info" role="alert"&gt;
  &lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important.
&lt;/div&gt;
&lt;div class="alert alert-warning" role="alert"&gt;
  &lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you're not looking too good.
&lt;/div&gt;
&lt;div class="alert alert-danger" role="alert"&gt;
  &lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again.
&lt;/div&gt;</pre>

      <div class="page-header">
        <h1>Progress bars</h1>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"&gt;&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"&gt;&lt;span class="sr-only"&gt;40% Complete (success)&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"&gt;&lt;span class="sr-only"&gt;20% Complete&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"&gt;&lt;span class="sr-only"&gt;60% Complete (warning)&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"&gt;&lt;span class="sr-only"&gt;80% Complete (danger)&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"&gt;&lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
        <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
        <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
      </div>
      <pre>&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-success" style="width: 35%"&gt;&lt;span class="sr-only"&gt;35% Complete (success)&lt;/span&gt;&lt;/div&gt;
  &lt;div class="progress-bar progress-bar-warning" style="width: 20%"&gt;&lt;span class="sr-only"&gt;20% Complete (warning)&lt;/span&gt;&lt;/div&gt;
  &lt;div class="progress-bar progress-bar-danger" style="width: 10%"&gt;&lt;span class='sr-only'&gt;10% Complete (danger)&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>


      <div class="page-header">
        <h1>List groups</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          <pre>&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</pre>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
          <pre>&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item active"&gt;
              Cras justo odio
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href="#" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;
  &lt;a href="#" class="list-group-item"&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href="#" class="list-group-item"&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</pre>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
          <pre>&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item active"&gt;
    &lt;h4 class="list-group-item-heading"&gt;List group item heading&lt;/h4&gt;
    &lt;p class="list-group-item-text"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item"&gt;
    &lt;h4 class="list-group-item-heading"&gt;List group item heading&lt;/h4&gt;
    &lt;p class="list-group-item-text"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item"&gt;
    &lt;h4 class="list-group-item-heading"&gt;List group item heading&lt;/h4&gt;
    &lt;p class="list-group-item-text"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
  &lt;/a&gt;
&lt;/div&gt;</pre>
        </div><!-- /.col-sm-4 -->
      </div>


      <div class="page-header">
        <h1>Panels</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel Default title</h3>
            </div>
            <div class="panel-body">
              <pre>&lt;div class="panel panel-default"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
              Panel content
  &lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Panel Primary title</h3>
            </div>
            <div class="panel-body">
              <pre>&lt;div class="panel panel-primary"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
              Panel content
  &lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Panel Success title</h3>
            </div>
            <div class="panel-body">
              <pre>&lt;div class="panel panel-success"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
              Panel content
  &lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Panel Info title</h3>
            </div>
            <div class="panel-body">
              <pre>&lt;div class="panel panel-info"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
              Panel content
  &lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Panel Warning title</h3>
            </div>
            <div class="panel-body">
              <pre>&lt;div class="panel panel-warning"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
              Panel content
  &lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Panel Danger title</h3>
            </div>
            <div class="panel-body">
              <pre>&lt;div class="panel panel-danger"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
              Panel content
  &lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>


      <div class="page-header">
        <h1>Wells</h1>
      </div>
      <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
      <pre>&lt;div class="well"&gt;
&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;
&lt;/div&gt;</pre>

<?php
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
