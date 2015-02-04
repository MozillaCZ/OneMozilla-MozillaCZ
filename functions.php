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

/* Remove information about WordPress and its version from HTML */
remove_action('wp_head', 'wp_generator');
function remove_cssjs_ver( $src ) {
	if(strpos($src, '?ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);

