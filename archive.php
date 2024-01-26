<?php
get_header();
?>
<section class="titlesection  mb-5">
    <div class="">
        <div class="container">
            <!-- <h1><?php the_archive_title(); ?></h1> show the title with befor -->
            <h1><?php
                if (is_category()){
                    echo 'Categories: ' . single_cat_title();
                }elseif(is_tag()){
                    // single_tag_title();
                    echo "The Tag archive " . single_tag_title();
                }elseif(is_day()){
                    echo'the day archive:' . get_the_date('j F');
                }
            ?></h1>
            <div>
                <!-- <span><?php the_time('F j, Y'); ?> </span>
                <span><?php the_tags("<span> The tags: ", " </span>"); ?></span>
                <span><?php the_category(); ?></span>
                <span><?php comments_number() ?></span> -->
            </div>
        </div>
    </div>
</section>
<section class="container">
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
    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('Previuos Page', 'textdomain'),
        'next_text' => __('Next Page' , 'textdomain')

    ));
    ?>
</section>
<?php
get_footer();
?>