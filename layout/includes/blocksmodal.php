<!-- Modal -->
<div class="modal fade" id="blockmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog blocksmodal" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn btn-primary btn-large" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"><?php echo $PAGE->title ?></h3>
            </div>
            <div class="modal-body">
                <div class="modal-topcontent">
					<?php
					require('radialcoursecompletion.php');
					require('radialcoursegrade.php');

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
