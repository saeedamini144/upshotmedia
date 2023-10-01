<?php
    get_header();
?>
<section class="titlesection">
    <div class="row">
        <div class="container">
            <h1><?php the_title( );?></h1>
        </div>
    </div>
</section>
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
<?php
    get_footer();
?>