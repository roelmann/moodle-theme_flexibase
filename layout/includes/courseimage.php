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
 * Theme Flexibase courseimage includes file.
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
global $CFG, $COURSE;

if (empty($CFG->courseoverviewfileslimit)) {
    return array();
}
require_once($CFG->libdir. '/filestorage/file_storage.php');
require_once($CFG->dirroot. '/course/lib.php');
$fs = get_file_storage();
$context = context_course::instance($COURSE->id);
$files = $fs->get_area_files($context->id, 'course', 'overviewfiles', false, 'filename', false);
if (count($files)) {
    $overviewfilesoptions = course_overviewfiles_options($COURSE->id);
    $acceptedtypes = $overviewfilesoptions['accepted_types'];
    if ($acceptedtypes !== '*') {
        // Filter only files with allowed extensions.
        require_once($CFG->libdir. '/filelib.php');
        foreach ($files as $key => $file) {
            if (!file_extension_in_typegroup($file->get_filename(), $acceptedtypes)) {
                unset($files[$key]);
            }
        }
    }
    if (count($files) > $CFG->courseoverviewfileslimit) {
        // Return no more than $CFG->courseoverviewfileslimit files.
        $files = array_slice($files, 0, $CFG->courseoverviewfileslimit, true);
    }
}

// Display course overview files.
$courseimage = '';
foreach ($files as $file) {
    $isimage = $file->is_valid_image();
    if ($isimage) {
        $courseimage = file_encode_url("$CFG->wwwroot/pluginfile.php",
            '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
            $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
    }
}

// Default image.
$headerimage = $PAGE->theme->setting_file_url('headerbg', 'headerbg');

if ($courseimage == '') {
    $courseimage = $PAGE->theme->setting_file_url('courseimagedefaultheader', 'courseimagedefaultheader');
}

$headerimagetype=(empty($PAGE->theme->settings->courseimageheader)) ? 1 : $PAGE->theme->settings->courseimageheader;

$moodleheaderclass = '';
$courseheaderclass = '';
if ($PAGE->pagelayout == 'course' || $PAGE->pagelayout == 'incourse') {
    if ($headerimagetype == 1) {
        if ($courseimage) {
            $moodleheaderclass = 'withimage';
            $headerimage = $courseimage;
        }
    }
    if ($headerimagetype == 2) {
        if ($courseimage) {
			$moodleheaderclass = '';
            $courseheaderclass = 'withimage';
        }
    }
}
