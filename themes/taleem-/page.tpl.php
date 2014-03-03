<?php

	if ( $node->type == 'parent' ) {
		include 'page-parent.tpl.php';
		return;
	}
	else if ( $node->type == 'child' ) {
		include 'page-child.tpl.php';
		return;
	}
	else if ( $node->type == 'institute' ) {
		include 'page-institute.tpl.php';
		return;
	}
	else {

		include 'page-default.tpl.php';
		return;

	}

?>