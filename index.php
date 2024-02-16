<?php
get_header();
?>
<section class="titlesection mb-5 ">
    <div class="">
        <div class="container">
            <h1><?php the_archive_title(); ?></h1>
            <div>
                <span><?php the_time('j F, Y'); ?> </span>
                <span><?php the_tags("<span> The tags: ", " </span>"); ?></span>
                <span><?php the_category(); ?></span>
                <span><?php comments_number() ?></span>
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
                wp_reset_postdata();//After looping through a separate query, this function restores the $post global to the current post in the main query.
            }
            ?>

        </div>
    </div>

    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('Previuos Page', 'textdomain'),
        'next_text' => __('Next Page', 'textdomain')
    ));
    ?>
</section>
<?php
get_footer();
?>