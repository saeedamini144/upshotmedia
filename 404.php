<?php
    get_header( );
?>
<section class="titlesection">
    <div class="">
        <div class="container">
            <h1><?php the_title( );?></h1>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="text-center m-auto p-5">
        <h1>Page Not Found</h1>
        <?php
            get_search_form( );
        ?>
        </div>
    </div>
</section>

<?php
    get_footer( );
?>