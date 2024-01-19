<form id="searchform" action="<?php echo home_url('/');?>" method="get">
    <input type="search" id="search" name="search" placeholder="<?php the_search_query(); ?>">
    <input type="submit" id="searchSubmit" value="Search">
</form>