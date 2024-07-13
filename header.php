<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=<?php bloginfo('charset') ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/style.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/bootstrap.rtl.min.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/animate.min.css"> -->
    <!-- <link rel="stylesheet" href="wp-content/themes/upshotmedia/assets/css/splide-skyblue.min.css"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/assets/images/upshot-logo-for-favicon-128x128-1.png">
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class() ?>>
    <!-- */in body class you can add diffrent class style/* -->
    <section class="headermenu">
        <div class="navbar fixed-top" id="headsection">
            <?php
            if (function_exists('the_custom_logo')) {
                // the_custom_logo( ); add dynamic logo
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
                // print_r($logo);
            }
            ?>
            <a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo $logo[0] ?>" alt=""></a>
            <div class="menubardiv">
                <?php
                $menu_args = array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="menubar d-lg-flex">%3$s</ul>',
                    'depth' => 2,
                );
                wp_nav_menu($menu_args);
                ?>

            </div>
            <div class="slideMobileMenu">
                <?php
                $menu_mobile = array(
                    'menu' => 'mobile',
                    'theme_location' => 'mobile',
                    'menu_class' => 'mobile_menu',
                    'depth' => 4,
                );
                wp_nav_menu($menu_mobile);
                ?>
            </div>

        </div>

    </section>