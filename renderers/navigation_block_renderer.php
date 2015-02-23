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

include_once ($CFG->dirroot."/blocks/navigation/renderer.php");
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
// exit if empty, we don't want an empty ul element
if (count($items)==0) {
return '';
}
// array of nested li elements
$lis = array();
foreach ($items as $item) {
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
} else {
$icon = '';
}
$content = $icon.$content; // use CSS for spacing of icons
if ($item->helpbutton !== null) {
$content = trim($item->helpbutton).html_writer::tag('span', $content, array('class'=>'clearhelpbutton'));
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
$attributes['tabindex'] = '0'; //add tab support to span but still maintain character stream sequence.
$content = html_writer::tag('span', $content, $attributes);
} else if ($item->action instanceof action_link) {
//TODO: to be replaced with something else
$link = $item->action;
$link->text = $icon.$link->text;
$link->attributes = array_merge($link->attributes, $attributes);
$content = $this->output->render($link);
$linkrendered = true;
} else if ($item->action instanceof moodle_url) {
$content = html_writer::link($item->action, $content, $attributes);
}
// this applies to the li item which contains all child lists too
$liclasses = array($item->get_css_type(), 'depth_'.$depth);
$liexpandable = array();
if ($item->has_children() && (!$item->forceopen || $item->collapse)) {
$liclasses[] = 'collapsed';
}
//RO Mod - forces branches to be closed on page opening
if ($depth > 1) {
$liclasses[] = 'collapsed';
}
//-----------------------------------------------------
if ($isbranch) {
$liclasses[] = 'contains_branch';
$liexpandable = array('aria-expanded' => in_array('collapsed', $liclasses) ? "false" : "true");
} else if ($hasicon) {
$liclasses[] = 'item_with_icon';
}
if ($item->isactive === true) {
$liclasses[] = 'current_branch';
}
$liattr = array('class' => join(' ',$liclasses)) + $liexpandable;
// class attribute on the div item which only contains the item content
$divclasses = array('tree_item');
if ($isbranch) {
$divclasses[] = 'branch';
} else {
$divclasses[] = 'leaf';
}
if ($hasicon) {
$divclasses[] = 'hasicon';
}
if (!empty($item->classes) && count($item->classes)>0) {
$divclasses[] = join(' ', $item->classes);
}
$divattr = array('class'=>join(' ', $divclasses));
if (!empty($item->id)) {
$divattr['id'] = $item->id;
}
$content = html_writer::tag('p', $content, $divattr);
if ($isexpandable) {
$content .= $this->navigation_node($item->children, array(), $expansionlimit, $options, $depth+1);
}
if (!empty($item->preceedwithhr) && $item->preceedwithhr===true) {
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
}
include_once ($CFG->dirroot."/blocks/settings/renderer.php");
class theme_flexibase_block_settings_renderer extends block_settings_renderer {
protected function navigation_node(navigation_node $node, $attrs=array()) {
$items = $node->children;
// exit if empty, we don't want an empty ul element
if ($items->count()==0) {
return '';
}
// array of nested li elements
$lis = array();
foreach ($items as $item) {
if (!$item->display) {
continue;
}
$isbranch = ($item->children->count()>0 || $item->nodetype==navigation_node::NODETYPE_BRANCH);
$hasicon = (!$isbranch && $item->icon instanceof renderable);
if ($isbranch) {
$item->hideicon = true;
}
$content = $this->output->render($item);
// this applies to the li item which contains all child lists too
$liclasses = array($item->get_css_type());
$liexpandable = array();
//RO Mod - forces branches to be closed on page opening
// if (!$item->forceopen || (!$item->forceopen && $item->collapse) || ($item->children->count()==0 && $item->nodetype==navigation_node::NODETYPE_BRANCH)) {
// $liclasses[] = 'collapsed';
// }
$liclasses[] = 'collapsed';
//-----------------------------------------------------
if ($isbranch) {
$liclasses[] = 'contains_branch';
$liexpandable = array('aria-expanded' => in_array('collapsed', $liclasses) ? "false" : "true");
} else if ($hasicon) {
$liclasses[] = 'item_with_icon';
}
if ($item->isactive === true) {
$liclasses[] = 'current_branch';
}
$liattr = array('class' => join(' ',$liclasses)) + $liexpandable;
// class attribute on the div item which only contains the item content
$divclasses = array('tree_item');
if ($isbranch) {
$divclasses[] = 'branch';
} else {
$divclasses[] = 'leaf';
}
if (!empty($item->classes) && count($item->classes)>0) {
$divclasses[] = join(' ', $item->classes);
}
$divattr = array('class'=>join(' ', $divclasses));
if (!empty($item->id)) {
$divattr['id'] = $item->id;
}
$content = html_writer::tag('p', $content, $divattr) . $this->navigation_node($item);
if (!empty($item->preceedwithhr) && $item->preceedwithhr===true) {
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
?>
