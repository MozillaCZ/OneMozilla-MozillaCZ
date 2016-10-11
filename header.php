<?php $theme_options = onemozilla_get_theme_options(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> id="mozilla-blog">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For Facebook -->
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:title" content="<?php if (is_singular()) : single_post_title(); else : bloginfo('name'); endif; ?>">
  <meta property="og:url" content="<?php if (is_singular()) : the_permalink(); else : bloginfo('url'); endif; ?>">
  <meta property="og:description" content="<?php fc_meta_desc(); ?>">
<?php if (is_singular()) : ?>
  <?php if ($thumbs = get_attached_media('image')) : ?>
    <?php foreach ($thumbs as $thumb) : ?>
      <?php $thumb = wp_get_attachment_image_src( $thumb->ID, 'medium' ); ?>
      <meta property="og:image" content="<?php echo $thumb['0']; ?>">
    <?php endforeach; ?>
  <?php endif; ?>
  <?php if (has_post_thumbnail()) : ?>
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
    <meta property="og:image" content="<?php echo $thumb['0']; ?>">
  <?php endif; ?>
<?php elseif (get_header_image()) : ?>
  <meta property="og:image" content="<?php echo get_header_image(); ?>">
<?php endif; ?>
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/MozillaCZ-02-og_image.png">


  <meta name="title" content="<?php if (is_singular()) : single_post_title(); echo ' | '; endif; bloginfo('name'); ?>">
  <meta name="description" content="<?php fc_meta_desc(); ?>">

  <meta name="Rating" content="General">
  <!--[if IE]>
  <meta name="MSSmartTagsPreventParsing" content="true">
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->

  <link rel="copyright" href="#colophon">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
  <?php
    if ( ! has_site_icon() ) {
        printf( '<link rel="apple-touch-icon" href="%s">'.PHP_EOL, esc_url( get_stylesheet_directory_uri()."/img/favicon-196x196.png" ) );
        printf( '<meta name="msapplication-TileImage" content="%s">'.PHP_EOL, esc_url( get_stylesheet_directory_uri()."/img/favicon-196x196.png" ) );
    }
  ?>
  <meta name="msapplication-config" content="none">
  <?php if ( get_option('onemozilla_share_posts') == 1 || get_option('onemozilla_share_pages') == 1 ) : ?>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/socialshare.css">
  <?php endif; ?>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/css/print.css">
  <!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css"><![endif]-->

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="search" type="application/opensearchdescription+xml" title="Mozilla.cz" href="http://www.mozilla.cz/searchmodule.xml">

  <title><?php
    if ( is_single() ) { single_post_title(); echo ' | '; bloginfo('name'); }
    elseif ( is_home() || is_front_page() ) { bloginfo('name'); if (get_bloginfo('description','display')) { echo ' | '. get_bloginfo('description','display'); } fc_page_number(); }
    elseif ( is_page() ) { single_post_title(''); echo ' | '; bloginfo('name'); }
    elseif ( is_search() ) { printf( __('Search results for “%s”', 'onemozilla'), esc_html( $s ) ); fc_page_number(); echo ' | '; bloginfo('name'); }
    elseif ( is_day() ) { $post = $posts[0]; printf(__('Posts from %s', 'onemozilla'), get_the_date()); echo ' | '; bloginfo('name'); fc_page_number(); }
    elseif ( is_month() ) { $post = $posts[0]; printf(__('Posts from %s', 'onemozilla'), get_the_date('F, Y')); echo ' | '; bloginfo('name'); fc_page_number(); }
    elseif ( is_year() ) { $post = $posts[0]; printf(__('Posts from %s', 'onemozilla'), get_the_date('Y')); echo ' | '; bloginfo('name'); fc_page_number(); }
    elseif ( is_404() ) { _e('Not Found', 'onemozilla'); echo ' | '; bloginfo('name'); }
    else { wp_title(''); echo ' | '; bloginfo('name'); fc_page_number(); }
  ?></title>

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); } ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class($theme_options['color_scheme']); ?>>
<div id="page"><div class="wrap">
  <nav id="nav-access">
    <ul>
      <li><a href="#content-main" tabindex="1"><?php _e( 'Skip to main content', 'onemozilla' ); ?></a></li>
      <li><a href="#content-sub" tabindex="2"><?php _e( 'Skip to sidebar', 'onemozilla' ); ?></a></li>
    <?php if ( is_active_widget( false, false, 'search', true ) || ( !is_active_sidebar('sidebar') ) ) : ?>
      <li><a href="#search" tabindex="3"><?php _e( 'Skip to blog search', 'onemozilla' ); ?></a></li>
    <?php endif; ?>
    </ul>
  </nav>

  <?php get_template_part( 'masthead' ); ?>

  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_id' => 'nav-primary', 'fallback_cb' => 'false', ) ); ?>

  <main id="content">
