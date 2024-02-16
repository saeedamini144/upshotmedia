<?php
get_header();
?>
<section class="titlesection ">
    <div class="">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div>
                <span><?php the_time('F j, Y'); ?> </span>
                <span><?php the_tags("<br><span> The tags: ", " </span>"); ?>
                    <br>
                    <span> Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>
                        </a>
                    </span>
                    <br>
                    <p>Categores: <?php
                                    $categories = get_the_category();
                                    $seprator = " , ";
                                    $output = " ";
                                    if ($categories) {
                                        foreach ($categories as $category) {
                                            $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $seprator;
                                        }
                                        echo trim($output, $seprator);
                                    }
                                    ?>
                    </p>
                    <span><?php comments_number() ?></span>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="m-5">
        <!-- <?php the_post_thumbnail(); ?> instead of just using this one line code can use the pro -->
        <?php
            if(has_post_thumbnail()){
                $image = array(
                    'alt' => get_the_title(),
                    'title' => get_the_title()
                );
                the_post_thumbnail('', $image);
            }else{
                echo"<img src=''>";//when the post have no images
            }
        ?>
    </div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            // the_content(  );
            get_template_part('template-parts/content', 'article');
        }
    }
    comments_template();
    ?>
</div>
<?php
get_footer();
?>