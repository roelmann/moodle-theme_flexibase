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
 * Flexibase theme with the underlying Bootstrap theme.
 *
 * @package    theme
 * @subpackage flexibase
 * @author     Richard Oelmann - theme specific adaptations from work by GJB
 * @copyright  &copy; 2014-onwards G J Barnard.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
$imageid = required_param('imageid', PARAM_INT);

global $PAGE;
$PAGE->set_context(context_system::instance());

$name = 'imagebankimage'.$imageid;
$setting = theme_flexibase_get_setting($name);
if (empty($setting)) {
    header('HTTP/1.0 404 not found');
    die('Image was not found, sorry.');
} else {
    $imageurl = $PAGE->theme->setting_file_url($name, $name);
    header("Location: ".$imageurl);
}
