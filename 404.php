<?php
get_header();
?>
<section class="titlesection">
    <div class="">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="text-center m-auto p-5">
            <h1>Page Not Found</h1>
            <?php
            get_search_form();
            ?>
            <!-- <form id="searchform" action="<?php echo home_url('/'); ?>" method="get">
                <input type="search" class="Search" name="search" placeholder="<?php the_search_query(); ?>">
                <input type="submit" class="SearchSubmit" value="Search">
            </form> -->
        </div>
    </div>
</section>

<?php
get_footer();
?>