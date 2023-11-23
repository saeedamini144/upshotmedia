<?php
    get_header();
?>
<section class="titlesection ">
    <div class="">
        <div class="container">
            <h1><?php the_archive_title();?></h1>
            <div>
                <!-- <span><?php  the_time( 'F j, Y' ); ?> </span>
                <span><?php  the_tags("<span> The tags: " , " </span>"); ?></span>
                <span><?php  the_category(); ?></span>
                <span><?php  comments_number() ?></span> -->
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-3 col-lg-4 m-4">
            <?php
                if(have_posts(  )){
                    while(have_posts(  )){
                        the_post(  );
                        // the_content(  );
                        get_template_part( 'template-parts/content' , 'archive' );
                    }
                }
            ?>
        </div>    
    </div>
</section>
<?php
    get_footer();
?>