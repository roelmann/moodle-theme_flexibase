<?php
class theme_flexibase_core_renderer extends theme_bootstrapbase_core_renderer {

    /**
     * Output all the blocks in a particular region.
     *
     * @param string $region the name of a region on this page.
     * @return string the HTML to be output.
     */
    public function blocks_for_region($region) {
        global $USER;
        $blockswanted = array();
        $blocks = $this->page->blocks->get_blocks_for_region($region);
        $blockcontents = theme_flexibase_block_manager::get_filtered_content($this->page->blocks, $this, $region);
        $lastblock = null;
        $zones = array();
        foreach ($blocks as $block) {
            $zones[] = $block->title;
        }
        $output = '';

        foreach ($blockcontents as $bc) {
            if ($bc instanceof block_contents) {
                // Skip settings and/or navigation blocks as per flexibase theme settings.
                $skipsettings = $this->page->theme->settings->hidesettingsblock || !empty($USER->profile['flexibaseSkipSettingsBlock']);
                $skipnavigation = $this->page->theme->settings->hidenavigationblock || !empty($USER->profile['flexibaseSkipNavigationBlock']);
                $skipblock = $skipsettings && substr($bc->attributes['class'], 0, 15) == 'block_settings ';
                $skipblock = $skipblock || ($skipnavigation && substr($bc->attributes['class'], 0, 17) == 'block_navigation ');
                if (!$skipblock) {
                    $output .= $this->block($bc, $region);
                    $lastblock = $bc->title;
                }
            } else if ($bc instanceof block_move_target) {
                $output .= $this->block_move_target($bc, $zones, $lastblock);
            } else {
                throw new coding_exception('Unexpected type of thing (' . get_class($bc) . ') found in list of block contents.');
            }
        }
        return $output;
    }
}
