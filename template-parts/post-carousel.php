    <!-- <div class="owl-carousel owl-theme">
        <div class="item">
            
        </div>
    </div> -->
    <div class=" card">
        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
        <!-- <?php
                if (has_post_thumbnail()) {
                    $image = array(
                        'alt' => get_the_title(),
                        'title' => get_the_title(),
                        'class' => "card-img-top"
                    );
                    the_post_thumbnail('', $image);
                } else {
                    echo "<img src=''>"; //when the post have no images
                }
                ?> -->
        <div class="card-body">
            <p class="card-title"><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a class="showMore" href="<?php the_permalink(); ?>"><strong>Show More</strong></i></span></a>
        </div>
    </div>