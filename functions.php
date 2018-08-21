<?php

function wordpressTheme_resources(){

    wp_enqueue_style( 'style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'wordpressTheme_resources');

register_nav_menus( array(
    'primary' => __('Primary Menu')
) );

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/slider.php';
require get_template_directory() . '/inc/banner.php';
require get_template_directory() . '/inc/topbar.php';