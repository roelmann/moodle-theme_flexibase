<?php

//			Awesombar - some settings not used in Flexibase but left in for porting to other themes

    if (!empty($PAGE->theme->settings->showawesomebar) && $PAGE->theme->settings->showawesomebar = 1) {
			$custommenu = $OUTPUT->custom_menu();
			$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

			if (empty($PAGE->layout_options['noawesomebar'])) { ?>
				<div id="awesomebar" class="flexibase-awesome-bar">
					<?php
					if( $this->page->pagelayout != 'maintenance' // Don't show awesomebar if site is being upgraded
						&& !(get_user_preferences('auth_forcepasswordchange') && !session_is_loggedinas()) // Don't show it when forcibly changing password either
						) {
						echo $flexibase->awesome_nav;
//                    	if ($hascustommenu && !empty($flexibase->custommenuinawesomebar) && empty($flexibase->custommenuafterawesomebar)) {
//                      	  echo $custommenu;
//                    	}
						echo $flexibase->awesome_settings;
//                    	if ($hascustommenu && !empty($flexibase->custommenuinawesomebar) && !empty($flexibase->custommenuafterawesomebar)) {
//                      	  echo $custommenu;
//                    	}
						echo $flexibase->topsettings->settings_search_box();
					}
					?>
				</div>
			<?php } 
	} ?>
