<?php

$_tests_dir = getenv('WP_TESTS_DIR');

if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

require_once $_tests_dir . '/includes/functions.php';

function _manually_load_plugin() {
	require_once dirname(__FILE__) . '/../../autoload.php';
	wp_content_connect_autoloader();

	// Kick things off
	\TenUp\ContentConnect\Plugin::instance();
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';

define('PHPUNIT_RUNNER', true);
