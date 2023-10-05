<?php
    get_header();
?>
<section class="titlesection">
    <div class="">
        <div class="container">
            <h1><?php the_title( );?></h1>
        </div>
    </div>
</section>
<?php
    if (have_posts(  )){
        while( have_posts(  )){
            the_post(  );
            the_content( );
        }
    }
?>
<?php
    get_footer(  );
?>