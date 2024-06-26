<?php
get_header(); //can use Template part instead of usine all html and css hear , all section can be a on template part
// $general_group = upshotmedia_get_option('upshotmedia_general_group'); // var_dump($cmb_options);
$upshotmedia_slider = upshotmedia_get_option('main_slider');
$upshotmedia_logo_carousel = upshotmedia_get_option('upshotmedia_logo_carousel');
// var_dump($upshotmedia_logo_carousel);to undrestand better the file_list of cmb2
$upshotmedia_Alert_section = upshotmedia_get_option('Alert_section');
$upshotmedia_services = upshotmedia_get_option('upshotmedia_services');
$upshotmedia_services_item = upshotmedia_get_option('services_item');
$upshotmedia_aboutus_section = upshotmedia_get_option('Aboutus_section');
$upshotmedia_section_content_one = upshotmedia_get_option('section_content_one');
$upshotmedia_section_content_two = upshotmedia_get_option('section_content_two');
$upshotmedia_section_content_three = upshotmedia_get_option('section_content_three');
$upshotmedia_review = upshotmedia_get_option('customer_review');
$upshotmedia_background_image = upshotmedia_get_option('review_background_image');
?>
<style>
    .customer-review {
        background-image: url('<?php echo $upshotmedia_background_image[0]['review_background'] ?>');
        padding: 50px 0 50px 0;
    }

    /* .slider_title {
        color: <?php echo $slider_content['slider_title_color'] ?>;
    }

    .slider_text {
        color: <?php echo $slider_content['slider_desc_color'] ?>;
    }

    .slider_button_style {
        color: <?php echo $slider_content['slider_button_name_color'] ?>;
        padding: 20px 40px;
        border: 1px;
        border-color: <?php echo $slider_content['border_color'] ?>;
    } */
</style>
<section class="slider_sections">
    <div>
        <div class="splide" id="splide_slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    foreach ($upshotmedia_slider as $slider_content) {
                    ?>
                        <li class="splide__slide">

                            <img class="w-100" src="<?php echo $slider_content['slider_image'] ?>" alt="">
                            <div class="slider_content">
                                <h2 class="slider_title" style="color:<?php echo $slider_content['slider_title_color']; ?>"><?php echo $slider_content['slider_title'] ?></h2>
                                <p class="slider_text" style="color:<?php echo $slider_content['slider_desc_color']; ?>"><?php echo $slider_content['slider_desc'] ?></p>
                                <button class="btn slider_button_style" style=" color: <?php echo $slider_content['slider_button_name_color'] ?>;border-color: <?php echo $slider_content['border_color'] ?>;"><?php echo $slider_content['slider_button_name'] ?></button>
                            </div>

                        </li>
                    <?php
                    }
                    ?>
                    <!-- <li class="splide__slide">
                        <img class="w-100" src="<?php bloginfo('template_url') ?>/assets/images/Photo2.jpg" alt="">
                        <div class="slider_content">
                            <h2 class="slider_title">Testing Text2</h2>
                            <p class="slider_text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                            <button class="btn btn-outline-light">Contact With Us</button>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img class="w-100" src="<?php bloginfo('template_url') ?>/assets/images/Photo3.jpg" alt="">
                        <div class="slider_content">
                            <h2 class="slider_title">Testing Text3</h2>
                            <p class="slider_text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                            <button class="btn btn-outline-light">Contact With Us</button>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="covid" class="bg-purple alert-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center text-light"><?php echo $upshotmedia_Alert_section[0]['Alert_section_content']; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- <section class="headsection">
    <div class="row">
        <div class="container">
            <div class="overlay">
                <div class="menubar-text text-center col-12">
                    <h1 class="text-light mb-4"><?php echo $general_group[0]['Main_title_Text']; ?></h1>
                    <h2 class="text-light mb-5">A Technology-Focused Design Agency</h2>
                    <button class="btn btn-outline-light">Contact With Us</button>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section id="aboutus" class="bg-black">
    <div class="container">
        <div class="row">
            <div id="aboutustext" class="text-light text-center p-5">
                <h5 class="pb-3"><?php echo $upshotmedia_aboutus_section[0]['aboutus_title'] ?></h5>
                <p class="pb-5"><?php echo $upshotmedia_aboutus_section[0]['aboutus_content'] ?></p>
                <a href="<?php echo $upshotmedia_aboutus_section[0]['ab_button_url'] ?>"><button class="btn btn-outline-light"><?php echo $upshotmedia_aboutus_section[0]['ab_button_text'] ?></button></a>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-black">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <span class="services-mini-text text-light"><?php echo $upshotmedia_services[0]['services_subtitle'] ?></span>
                <h2 class="services-title text-light"><?php echo $upshotmedia_services[0]['services_title'] ?></h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="<?php echo $upshotmedia_services[0]['services_button_url'] ?>"><button class="btn btn-outline-light"><?php echo $upshotmedia_services[0]['services_button_text'] ?></button></a>
            </div>
        </div>
        <div class="container">
            <div class="services-box">
                <div class="row">
                    <?php
                    foreach ($upshotmedia_services_item as $item_services) {
                    ?>
                        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <?php
                            if (isset($item_services['right_line'])) {
                                $right_border = null;
                            } else {
                                $right_border = 'border_right';
                            }
                            if (isset($item_services['bottom_line'])) {
                                $bottom_border = null;
                            } else {
                                $bottom_border = 'border_bottom';
                            }
                            ?>
                            <div class="service-item <?php echo $right_border . ' ' . $bottom_border ?>">
                                <i style="color: #ffff;" class="fa <?php echo $item_services['services_icon'] ?>"></i>
                                <h3><?php echo $item_services['item_title'] ?></h3>
                                <p><?php echo $item_services['item_text'] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
</section>
<section id="section_content1" class="bg-gradiant sectionheight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 ">
                <div class="img-figur">
                    <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/art-attic-1014x724.png" alt=""> -->
                    <img src="<?php echo $upshotmedia_section_content_one[0]['content_one_image'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center text-light">
                    <h1><?php echo $upshotmedia_section_content_one[0]['title_content_one'] ?></h1>
                    <p class="pb-4"><?php echo $upshotmedia_section_content_one[0]['Desc_content_one'] ?></p>
                    <a href="<?php echo $upshotmedia_section_content_one[0]['content_one_button_url'] ?>"><button class="btn btn-outline-light"><?php echo $upshotmedia_section_content_one[0]['content_one_button_text'] ?></button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-black black-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="text-center text-light">
                    <h1><?php echo $upshotmedia_section_content_two[0]['title_content_two'] ?></h1>
                    <p class="pb-4"><?php echo $upshotmedia_section_content_two[0]['Desc_content_two'] ?></p>
                    <a href="<?php echo $upshotmedia_section_content_two[0]['content_two_button_url'] ?>"><button class="btn btn-outline-light"><?php echo $upshotmedia_section_content_two[0]['content_two_button_text'] ?></button></a>
                </div>
            </div>
            <div class="col-md-4 col-lg-8 ">
                <div class="img-figurdark">
                    <img src="<?php echo $upshotmedia_section_content_two[0]['content_two_image'] ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blogcarosel">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center text-light">Our New Blogs</p>
            </div>
            <div class="col-12">
                <div>
                    <?php
                    $args = array(
                        'post_type' => 'post', // Fetch posts
                        'posts_per_page' => 5, // Number of posts to display
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                    ?>
                        <div class="owl-carousel">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="item">
                                    <!-- Display post content here -->
                                    <?php get_template_part('template-parts/post', 'carousel'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php
                        wp_reset_postdata(); // Reset post data query
                    else :
                        echo 'No posts found.';
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="bg-gradiant sectionheight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 ">
                <div class="img-figur">
                    <img src="<?php echo $upshotmedia_section_content_three[0]['content_three_image'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center text-light">
                    <h1><?php echo $upshotmedia_section_content_three[0]['title_content_three'] ?></h1>
                    <p class="pb-4"><?php echo $upshotmedia_section_content_three[0]['Desc_content_three'] ?></p>
                    <a href="<?php echo $upshotmedia_section_content_three[0]['content_three_button_url'] ?>"><button class="btn btn-outline-light"><?php echo $upshotmedia_section_content_three[0]['content_three_button_text'] ?></button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="bg-black black-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="text-center text-light">
                    <h1>ENGAGING VIDEO CONTENT</h1>
                    <p class="pb-4">We create unique animations and breathtaking live-action movies. In today's tech-driven world, there's no excuse for not having access to the tools to create cinematic video content. And guess what? Our internationally trained team of cinematographers and editors defeat the rest!</p>
                    <button class="btn btn-outline-light">THINK DIGITAL</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-8 ">
                <div class="img-figurdark">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/video-1068x1025.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="customer-review">
    <div class="container">
        <div class="row">
            <div id="splide_review" class="splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php foreach ($upshotmedia_review as $customer) { ?>
                            <div class="splide__slide">
                                <div class="review">
                                    <p class="customer_review"><?php echo $customer['review'] ?></p>
                                    <div class="customer_info">
                                        <img class="customer_image" src="<?php echo $customer['customer_img'] ?>" alt="">
                                        <span class="customer_name"><?php echo $customer['customer_name'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-carosel">
    <div class="container">
        <div class="row">
            <div class="text-light text-center">
                <h1>OUR CLIENTS</h1>
            </div>
            <div class="splide" id="customer_logo">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        foreach ($upshotmedia_logo_carousel[0]['Images_carousel'] as $logo_data) {
                        ?>
                            <li class="splide__slide"><img class="logo_image" src="<?php echo $logo_data; ?>" alt=""></li>
                        <?php
                        }
                        ?>
                        <!-- <li class="splide__slide"><img src="<?php bloginfo('template_url'); ?>/assets/images/fem-675x421.png" alt=""></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-black">
    <div class="container">
        <div class="row col-12 text-center text-light p-5">
            <h2><strong>READY TO WORK WITH US?</strong></h2>
        </div>
        <form class="p-4" action="" class="form-group" id="fromwidth">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="" class="form-label text-light d-block">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                    <label for="" class="form-label text-light d-block">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                    <label for="" class="form-label text-light d-block">Phone</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12 form-group">
                    <label for="" class="form-label text-light d-block">Message</label>
                    <textarea name="" id="" cols="30" rows="8"></textarea>
                </div>
            </div>
            <button class="btn btn-outline-light d-block m-auto mb-3 mt-3">SEND FORM</button>
            <div class="text-center">
                <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                <label for="checkbox_id" class="text-light">By continuing you agree to our </label><a href="#" class="astyle"> Terms of Service</a>
            </div>
    </div>
    </form>
    </div>
</section>
<?php
get_footer();
?>