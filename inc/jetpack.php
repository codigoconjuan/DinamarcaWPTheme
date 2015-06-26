<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Dinamarca
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function dinamarca_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'dinamarca_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function dinamarca_jetpack_setup
add_action( 'after_setup_theme', 'dinamarca_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function dinamarca_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function dinamarca_infinite_scroll_render
