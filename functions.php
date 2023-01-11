<?php

add_action('wp_enqueue_scripts', 'handmasterclass_styles');
add_action('wp_enqueue_scripts', 'handmasterclass_scripts');

function handmasterclass_styles() {
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/styles/libs/slick.css');
    wp_enqueue_style('handmasterclass-style', get_stylesheet_uri());
    
}

function handmasterclass_scripts() {
    // wp_enqueue_script('jquery');
    // wp_enqueue_script( 'slick-scripts', get_template_directory_uri() . '/assets/js/libs/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'handmasterclass-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_theme_support( 'custom-logo' );
//add_theme_support( 'post-thumbnails' );
	

?>