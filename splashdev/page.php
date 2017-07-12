<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

        $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
    <section class="section-page-header" style="background-image: url(<?php echo $url[0]; ?>);">
        <div class="wrap">
            <h1 class="hero-title "><?php the_title(); ?></h1>
        </div>
    </section>
<?php include 'parts/header-float.php'; ?>
        <section class="section-blog">
        <div class="wrap-post text-format">
            <?php the_content(); ?>
        </div>
        </section>

        <?php

    }}


?>

<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>