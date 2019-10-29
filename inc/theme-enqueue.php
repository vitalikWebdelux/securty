<?php
/**
 * security enqueue scripts
 *
 * @package security
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'security_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function security_scripts() {

		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		// Styles
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/main.min.css' );
		wp_enqueue_style( 'sc-styles', get_template_directory_uri() . '/assets/css/main.min.css', array(), $css_version );

		// Scripts
		wp_enqueue_script( 'jquery' );
		
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/custom.min.js' );

		wp_enqueue_script( 'sc-libs', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'sc-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('sc-libs'), $js_version, true );

		// wp_localize_script( 'sc-custom', '$sc_js', array(
		// 	'ajaxurl' => admin_url( 'admin-ajax.php' ),
		// 	'name' => wp_get_current_user()->display_name
		// ));

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'security_scripts' );