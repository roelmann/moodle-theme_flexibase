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
    <header id="page-header" class="clearfix">
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav" role="navigation" aria-label="breadcrumb"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>

        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
        <div id="region-top">
			<?php
			if ($knownregiontop) {
				echo $OUTPUT->blocks('side-top', "sidetop flexcontainer");
			}
			?>
        </div>
    </header>

    <div id="page-content" class="flexcontainer">
        <div id="region-main" class="flexcontentmain <?php echo $layoutoption; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            ?>
            <div class="maincontentwrap flexcontainer">
            	<div class="maincontentinnerwrap flexcontainer">
				<?php
					echo $OUTPUT->main_content();
					if ($knownregionmainpre) {
						echo $OUTPUT->blocks('side-mainpre', "flexcontentmainpre $layoutoption");
					}
					if ($knownregionmainpost) {
						echo $OUTPUT->blocks('side-mainpost', "flexcontentmainpost $layoutoption");
					}
				?>
				</div>
				<?php
				if ($knownregionmaintop) {
					echo $OUTPUT->blocks('side-maintop', "flexcontentmaintop flexcontainer $layoutoption");
				}
				?>
				<?php
				if ($knownregionbottom) {
					echo $OUTPUT->blocks('side-mainbottom', "flexcontentmainbottom flexcontainer $layoutoption");
				}
			?>
			</div>
			<?php
			echo $OUTPUT->course_content_footer();
			?>
        </div>
		<?php
		if ($hassidepre || $hassidepost) {
		if ($layoutoption=="singlepre") {
			?>
				<aside class="flexcontentpre <?php echo $layoutoption; ?>">
					<?php
					if ($hassidepre) {
						echo $OUTPUT->blocks('side-pre');
					}
					if ($hassidepost) {
						echo $OUTPUT->blocks('side-post');
					}
					?>
				</aside>
			<?php
		} elseif  ($layoutoption=="singlepost") {
			?>
				<aside class="flexcontentpost <?php echo $layoutoption; ?>">
					<?php
					if ($hassidepre) {
						echo $OUTPUT->blocks('side-pre');
									}
					if ($hassidepost) {
						echo $OUTPUT->blocks('side-post');
					}
					?>
				</aside>
			<?php
		} else {
			if ($knownregionpre && $hassidepre) {
				echo $OUTPUT->blocks('side-pre', "flexcontentpre $layoutoption");
			}
			if ($knownregionpost && $hassidepost) {
				echo $OUTPUT->blocks('side-post', "flexcontentpost $layoutoption");
			}
		}
		}
		?>
    </div>
	<div id="region-bottom">
	<?php
	if ($knownregionbottom) {
		echo $OUTPUT->blocks('side-bottom', "sidebottom flexcontainer");
	}
	?>
    </div>

	<?php
	include('includes/footer.php');
	?>
</div>
</body>
</html>
