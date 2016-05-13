<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function msopeniotlab_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
//    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
}

//add style support
add_action('wp_enqueue_scripts', msopeniotlab_scripts);

//navigation menu
register_nav_menus(array(
    'primary' => __('Primary Menu'),
));

function addThemeSupport() {
    //add featured images
    add_theme_support('post-thumbnails');
    add_image_size('home-mornitoringplatform-image', 445, 285, array('left', 'top'));
    add_image_size('home-city-image', 339, 226, array('left', 'top'));
}

add_action('after_setup_theme', 'addThemeSupport');


if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}
add_filter('show_admin_bar', '__return_false');