<?php

	global $user;

	if ( contains_role($user,"academy") || contains_role($user,"academy(premium)") ) {

		if ( arg(2) && arg(2) !='edit' ) {
			if ( get_profile_node($user->uid,'academy') ) {
				$p = get_profile_node($user->uid,'academy');
				print "You already have a Academy profile . <a href='/node/$p'>CLICK HERE</a> to visit your profile";
			}
			else {

				$buttons = drupal_render($form['buttons']);

				print drupal_render($form).$buttons;

			}
		}
		else {

				$buttons = drupal_render($form['buttons']);
				print drupal_render($form).$buttons;


		}
	}
	else {

		print "you cannot create parent profile for you as you are not holding the Academy role.";

	}




?>