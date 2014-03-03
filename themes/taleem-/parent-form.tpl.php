<?php

	global $user;

	if ( contains_role($user,"parent") || contains_role($user,"parent(free)")|| contains_role($user,"parent(premium)") ) {

		if ( arg(2) && arg(2) !='edit' ) {
			if ( get_parent_node($user->uid) ) {
				$p = get_parent_node($user->uid);
				print "You already have a parent profile . <a href='/node/$p'>CLICK HERE</a> to visit your profile";
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

		print "you cannot create parent profile for you as you are not holding the parent role.";

	}




?>