<?php
    get_header();
?>
<section class="titlesection ">
    <div class="">
        <div class="container">
            <h1><?php the_title( );?></h1>
            <div>
                <span class="date text-light"><?php  the_date(); ?> </span>
                <span class="fa-tag text-light"><?php  the_tags("<span>the tags: " , " </span>"); ?></span>
                <span class=""><?php  the_category(); ?></span>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <?php
        if(have_posts(  )){
            while(have_posts(  )){
                the_post(  );
                // the_content(  );
                // the_post_thumbnail(  );
                get_template_part( 'template-parts/content' , 'article' );
            }
        }
    ?>
</div>
<?php
    get_footer();
?>