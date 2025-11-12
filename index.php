<?php
/*
Plugin Name: Example plugin
Description: We will demonstrate how to make it git-updater compatible
Version:     1.0.5
Author:      Gijs
License:     GPL2 etc
GitHub Plugin URI: gijsbartman/git-updater-test-plugin
Primary Branch: main
*/

add_action( 'admin_notices', 'test_print_notice', 0, 0 );
function set_text() {
	return 'test_2';
}

function test_print_notice() {
	printf(
		'<div class="notice notice-error"><p>%1$s</p></div>',
		set_text()
	);
}

this is error
