<?php

	global $user;

    function contains_role($user,$role){

		$roles = $user->roles;
		$flag = false;
		foreach ( $roles as $key => $value ) {
			if ( do_plain($value) == do_plain($role) ) {
				$flag = true;
				break;
			}
		}

		return $flag;
    }

    function do_plain($param) {

    	return trim(strtolower($param));

    }

	if ( contains_role($user,"institute") || $user->uid ==1 ) {

		if ( arg(2) && arg(2) !='edit' ) {
			if ( get_institute_profile($user->uid) ) {
				$p = get_institute_profile($user->uid);
				print "You already have a Institute profile . <a href='/node/$p'>CLICK HERE</a> to visit your profile";
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

		print "you cannot create Institute profile for you as you are not holding the institute role.";

	}




?>