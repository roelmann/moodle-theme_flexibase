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

require_once($CFG->dirroot."/blocks/navigation/renderer.php");

/**
 * Extends renderer for block navigation
 *
 * @copyright 2009 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class theme_flexibase_block_navigation_renderer extends block_navigation_renderer {
    /**
     * Produces a navigation node for the navigation tree
     *
     * @param array $items
     * @param array $attrs
     * @param int $expansionlimit
     * @param array $options
     * @param int $depth
     * @return string
     */
    protected function navigation_node($items, $attrs=array(), $expansionlimit=null, array $options = array(), $depth=1) {
      global $CFG;
      if ($CFG->version < 2016012100) {

        // Exit if empty, we don't want an empty ul element.
        if (count($items) == 0) {
            return '';
        }
        // Array of nested li elements.
        $lis = array();
        foreach ($items as $item) {
            if (!$item->display && !$item->contains_active_node()) {
                continue;
            }
            $content = $item->get_content();
            $title = $item->get_title();
            $isexpandable = (empty($expansionlimit) || ($item->type > navigation_node::TYPE_ACTIVITY
                    || $item->type < $expansionlimit) || ($item->contains_active_node()
                    && $item->children->count() > 0));
            $isbranch = $isexpandable && ($item->children->count() > 0 || ($item->has_children()
                    && (isloggedin() || $item->type <= navigation_node::TYPE_CATEGORY)));
            // Skip elements which have no content and no action - no point in showing them.
            if (!$isexpandable && empty($item->action)) {
                continue;
            }
            $hasicon = ((!$isbranch || $item->type == navigation_node::TYPE_ACTIVITY
                    || $item->type == navigation_node::TYPE_RESOURCE) && $item->icon instanceof renderable);
            if ($hasicon) {
                $icon = $this->output->render($item->icon);
            } else {
                $icon = '';
            }
            $content = $icon.$content; // Use CSS for spacing of icons.
            if ($item->helpbutton !== null) {
                $content = trim($item->helpbutton).html_writer::tag('span', $content, array('class' => 'clearhelpbutton'));
            }
            if ($content === '') {
                continue;
            }
            $attributes = array();
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            if (is_string($item->action) || empty($item->action) ||
                (($item->type === navigation_node::TYPE_CATEGORY || $item->type === navigation_node::TYPE_MY_CATEGORY) &&
                empty($options['linkcategories']))) {
                $attributes['tabindex'] = '0'; // Add tab support to span but still maintain character stream sequence.
                $content = html_writer::tag('span', $content, $attributes);
            } else if ($item->action instanceof action_link) {
                $link = $item->action;
                $link->text = $icon.$link->text;
                $link->attributes = array_merge($link->attributes, $attributes);
                $content = $this->output->render($link);
                $linkrendered = true;
            } else if ($item->action instanceof moodle_url) {
                $content = html_writer::link($item->action, $content, $attributes);
            }
            // This applies to the li item which contains all child lists too.
            $liclasses = array($item->get_css_type(), 'depth_'.$depth);
            $liexpandable = array();
            if ($item->has_children() && (!$item->forceopen || $item->collapse)) {
                $liclasses[] = 'collapsed';
            }
            // RO Mod - forces branches to be closed on page opening.
            if ($depth > 1) {
                $liclasses[] = 'collapsed';
            }
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
            if ($hasicon) {
                $divclasses[] = 'hasicon';
            }
            if (!empty($item->classes) && count($item->classes) > 0) {
                $divclasses[] = join(' ', $item->classes);
            }
            $divattr = array('class' => join(' ', $divclasses));
            if (!empty($item->id)) {
                $divattr['id'] = $item->id;
            }
            $content = html_writer::tag('p', $content, $divattr);
            if ($isexpandable) {
                $content .= $this->navigation_node($item->children, array(), $expansionlimit, $options, $depth + 1);
            }
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
      } else {
        // Exit if empty, we don't want an empty ul element.
        if (count($items) === 0) {
            return '';
        }

        // Turn our navigation items into list items.
        $lis = array();
        $number = 0;
        foreach ($items as $item) {
            $number++;
            if (!$item->display && !$item->contains_active_node()) {
                continue;
            }
            $content = $item->get_content();
            $title = $item->get_title();

            $isexpandable = (empty($expansionlimit) || ($item->type > navigation_node::TYPE_ACTIVITY || $item->type < $expansionlimit) || ($item->contains_active_node() && $item->children->count() > 0));
            $isbranch = $isexpandable && ($item->children->count() > 0 || ($item->has_children() && (isloggedin() || $item->type <= navigation_node::TYPE_CATEGORY)));

            // Skip elements which have no content and no action - no point in showing them
            if (!$isexpandable && empty($item->action)) {
                continue;
            }

            $hasicon = ((!$isbranch || $item->type == navigation_node::TYPE_ACTIVITY || $item->type == navigation_node::TYPE_RESOURCE) && $item->icon instanceof renderable);

            if ($hasicon) {
                $icon = $this->output->render($item->icon);
                // Because an icon is being used we're going to wrap the actual content in a span.
                // This will allow designers to create columns for the content, as we've done in styles.css.
                $content = $icon . html_writer::span($content, 'item-content-wrap');
            } else {
                $icon = '';
            }

            if ($item->helpbutton !== null) {
                $content = trim($item->helpbutton).html_writer::tag('span', $content, array('class'=>'clearhelpbutton'));
            }

            if ($content === '') {
                continue;
            }

            $nodetextid = 'label_' . $depth . '_' . $number;
            $attributes = array('tabindex' => '-1', 'id' => $nodetextid);
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            if (is_string($item->action) || empty($item->action) ||
                    (($item->type === navigation_node::TYPE_CATEGORY || $item->type === navigation_node::TYPE_MY_CATEGORY) &&
                    empty($options['linkcategories']))) {
                $content = html_writer::tag('span', $content, $attributes);
            } else if ($item->action instanceof action_link) {
                //TODO: to be replaced with something else
                $link = $item->action;
                $link->text = $icon.html_writer::span($link->text, 'item-content-wrap');
                $link->attributes = array_merge($link->attributes, $attributes);
                $content = $this->output->render($link);
            } else if ($item->action instanceof moodle_url) {
                $content = html_writer::link($item->action, $content, $attributes);
            }

            // This applies to the li item which contains all child lists too.
            $liclasses = array($item->get_css_type(), 'depth_'.$depth);

            // Class attribute on the div item which only contains the item content.
            $divclasses = array('tree_item');

            $liexpandable = array();
            $lirole = array('role' => 'treeitem');
            if ($isbranch) {
                $liclasses[] = 'contains_branch';
                if ($depth == 1) {
                    $liexpandable = array(
                        'data-expandable' => 'false',
                        'data-collapsible' => 'false'
                    );
                } else {
                    $liexpandable = array(
                        'aria-expanded' => ($item->has_children() &&
                            (!$item->forceopen || $item->collapse)) ? "false" : "true");
                }
                // RO Mod.
                $liexpandapble = array('aria-expanded' => "false");
                // -------
                if ($item->requiresajaxloading) {
                    $liexpandable['data-requires-ajax'] = 'true';
                    $liexpandable['data-loaded'] = 'false';
                    $liexpandable['data-node-id'] = $item->id;
                    $liexpandable['data-node-key'] = $item->key;
                    $liexpandable['data-node-type'] = $item->type;
                }

                $divclasses[] = 'branch';
            } else {
                $divclasses[] = 'leaf';
            }
            if ($hasicon) {
                // Add this class if the item has an icon, whether it is a branch or not.
                $liclasses[] = 'item_with_icon';
                $divclasses[] = 'hasicon';
            }
            if ($item->isactive === true) {
                $liclasses[] = 'current_branch';
            }
            if (!empty($item->classes) && count($item->classes)>0) {
                $divclasses[] = join(' ', $item->classes);
            }

            // Now build attribute arrays.
            $liattr = array('class' => join(' ', $liclasses)) + $liexpandable + $lirole;
            $divattr = array('class'=>join(' ', $divclasses));
            if (!empty($item->id)) {
                $divattr['id'] = $item->id;
            }

            // Create the structure.
            $content = html_writer::tag('p', $content, $divattr);
            if ($isexpandable) {
                $content .= $this->navigation_node($item->children, array('role' => 'group'), $expansionlimit,
                    $options, $depth + 1);
            }
            if (!empty($item->preceedwithhr) && $item->preceedwithhr===true) {
                $content = html_writer::empty_tag('hr') . $content;
            }
            if ($depth == 1) {
                $liattr['tabindex'] = '0';
            }
            $liattr['aria-labelledby'] = $nodetextid;
            $content = html_writer::tag('li', $content, $liattr);
            $lis[] = $content;
        }

        if (count($lis) === 0) {
            // There is still a chance, despite having items, that nothing had content and no list items were created.
            return '';
        }

        // We used to separate using new lines, however we don't do that now, instead we'll save a few chars.
        // The source is complex already anyway.
        return html_writer::tag('ul', implode('', $lis), $attrs);
      }
    }
}
