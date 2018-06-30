<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package eden
 */

if (! function_exists( 'my_get_posts' ) ) {
	function my_get_posts( $category_name, $number_of_post, $segmeted = true ) {
		$args = array(
			'posts_per_page' => $number_of_post,
			'offset'         => 0,
			'category_name'  => $category_name,
			'orderby'        => 'date',
			'order'          => 'ASC',
			'nopaging'       => true,
		);

		$posts_array = new WP_Query( $args );

		if ($segmeted === false) {
			return $posts_array;
		}

		$posts       = [];
		$temp        = [];
		$counter     = 0;

		if (count( $posts_array->posts ) == 0) {
			return false;
		}

		foreach ($posts_array->posts as $key => $value) {
			array_push($temp, $value);
			array_shift($posts_array->posts);
			$counter++;

			if ($counter == 2) {
				$counter = 0;
				array_push($posts, $temp);
				$temp = [];
			}
		}

		if (count($temp) > 0) {
			array_push($posts, $temp);
		}

		return $posts;
	}
}

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function eden_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'eden_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function eden_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'eden_pingback_header' );
