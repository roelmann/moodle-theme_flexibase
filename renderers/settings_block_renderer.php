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
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */

require_once($CFG->dirroot."/blocks/settings/renderer.php");
/**
 * Extends settings block renderer
 *
 * @copyright  2010 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class theme_flexibase_block_settings_renderer extends block_settings_renderer {
    /**
     * Extends navigation node from core
     *
     * @copyright  2010 Sam Hemelryk
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */
    protected function navigation_node(navigation_node $node, $attrs=array()) {
        $items = $node->children;
        // Exit if empty, we don't want an empty ul element.
        if ($items->count() == 0) {
            return '';
        }
        // Array of nested li elements.
        $lis = array();
        foreach ($items as $item) {
            if (!$item->display) {
                continue;
            }
            $isbranch = ($item->children->count() > 0 || $item->nodetype == navigation_node::NODETYPE_BRANCH);
            $hasicon = (!$isbranch && $item->icon instanceof renderable);
            if ($isbranch) {
                $item->hideicon = true;
            }
            $content = $this->output->render($item);
            // This applies to the li item which contains all child lists too.
            $liclasses = array($item->get_css_type());
            $liexpandable = array();
            if (!$item->forceopen || (!$item->forceopen && $item->collapse) ||
                  ($item->children->count() == 0 &&
                  $item->nodetype == navigation_node::NODETYPE_BRANCH)) {
                $liclasses[] = 'collapsed';
            }
            // RO Mod - forces branches to be closed on page opening.
            $liclasses[] = 'collapsed';
            // -----------------------------------------------------

            if ($isbranch) {
                $liclasses[] = 'contains_branch';
                $liexpandable = array('aria-expanded' => in_array('collapsed', $liclasses) ? "false" : "true");
            } else if ($hasicon) {
                $liclasses[] = 'item_with_icon';
            }
            if ($item->isactive === true) {
                $liclasses[] = 'current_branch';
            }
            $liattr = array('class' => join(' ', $liclasses)) + $liexpandable;
            // Class attribute on the div item which only contains the item content.
            $divclasses = array('tree_item');
            if ($isbranch) {
                $divclasses[] = 'branch';
            } else {
                $divclasses[] = 'leaf';
            }
            if (!empty($item->classes) && count($item->classes) > 0) {
                $divclasses[] = join(' ', $item->classes);
            }
            $divattr = array('class' => join(' ', $divclasses));
            if (!empty($item->id)) {
                $divattr['id'] = $item->id;
            }
            $content = html_writer::tag('p', $content, $divattr) . $this->navigation_node($item);
            if (!empty($item->preceedwithhr) && $item->preceedwithhr === true) {
                $content = html_writer::empty_tag('hr') . $content;
            }
            $content = html_writer::tag('li', $content, $liattr);
            $lis[] = $content;
        }
        if (count($lis)) {
            return html_writer::tag('ul', implode("\n", $lis), $attrs);
        } else {
            return '';
        }
    }
    /**
     * Extends search form from core
     *
     * @copyright  2010 Sam Hemelryk
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */
    public function search_form(moodle_url $formtarget, $searchvalue) {
        $content = html_writer::start_tag('form',
            array(
                'class' => 'adminsearchform',
                'method' => 'get',
                'action' => $formtarget,
                'role' => 'search',
            )
        );
        $content .= html_writer::start_div('input-group');
        $content .= html_writer::empty_tag('input',
            array(
                'id' => 'adminsearchquery',
                'type' => 'text',
                'name' => 'query',
                'class' => 'form-control',
                'placeholder' => s(get_string('searchinsettings', 'admin')),
                'value' => s($searchvalue),
            )
        );
        $content .= html_writer::start_span('input-group-btn');
        $content .= html_writer::tag('button', s(get_string('go')), array('type' => 'submit', 'class' => 'btn btn-default'));
        $content .= html_writer::end_span();
        $content .= html_writer::end_div();
        $content .= html_writer::end_tag('form');
        return $content;
    }

}
