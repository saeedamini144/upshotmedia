<?php
get_header();
?>
<section class="titlesection mb-5 ">
    <div class="">
        <div class="container">
            <h1>Search Resault: <?php the_search_query(); ?></h1>
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
                    get_template_part('template-parts/content', 'archive');
                }
            }else{
                echo "<div class='notfound text-center m-auto p-5 h-100'><h1>The Serach not Found</h1></div>";
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