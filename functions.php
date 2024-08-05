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
    wp_enqueue_style('upshotmedia-owl-carousel', Address . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');
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
    wp_enqueue_script('upshotmedia-owl-carousel', Address . '/assets/javascripts/owl.carousel.min.js', array('jquery'), '2.3.4', true);
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
            'id' => 'Single-post-sidebar', //css id for the change style
            'description' => 'sidbar of the single post area',
            'class' => '',
        ),
    );
}
add_action('widgets_init', 'upshotmedia_widget_areas');
//add Cmb2 init file to load in our website
require_once dirname(__FILE__) . '/includes/CMB2/init.php';
require_once dirname(__FILE__) . '/functions/cmb2-options.php';


////portfolio post type
/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => 'Portfolio',
            'singular_name'       => 'Portfolio',
            'menu_name'           => 'Porftolio',
            'parent_item_colon'   => '',
            'all_items'           => 'All Portfolio',
            'view_item'           => 'view portfolio',
            'add_new_item'        => 'Add new portfolio',
            'add_new'             => 'Add new',
            'edit_item'           => 'Edite Portfolio',
            'update_item'         => 'Update portfolio',
            'search_items'        => 'Search portfolio',
            'not_found'           => 'Not found',
            'not_found_in_trash'  => 'Not found in trash',
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => 'Portfolio',
            'description'         => 'The Portfolio of the site',
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'category','post_tag' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'Portfolio', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );