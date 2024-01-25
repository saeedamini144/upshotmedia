<?php
/*
Template Name: Search Page
*/
?>
<form id="searchform" action="<?php echo home_url('/');?>" method="get">
    <input type="search" class="Search" name="s" placeholder="<?php the_search_query(); ?>">
    <input type="submit" class="SearchSubmit" value="Search">
</form>