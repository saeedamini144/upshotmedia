<?php
    get_header();
?>
<section class="titlesection ">
    <div class="">
        <div class="container">
            <h1><?php the_title( );?></h1>
            <div>
                <span><?php  the_time( 'F j, Y' ); ?> </span>
                <span><?php  the_tags("<span> The tags: " , " </span>"); ?></span>
                <span><?php  the_category(); ?></span>
                <span><?php  comments_number() ?></span>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="m-5"><?php the_post_thumbnail();?></div>
    <?php
        if(have_posts(  )){
            while(have_posts(  )){
                the_post(  );
                // the_content(  );
                get_template_part( 'template-parts/content' , 'article' );
            }
        }
        comments_template();
    ?>
</div>
<?php
    get_footer();
?>