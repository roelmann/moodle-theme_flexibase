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

namespace theme_flexibase\output\core_user\myprofile;
use \core_user\output\myprofile\category;

defined('MOODLE_INTERNAL') || die();
class renderer extends \core_user\output\myprofile\renderer {

    /**
     * Render a category.
     *
     * @param category $category
     *
     * @return string
     */
    public function render_category(category $category) {
        $classes = $category->classes;
        $titleclass = preg_replace('/\s+/', '', $category->title);
        if (empty($classes)) {
            $return = \html_writer::start_tag('section',
            array('class' => 'node_category  panel panel-info ' . $titleclass));
        } else {
            $return = \html_writer::start_tag('section',
            array('class' => 'node_category  panel panel-info ' . $titleclass . $classes));
        }
        $return .= \html_writer::start_tag('div', array('class' => 'panel-heading'));
        $return .= \html_writer::tag('h3', $category->title);
        $return .= \html_writer::end_tag('div');
        $nodes = $category->nodes;
        if (empty($nodes)) {
            // No nodes, nothing to render.
            return '';
        }
        $return .= \html_writer::start_tag('ul');
        foreach ($nodes as $node) {
            $return .= $this->render($node);
        }
        $return .= \html_writer::end_tag('ul');
        $return .= \html_writer::end_tag('section');
        return $return;
    }
}
