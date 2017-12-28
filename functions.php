<?php
/* Register mobile menu */
register_nav_menu( 'mobile', __( 'Mobile Menu', 'onemozilla' ) );
function one_mozillacz_load_scripts() {
    if ( has_nav_menu( 'mobile' ) ) {
        // Register and load the nav-mobile script
        wp_register_script( 'nav-mobile', get_stylesheet_directory_uri() . '/js/nav-mobile.js', array( 'jquery' ) );
        wp_enqueue_script( 'nav-mobile' );
    }
}
add_action( 'wp_enqueue_scripts', 'one_mozillacz_load_scripts' );

/* Register Mozilla Communities logo for setting it into the header */
register_default_headers( array(
	'mozilla-cz' => array(
		'url' => get_stylesheet_directory_uri().'/img/MozillaCZ-03-400.png',
		'thumbnail_url' => get_stylesheet_directory_uri().'/img/MozillaCZ-03-400.png',
		'description' => 'Mozilla.cz'
	),
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
	wp_enqueue_style('download-button', get_stylesheet_directory_uri().'/css/download-button.css');
}

/* Enqueue OneMozilla original stylesheet */
add_action('wp_enqueue_scripts', 'font_awesome_css');
function font_awesome_css() {
	wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

/* Enqueue login stylesheet */
add_action('login_enqueue_scripts', 'one_mozillacz_custom_login');
function one_mozillacz_custom_login() {
	wp_enqueue_style('one_mozillacz', get_stylesheet_directory_uri().'/css/login.css');
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

