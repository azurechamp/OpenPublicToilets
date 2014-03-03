<?php

	global $user;

	if ( contains_role($user,"college") || contains_role($user,"college(premium)") ) {

		if ( arg(2) && arg(2) !='edit' ) {
			if ( get_profile_node($user->uid,'college') ) {
				$p = get_profile_node($user->uid,'college');
				print "You already have a College profile . <a href='/node/$p'>CLICK HERE</a> to visit your profile";
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

		print "you cannot create parent profile for you as you are not holding the College role.";

	}




?>