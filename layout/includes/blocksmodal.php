<?php
// This file is part of The Bootstrap 3 Moodle theme
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
 * Theme Flexibase layout file.
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
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<!-- Modal -->
<div class="modal fade" id="blockmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog blocksmodal" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn btn-primary btn-large" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title"><?php echo $PAGE->title ?></h3>
            </div>
            <div class="modal-body">
                <div class="modal-usercontent">
                    <?php
                    if (isloggedin() ) {
                        echo $OUTPUT->user_picture($USER, array('link' => false, 'size' => 200));
                    }
                    ?>
                    <div class="blockmodallinks">
                        <?php
                        echo $OUTPUT->page_heading_button();
                        $participantslink = $CFG->wwwroot.'/user/index.php?id='.$COURSE->id.'&mode=1';
                        $dashboardlink = $CFG->wwwroot.'my/index.php';
                        $messageslink = $CFG->wwwroot.'message/index.php';
                        ?>
                        <a href=<?php echo $participantslink; ?> class="btn btn-success" title="Participants">
                            <i class="fa-users fa fa-fw"></i>Participants
                        </a>
                        <a href=<?php echo $dashboardlink; ?> class="btn btn-success" title="Dashboard">
                            <i class="fa-dashboard fa fa-fw"></i>My Dashboard
                        </a>
                        <a href=<?php echo $messageslink; ?> class="btn btn-success" title="Messages">
                            <i class="fa-envelope fa fa-fw"></i>My Messages
                        </a>
                    </div>
                    <?php
                    if ($PAGE->pagelayout == 'course' OR $PAGE->pagelayout == 'incourse') {
                        require('radialcoursecompletion.php');
                        require('radialcoursegrade.php');
                    }
                    ?>
                </div>
                <div class="modal-topcontent">
                    <?php
                    if ($hasside['modaltop']) {
                        echo $OUTPUT->blocks('side-modaltop', "flexcontentmodaltop flexcontainer");
                    }
                    ?>
                </div>
                <div class="modal-contentwrapper flexcontainer">
                    <div class="modal-mainregion flexitem">
                        <?php
                        if ($hasside['modalmain']) {
                            echo $OUTPUT->blocks('side-modalmain', "flexcontentmodalmain flexcontainer");
                        }
                        ?>
                    </div>
                    <div class="modal-sideregion flexitem">
                        <?php
                        if ($hasside['modalside']) {
                            echo $OUTPUT->blocks('side-modalside', "flexcontentmodalside flexcontainer");
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
