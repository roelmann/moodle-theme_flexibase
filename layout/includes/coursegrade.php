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
 * Theme Flexibase coursegrade includes file.
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
global $PAGE;
require_once($CFG->libdir.'/gradelib.php');
require_once($CFG->dirroot.'/grade/lib.php');
require_once($CFG->dirroot.'/grade/report/user/lib.php');

$courseid = $COURSE->id;
$userid = $USER->id;
$context = context_course::instance($COURSE->id);
$report = '';

if ($PAGE->pagelayout == 'course') {
if (has_capability('moodle/grade:view', $context) and $COURSE->showgrades) {

    // First make sure we have proper final grades - this must be done before constructing of the grade tree.
    grade_regrade_final_grades($courseid);

    // Return tracking object.
    $gpr = new grade_plugin_return(array('type' => 'report', 'plugin' => 'user', 'courseid' => $courseid, 'userid' => $userid));

    $report = new grade_report_user($courseid, $gpr, $context, $userid);

    if ($report->fill_table()) {
//        echo '<a href="http://localhost/moodle/grade/report/user/index.php?id='.$COURSE->id.'"';
        echo '<a href="'.$CFG->wwwroot.'/grade/report/user/index.php?id='.$COURSE->id.'"';

            echo '<div class="courseheadergradepercentage">';
            echo $report->print_table(true);
            echo '</div>';
        echo '</a>';
    }
}
}
