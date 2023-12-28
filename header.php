<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=<?php bloginfo('charset')?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/style.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/bootstrap.rtl.min.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/animate.min.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/splide-skyblue.min.css"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/upshotmedia/assets/images/upshot-logo-for-favicon-128x128-1.png">
    <?php
        wp_head();
    ?>
</head>
<body <?php body_class() ?>>
    <section class="headermenu">
        <div class="navbar fixed-top" id="headsection">
            <?php
              if(function_exists('the_custom_logo')){
                // the_custom_logo( ); add dynamic logo
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id );
                // print_r($logo);
              }  
            ?>
                <a href="#" class="navbar-brand"><img src="<?php echo $logo[0] ?>" alt=""></a>
            <div class="menubardiv">
                <?php
                    wp_nav_menu( 
                        array(
                            'menu' =>'primary' , 
                            'container' => '' , 
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="menubar d-lg-flex">%3$s</ul>',
                        )
                     )
                ?>
                <!-- <ul class="menubar d-lg-flex">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">App Design</a></li>
                    <li><a href="#">Website Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Video Content</a></li>
                </ul> -->
            </div>
            <div class="hamburger d-lg-none">
                <span class="bar-1"></span>
                <span class="bar-2"></span>
                <span class="bar-3"></span>
            </div>
        </div>
        <!-- <div class="menubar-text text-center col-12">
            <h1 class="text-light mb-4">WELCOME TO UPSHOT MEDIA</h1>
            <h2 class="text-light mb-5">A Technology-Focused Design Agency</h2>
            <button class="btn btn-outline-light p-2">Contact With Us</button>
        </div> -->
        <!-- <div class="container ">
            <div class="row ">
                
            </div>
        </div> -->
    </section>