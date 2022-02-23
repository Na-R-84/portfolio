<?php
# Tema beteende

// function for Style & Script
function get_style_scripts(){
    //ladda in css med "wp_enqueue_style" funktion
    wp_enqueue_style('main-style',get_stylesheet_uri());
   
    //ladda in google fonts
    wp_enqueue_style('logo-font',
    'https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
    
    wp_enqueue_style('text-font','
    https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap');
    
    wp_enqueue_style('rubrik-font','
    https://fonts.googleapis.com/css2?family=Bitter:wght@500&display=swap');
    
    // ladda in icons
    wp_enqueue_style('main-icons',
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
    //ladda in script
    //parameter:
        # 1- unik Name 
        # 2- file place 
        # 3- wp would know if script's dependency and if ic Null
        # 4- verison Number,false 
        # 5- placed it before last tag in body,yes or no(true/false)
    wp_enqueue_script('main-js',get_theme_file_uri('script.js'), NULL,false,true);
}

//anropa med add_action
add_action('wp_enqueue_scripts','get_style_scripts');


//Function för att lägga till diverse support
function theme_setup(){
    //Lägga till support för title-tag 
    add_theme_support('title-tag');
    //Lägga till support för utvald bild 
    add_theme_support('post-thumbnails');
    //Registerar meny 
    register_nav_menus(array(
        'mainmenu' => 'Main Menu',
        'categorymenu' => 'Category Menu'
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Logo function
function themename_custom_logo_setup() {
    add_theme_support( 'custom-logo');
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


//Register widget 
function init_widget(){
    register_sidebar(array(
        'name'              => 'Footer sidebar',
        'id'                => 'footer',
        'before_widget'     => '<div>',
        'after_widget'      => '</div>'
    ));
}
add_action('widgets_init','init_widget');

//För att byta ut <a> som genereras av previous_post_link
function add_class_previous_post_link($html){
    #1. Det du vill söka efter
    #2. Vad det ska ersätts till
    $html = str_replace('<a','<a class="btn btn-single"',$html);
    return $html;
}
//man gör ändar data in en funktion
add_filter('previous_post_link','add_class_previous_post_link');