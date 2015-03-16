<?php
$enable1alert = theme_flexibase_get_setting('enable1alert');
$enable2alert = theme_flexibase_get_setting('enable2alert');
$enable3alert = theme_flexibase_get_setting('enable3alert');

if ($enable1alert || $enable2alert || $enable3alert) {
    $alertinfo = '<span class="fa-stack "><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-info fa-stack-1x fa-inverse"></i></span>';
    $alertwarning = '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span>';
    $alertsuccess = '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i></span>';
}
?>
        <!-- Start Alerts -->

        <!-- Alert #1 -->
        <?php if ($enable1alert) { ?>
            <div class="useralerts alert alert-<?php echo theme_flexibase_get_setting('alert1type') ?>">
                <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times-circle"></i></a>
                <?php
                $alert1icon = 'alert' . theme_flexibase_get_setting('alert1type');
                if ('ltr' === get_string('thisdirection', 'langconfig')) {
					echo $$alert1icon . '<span class="title">' . theme_flexibase_get_setting('alert1title', true) . '</span>' . theme_flexibase_get_setting('alert1text', true);
				} else {
					echo $$alert1icon . theme_flexibase_get_setting('alert1text', true). '<span class="title">' . theme_flexibase_get_setting('alert1title', true) . '</span>';
				} ?>
            </div>
        <?php } ?>

        <!-- Alert #2 -->
        <?php if ($enable2alert) { ?>
            <div class="useralerts alert alert-<?php echo theme_flexibase_get_setting('alert2type') ?>">
                <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times-circle"></i></a>
                <?php
                $alert2icon = 'alert' . theme_flexibase_get_setting('alert2type');
                if ('ltr' === get_string('thisdirection', 'langconfig')) {
					echo $$alert2icon . '<span class="title">' . theme_flexibase_get_setting('alert2title', true) . '</span>' . theme_flexibase_get_setting('alert2text', true);
				} else {
					echo $$alert2icon . theme_flexibase_get_setting('alert2text', true). '<span class="title">' . theme_flexibase_get_setting('alert2title', true) . '</span>';
				} ?>
            </div>
        <?php } ?>

        <!-- Alert #3 -->
        <?php if ($enable3alert) { ?>
            <div class="useralerts alert alert-<?php echo theme_flexibase_get_setting('alert3type') ?>">
                <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times-circle"></i></a>
                <?php
                $alert3icon = 'alert' . theme_flexibase_get_setting('alert3type');
                if ('ltr' === get_string('thisdirection', 'langconfig')) {
					echo $$alert3icon . '<span class="title">' . theme_flexibase_get_setting('alert3title', true) . '</span>' . theme_flexibase_get_setting('alert3text', true);
				} else {
					echo $$alert3icon . theme_flexibase_get_setting('alert3text', true). '<span class="title">' . theme_flexibase_get_setting('alert3title', true) . '</span>';
				} ?>
            </div>
        <?php } ?>
        <!-- End Alerts -->
