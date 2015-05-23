<?php
function mytheme_custom_scripts(){
    
    // Register and Enqueue a Stylesheet
    // get_template_directory_uri will look up parent theme location
    // wp_register_style( 'name-of-style', get_template_directory_uri() . '/css/custom-style.css');
    // wp_enqueue_style( 'name-of-style' );
    
    // Register and Enqueue a Script
    // get_stylesheet_directory_uri will look up child theme location
    wp_register_script( 'name-of-script', get_stylesheet_directory_uri() . '/custom-script.js', array('jquery'));
    wp_enqueue_script( 'name-of-script' );
    
}

add_action('wp_enqueue_scripts', 'mytheme_custom_scripts');

