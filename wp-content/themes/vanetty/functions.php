<?php

function theme_setup() {
	if ( ! isset( $content_width ) ) $content_width = 1200;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'theme_setup' );

// Image size
add_image_size( '1500x1500', 1500, 1500, true );
add_image_size( '1300x900', 1300, 900, true );
add_image_size( '700x850', 700, 850, true );
add_image_size( '700x900', 700, 900, true );
add_image_size( '600x800', 600, 800, true );
add_image_size( '2000x800', 2000, 800, true );


add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'discography',
    array(
      'labels' => array(
        'name' => __( 'Discography' ),
        'singular_name' => __( 'Discography' )
      ),
      'public' => true,
	  'menu_icon' => 'dashicons-format-status',

    )
  );
}
