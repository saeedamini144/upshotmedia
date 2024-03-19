<?php
$footer_group = upshotmedia_get_option('upshotmedia_footer_group'); //call back cmb2
$social_group = upshotmedia_get_option('upshotmedia_social_group');
$footer_group_contact_column = upshotmedia_get_option('upshotmedia_footer_group_contact_column');
// var_dump($footer_group); 
// 
?>
<footer class="bg-siah">
    <div class="container pt-5">
        <div class="row">
            <div class=" col-md-3 text-light p-2 ">
                <figure>
                    <img src="<?php echo $footer_group[0]['Footer_Logo']; ?>" alt="">
                </figure>
                <!-- <h5>Services</h5>
                <hr> -->
                <p><?php echo $footer_group[0]['footer_explaine']; ?></p>
            </div>
            <div class=" col-md-3 text-light p-2">
                <h5>Contact Us</h5>
                <hr>
                <ul>
                    <?php
                    foreach ($footer_group_contact_column as $contact_column) {
                    ?>
                        <li class="mb-3"><strong><?php echo $contact_column['title_contact'] ?>: </strong><a href="<?php echo $contact_column['contact_link'] ?>"><?php echo $contact_column['contact_data'] ?></a></li>

                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class=" col-md-3 text-light p-2">
                <h5>Our Services</h5>
                <hr>
                <ul>
                    <li class="mb-3">Photograhy</li>
                    <li class="mb-3">Design</li>
                    <li class="mb-3">Flowering</li>
                    <li class="mb-3">Digital Marketing</li>
                </ul>
            </div>
            <div class=" col-md-3 text-light p-2">
                <h5>Gallery</h5>
                <hr>
                <div>
                    <a href="<?php bloginfo('template_url') ?>/assets/images/Photo1.jpeg" data-lightbox="img-gallery2"><img class="imggallery" src="<?php bloginfo('template_url') ?>/assets/images/Photo1.jpeg" alt="gallery1"></a>
                    <a href="<?php bloginfo('template_url') ?>/assets/images/Photo2.jpg" data-lightbox="img-gallery3"><img class="imggallery" src="<?php bloginfo('template_url') ?>/assets/images/Photo2.jpg" alt="gallery2"></a>
                    <a href="<?php bloginfo('template_url') ?>/assets/images/Photo3.jpg" data-lightbox="img-gallery4"><img class="imggallery" src="<?php bloginfo('template_url') ?>/assets/images/Photo3.jpg" alt="gallery3"></a>
                    <a href="<?php bloginfo('template_url') ?>/assets/images/Photo4.jpg" data-lightbox="img-gallery1"><img class="imggallery" src="<?php bloginfo('template_url') ?>/assets/images/Photo4.jpg" alt="gallery5"></a>
                    <a href="<?php bloginfo('template_url') ?>/assets/images/Photo5.jpg" data-lightbox="img-gallery5"><img class="imggallery" src="<?php bloginfo('template_url') ?>/assets/images/Photo5.jpg" alt="gallery5"></a>
                    <a href="<?php bloginfo('template_url') ?>/assets/images/Photo6.jpg" data-lightbox="img-gallery6"><img class="imggallery" src="<?php bloginfo('template_url') ?>/assets/images/Photo6.jpg" alt="gallery7"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="colr-12 text-center text-light m-auto p-5">
        <h2><strong>FOLLOW US!</strong></h2>
        <div class="sociallink">
            <ul>
                <?php
                foreach ($social_group as $social) {
                ?>
                    <li class="d-inline-block m-2"> <a class="social-color" href="<?php echo $social['footer_icon_link_1'] ?>"><span class="fab <?php echo $social['footer_icon_1']; ?> fa-2x"></span></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col-12 text-center text-light m-auto p-4">
        <p>© Copyright 2020 Upshot Media - All Rights Reserved. View our <a href="#" class="astyle">Privacy and Policy</a></p>
    </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>