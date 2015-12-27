<?php
$hasmarketing = (empty($PAGE->theme->settings->togglemarketing)) ? false : $PAGE->theme->settings->togglemarketing;

if ($hasmarketing == 1) {
    require_once('marketing.php');
} else if ($hasmarketing == 2 && !isloggedin()) {
    require_once('marketing.php');
} else if ($hasmarketing == 3 && isloggedin()) {
    require_once('marketing.php');
}
?>
