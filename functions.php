<?php
    function upshotmedia_theme_support(){
         // adds dynamic title tag support
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
    }
    add_action( "after_setup_theme" , "upshotmedia_theme_support");
    
    //dynamic menu
    function upshotmedia_menu(){
        $locations =  array("primary"=>"descktop menu" , "mobile" => "mobile menu");
        register_nav_menus( $locations );
    }
    add_action( 'init' , 'upshotmedia_menu' );

    function upshotmedia_register_style(){
        $version = wp_get_theme()->get("version");
        wp_enqueue_style('upshotmedia-style', get_template_directory_uri() . '/style.css' , array("upshotmedia-bootstrap") , $version , "all");
        wp_enqueue_style('upshotmedia-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css' , array() , "1.0" , "all");
        wp_enqueue_style('upshotmedia-fontawsome', get_template_directory_uri() . '/assets/css/fontawesome.min.css' , array() , "1.0" , "all");
        wp_enqueue_style('upshotmedia-animate', get_template_directory_uri() . '/assets/css/animate.min.css' , array() , "1.0" , "all");
        wp_enqueue_style('upshotmedia-splide', get_template_directory_uri() . '/assets/css/splide-skyblue.min.css' , array() , "1.0" , "all");
    }
    add_action( "wp_enqueue_scripts", "upshotmedia_register_style" );
    
    function upshotmedia_register_scripts(){
        wp_enqueue_script('jquery');
        // wp_enqueue_script('upshotmedia-jquery-3.6.0', get_template_directory_uri() . '/assets/javascripts/jquery-3.6.0.js' , array() , "3.6.0" , "all");
        wp_enqueue_script('upshotmedia-bootstrap.min', get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js' , array('jquery') ,"1.0" , true );
        wp_enqueue_script('upshotmedia-all.min', get_template_directory_uri() . '/assets/javascripts/all.min.js' , array('jquery') ,"1.0" , true );
        wp_enqueue_script('upshotmedia-bootstrap.bundle.min', get_template_directory_uri() . '/assets/javascripts/bootstrap.bundle.min.js' , array('jquery') ,"1.0" , true );
        wp_enqueue_script('upshotmedia-wow.min', get_template_directory_uri() . '/assets/javascripts/wow.min.js' , array('jquery') ,"1.0" , true );
        wp_enqueue_script('upshotmedia-splide.min', get_template_directory_uri() . '/assets/javascripts/splide.min.js' , array('jquery') ,"1.0" , true );
        wp_enqueue_script('upshotmedia-mainjs', get_template_directory_uri() . '/assets/javascripts/main.js' , array() ,"1.0" , true );
    }
    add_action("wp_enqueue_scripts", "upshotmedia_register_scripts" );
?>