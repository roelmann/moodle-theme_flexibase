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
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class theme_flexibase_topsettings_renderer extends plugin_renderer_base {

    public function settings_tree(settings_navigation $navigation) {
        global $CFG;
        $content = $this->navigation_node($navigation, array('class' => 'dropdown  dropdown-horizontal'));
        return $content;
    }
    public function settings_search_box() {
        global $CFG;
        $content = "";
        if (has_capability('moodle/site:config', context_system::instance())) {
            $content .= $this->search_form(new moodle_url("$CFG->wwwroot/$CFG->admin/search.php"),
                    optional_param('query', '', PARAM_RAW));
        }
        $content .= html_writer::empty_tag('br', array('clear' => 'all'));
        return $content;
    }

    public function navigation_tree(global_navigation $navigation) {
        global $CFG;
        $node = $this->navigation_node($navigation, array());
        if (!strlen(trim($node))) {
            return '';
        }
        $content = html_writer::start_tag('ul', array('id' => 'awesomeHomeMenu', 'class' => 'dropdown  dropdown-horizontal'));
        $content .= html_writer::start_tag('li');
        $content .= html_writer::start_tag('span', array('id' => 'awesomeNavMenu'));
        $content .= 'Navigation';
        $content .= html_writer::end_tag('span');
        $content .= $this->navigation_node($navigation, array());
        $content .= html_writer::end_tag('li');
        $content .= html_writer::end_tag('ul');
        return $content;
    }

    protected function navigation_node(navigation_node $node, $attrs=array()) {
        global $CFG, $PAGE;
        static $mainsubnav;
        static $coursessubnav;
        $items = $node->children;
        $hidecourses = (property_exists($PAGE->theme->settings, 'coursesloggedinonly')
                && $PAGE->theme->settings->coursesloggedinonly && !isloggedin());

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
            if ($item->key === 'courses' && $hidecourses) {
                continue;
            }

            // Skip pointless "Current course" node, go straight to its last (sole) child.
            if ($item->key === 'currentcourse') {
                $item = $item->children->last();
            }

            $isbranch = ($item->children->count() > 0 || $item->nodetype == navigation_node::NODETYPE_BRANCH
                    || (property_exists($item, 'isexpandable') && $item->isexpandable));
            $hasicon = (!$isbranch && $item->icon instanceof renderable);

            if ($isbranch) {
                $item->hideicon = true;
            }

            if ($item->action instanceof action_link && $hasicon && !$item->hideicon
                    && (strip_tags($item->action->text) == $item->action->text)) {
                // Icon hasn't already been rendered - render it now.
                $item->action->text = $this->output->render($item->icon) . $item->action->text;
            }

            $content = $this->output->render($item);
            if ($isbranch && $item->children->count() == 0) {
                $expanded = false;
                // Navigation block does this via AJAX - we'll merge it in directly instead.
                if (!empty($CFG->navshowallcourses) && $item->key === 'courses') {
                    if (!$coursessubnav) {
                        // Prepare dummy page for subnav initialisation.
                        $dummypage = new theme_flexibase_dummy_page();
                        $dummypage->set_context($PAGE->context);
                        $dummypage->set_url($PAGE->url);
                        $coursessubnav = new theme_flexibase_expand_navigation($dummypage, $item->type, $item->key);
                        $expanded = true;
                    }
                    $subnav = $coursessubnav;
                } else {
                    if (!$mainsubnav) {
                        // Prepare dummy page for subnav initialisation.
                        $dummypage = new theme_flexibase_dummy_page();
                        $dummypage->set_context($PAGE->context);
                        $dummypage->set_url($PAGE->url);
                        $mainsubnav = new theme_flexibase_expand_navigation($dummypage, $item->type, $item->key);
                        $expanded = true;
                    }
                    $subnav = $mainsubnav;
                }
                $branch = $subnav->find($item->key, $item->type);
                if ($branch === false) {
                    if (!$expanded) {
                        // Re-use subnav so we don't have to reinitialise everything.
                        $subnav->expand($item->type, $item->key);
                    }
                    if (!isloggedin() || isguestuser()) {
                        $subnav->set_expansion_limit(navigation_node::TYPE_COURSE);
                    }
                    $branch = $subnav->find($item->key, $item->type);
                }
                if ($branch !== false) {
                    $content .= $this->navigation_node($branch);
                }
            } else {
                $content .= $this->navigation_node($item);
            }

            if ($isbranch && !(is_string($item->action) || empty($item->action))) {
                $content = html_writer::tag('li', $content, array('class' => 'clickable-with-children'));
            } else {
                $content = html_writer::tag('li', $content);
            }
            $lis[] = $content;
        }

        if (count($lis)) {
            return html_writer::nonempty_tag('ul', implode("\n", $lis), $attrs);
        } else {
            return '';
        }
    }

    public function search_form(moodle_url $formtarget, $searchvalue) {
        global $CFG;

        $content = html_writer::start_tag('form',
                array('class' => 'topadminsearchform', 'method' => 'get', 'action' => $formtarget));
        $content .= html_writer::start_tag('div', array('class' => 'search-box'));
        $content .= html_writer::tag('label', s(get_string('searchinsettings', 'admin')),
                array('for' => 'adminsearchquery', 'class' => 'accesshide'));
        $content .= html_writer::empty_tag('input', array('id' => 'topadminsearchquery',
                'type' => 'text', 'name' => 'query', 'value' => s($searchvalue), 'placeholder' => 'Search Settings...'));
        $content .= html_writer::end_tag('div');
        $content .= html_writer::end_tag('form');

        return $content;
    }

}
