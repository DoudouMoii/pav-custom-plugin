<?php
/*
Plugin Name: Pav Custom Plugin
Version: 1.0.1
Author: Etienne
License: GPL2
*/

/**
 * Update Checker
 */
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker( 'https://github.com/DoudouMoii/pav-custom-plugin/', __FILE__, 'pav-custom-plugin' );
//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch( 'master' );


function pavcp_footer() {
	echo "Version 1.0.1";
}
add_action( 'wp_footer', 'pavcp_footer' );