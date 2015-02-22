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

    if (!empty($PAGE->theme->settings->defaultlayout)) {
        $layoutoption = $PAGE->theme->settings->defaultlayout;
    } else {
        $layoutoption = 'preandpost';
    }

include('includes/preheaderlogic.php');
include('includes/header.php');
?>

<div id="page" class="container-fluid">
	<?php include('includes/breadcrumb.php'); ?>

    <div id="page-content" class="flexcontainer">
        <div id="region-main" class="flexcontentmain <?php echo $layoutoption; ?>">
            <div class="maincontentwrap flexcontainer">
            	<div class="maincontentinnerwrap flexcontainer">
				<?php
					echo $OUTPUT->main_content();
				?>
				</div>
			</div>
        </div>
    </div>
	<?php
	include('includes/footer.php');
	?>
</div>
</body>
</html>
