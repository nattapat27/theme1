<?php

function wordpressTheme_resources(){

    wp_enqueue_style( 'style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'wordpressTheme_resources');

register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
) );