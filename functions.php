<?php
define('Address', get_template_directory_uri()); //usse define instead of using long atribute
function upshotmedia_theme_support()
{
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo'); //dynamic logo
    add_theme_support('post-thumbnails'); //show Featuer images 
}
add_action("after_setup_theme", "upshotmedia_theme_support");

//dynamic menu
function upshotmedia_menu()
{
    $locations =  array("primary" => "descktop menu", "mobile" => "mobile menu");
    register_nav_menus($locations);
}
add_action('init', 'upshotmedia_menu');

function upshotmedia_register_style()
{
    $version = wp_get_theme()->get("version");
    wp_enqueue_style('upshotmedia-style', Address . '/style.css', array("upshotmedia-bootstrap"), $version, "all");
    wp_enqueue_style('upshotmedia-bootstrap', Address . '/assets/css/bootstrap.rtl.min.css', array(), "1.0", "all");
    wp_enqueue_style('upshotmedia-fontawsome', Address . '/assets/css/fontawesome.min.css', array(), "1.0", "all");
    wp_enqueue_style('upshotmedia-animate', Address . '/assets/css/animate.min.css', array(), "1.0", "all");
    wp_enqueue_style('upshotmedia-splide', Address . '/assets/css/splide-skyblue.min.css', array(), "1.0", "all");
    wp_enqueue_style('upshotmedia-lightbox', Address . '/assets/css/lightbox.min.css', array(), '2.0', 'all');
    wp_enqueue_style('upshotmedia-jquery-drilled',  Address . '/assets/css/jquery-simple-mobilemenu-slide.css', array(), '2.0', 'all');
}
add_action("wp_enqueue_scripts", "upshotmedia_register_style");

function upshotmedia_register_scripts()
{
    wp_enqueue_script('jquery');
    // wp_enqueue_script('upshotmedia-jquery-3.6.0', get_template_directory_uri() . '/assets/javascripts/jquery-3.6.0.js' , array() , "3.6.0" , "all");
    wp_enqueue_script('upshotmedia-bootstrap.min', Address . '/assets/javascripts/bootstrap.min.js', array('jquery'), "1.0", true);
    wp_enqueue_script('upshotmedia-all.min', Address . '/assets/javascripts/all.min.js', array('jquery'), "1.0", true);
    wp_enqueue_script('upshotmedia-bootstrap.bundle.min', Address . '/assets/javascripts/bootstrap.bundle.min.js', array('jquery'), "1.0", true);
    wp_enqueue_script('upshotmedia-wow.min', Address . '/assets/javascripts/wow.min.js', array('jquery'), "1.0", true);
    wp_enqueue_script('upshotmedia-splide.min', Address . '/assets/javascripts/splide.min.js', array('jquery'), "1.0", true);
    wp_enqueue_script('upshotmedia-Lightbox', Address . '/assets/javascripts/lightbox.min.js', array('jquery'), '2.0', true);
    wp_enqueue_script('upshotmedia-jquery-drilled', Address . '/assets/javascripts/jquery-simple-mobilemenu.min.js', array('jquery'), '2.0', true);
    wp_enqueue_script('upshotmedia-mainjs', Address . '/assets/javascripts/main.js', array(), "1.0", true);
}
add_action("wp_enqueue_scripts", "upshotmedia_register_scripts");

// custom porfolio post type
// function upshotmedia_portfolio(){
//      ('Portfolio','array(

//     )');
// }

//widegt area
function upshotmedia_widget_areas()
{
    register_sidebar(
        array(
            'befor_title' => '',
            'afther_title' => '',
            'befor_widget' => '',
            'afther_widget' => '',
            'name' => 'sidebar Area',
            'id' => 'sidbar-1', //css id for the change style
            'description' => 'sidebar widget area'
        )
    );
}
add_action('widgets_init', 'upshotmedia_widget_areas');
//add Cmb2 init file to load in our website
require_once dirname(__FILE__) . '/includes/CMB2/init.php';
require_once dirname(__FILE__) . '/functions/cmb2-options.php';
