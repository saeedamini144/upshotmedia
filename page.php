<?php
get_header();
?>
<?php
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<section class="titlesection " style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; ">
    <div>
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        // the_content( );
        get_template_part('/template-parts/content', 'page');
    }
}
?>
<?php
get_footer();
?>