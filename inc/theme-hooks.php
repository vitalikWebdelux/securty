<?php
/**
 * Custom hooks.
 *
 * @package security
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter('admin_footer_text', 'footer_admin_func');
function footer_admin_func () {
	echo 'Разработка теми: <a href="https://web-deluxe.com" target="_blank">Web-Deluxe</a>. Работает на <a href="http://wordpress.org" target="_blank">WordPress</a>.';
}
