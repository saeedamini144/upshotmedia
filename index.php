<?php
get_header();
?>
<section class="titlesection mb-5 ">
    <div class="">
        <div class="container">
            <h1><?php the_archive_title(); ?></h1>
            <div>
                <!-- <span><?php the_time('F j, Y'); ?> </span>
                <span><?php the_tags("<span> The tags: ", " </span>"); ?></span>
                <span><?php the_category(); ?></span>
                <span><?php comments_number() ?></span> -->
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    // the_content(  );
                    get_template_part('template-parts/content', 'archive');
                }
            }
            ?>

        </div>
    </div>

    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('صفحه قبلی', 'textdomain'),
        'next_text' => __('صفحه بعدی', 'textdomain')
    ));
    ?>
</section>
<?php
get_footer();
?>