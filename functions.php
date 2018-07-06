<?php

function wordpressTheme_resources(){

    wp_enqueue_style( 'style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'wordpressTheme_resources');

register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
) );


function create_post_type() {
  add_theme_support( 'post-thumbnails');
  register_post_type( 'slide',
    array(
      'labels' => array(
        'name' => __( 'slide' ),
        'singular_name' => __( 'slide' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );
}

add_action( 'init', 'create_post_type' );
