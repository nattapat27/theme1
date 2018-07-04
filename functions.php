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
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Slider' ),
        'singular_name' => __( 'Slider' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );
