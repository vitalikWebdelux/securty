<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package security
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'body_class', 'sc_body_classes' );
if ( ! function_exists( 'sc_body_classes' ) ) {
	/**
	 * Adds custom classes to the array of body classes.
	 */
	function sc_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter( 'body_class', 'sc_adjust_body_class' );
if ( ! function_exists( 'sc_adjust_body_class' ) ) {
	/**
	 * Setup body classes.
	 */
	function sc_adjust_body_class( $classes ) {

		foreach ( $classes as $key => $value ) {
			if ( 'tag' == $value ) {
				unset( $classes[ $key ] );
			}
		}

		return $classes;

	}
}

// Filter custom logo with correct classes.
add_filter( 'get_custom_logo', 'sc_change_logo_class' );
if ( ! function_exists( 'sc_change_logo_class' ) ) {
	/**
	 * Replaces logo CSS class.
	 */
	function sc_change_logo_class( $html ) {

		$html = str_replace( 'class="custom-logo"', 'class="img-fluid"', $html );
		$html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html );
		$html = str_replace( 'alt=""', 'title="Home" alt="logo"', $html );

		return $html;
	}
}

/**
 * Display navigation to next/previous post when applicable.
 */

if ( ! function_exists ( 'sc_post_nav' ) ) {
	function sc_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		<nav class="container navigation post-navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'security' ); ?></h2>
			<div class="row nav-links justify-content-between">
				<?php
				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'security' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'security' ) );
				}
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}
}

if ( ! function_exists( 'sc_pingback' ) ) {
	/**
	 * Add a pingback url auto-discovery header for single posts of any post type.
	 */
	function sc_pingback() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="' . esc_url( get_bloginfo( 'pingback_url' ) ) . '">' . "\n";
		}
	}
}
add_action( 'wp_head', 'sc_pingback' );

if ( ! function_exists( 'sc_mime_types' ) ) {
	function sc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'sc_mime_types');
}





