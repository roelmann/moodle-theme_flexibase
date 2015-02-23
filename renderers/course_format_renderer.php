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
 * Theme Flexibase renderer file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @parents    Bootstrap
 * @copyright  2014 Bas Brands
 * @credits    Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Many others for non-specific but vital inspirations,
 *             suggestions and support
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . "/course/format/topics/renderer.php");
class theme_flexibase_format_topics_renderer extends format_topics_renderer {
    /**
     * Generate the content to displayed on the left part of a section
     * before course modules are included
     *
     * @param stdClass $section The course_section entry from DB
     * @param stdClass $course The course entry from DB
     * @param bool $onsectionpage true if being printed on a section page
     * @return string HTML to output.
     */
    protected function section_left_content($section, $course, $onsectionpage) {
        $o = $this->output->spacer();

        if ($section->section != 0) {
            // Only in the non-general sections.
            if (course_get_format($course)->is_section_current($section)) {
                $o .= get_accesshide(get_string('currentsection', 'format_'.$course->format));
            }
        }

        return $o;
    }
}

require_once($CFG->dirroot . "/course/format/weeks/renderer.php");
class theme_flexibase_format_weeks_renderer extends format_weeks_renderer {
    /**
     * Generate the content to displayed on the left part of a section
     * before course modules are included
     *
     * @param stdClass $section The course_section entry from DB
     * @param stdClass $course The course entry from DB
     * @param bool $onsectionpage true if being printed on a section page
     * @return string HTML to output.
     */
    protected function section_left_content($section, $course, $onsectionpage) {
        $o = $this->output->spacer();

        if ($section->section != 0) {
            // Only in the non-general sections.
            if (course_get_format($course)->is_section_current($section)) {
                $o .= get_accesshide(get_string('currentsection', 'format_'.$course->format));
            }
        }

        return $o;
    }
}
