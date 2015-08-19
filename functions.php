<?php

/* Register Mozilla Communities logo for setting it into the header */
register_default_headers( array(
	'mozilla-communities' => array(
		'url' => get_stylesheet_directory_uri().'/img/headers/mozilla-communities.png',
		'thumbnail_url' => get_stylesheet_directory_uri().'/img/headers/mozilla-communities-thumbnail.png',
		'description' => 'Mozilla Communities'
	)
 )
);

/* Enqueue OneMozilla original stylesheet */
add_action('wp_enqueue_scripts', 'one_mozilla_css');
function one_mozilla_css() {
	wp_enqueue_style('one_mozilla', get_template_directory_uri().'/style.css');
	wp_enqueue_style('download-button', get_stylesheet_directory_uri().'/download-button.css');
}

/* Remove unnecessary header information */
function remove_header_info() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'remove_header_info' );
/* Remove wp version meta tag and from rss feed */
add_filter('the_generator', '__return_false');
/* Remove wp version param from any enqueued scripts */
function remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, '?ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'remove_wp_ver_css_js', 10, 2 );
add_filter( 'script_loader_src', 'remove_wp_ver_css_js', 10, 2 );

