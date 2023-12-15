
<div class="col-md-2 col-lg-4 mb-2">
    <div class="card">
        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" >
        <div class="card-body">
            <p class="card-title"><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a class="showMore" href="<?php the_permalink(); ?>"><strong>Show More</strong></i></span></a>
        </div>                                
    </div>
</div>           
            