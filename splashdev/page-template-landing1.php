<?php /* Template Name: Landing (Pop-up contact form) */ ?>
<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

        $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        ?>

    <section class="section-landing landing-type1 section-hero" style="background-image: url(<?php echo $url[0]; ?>)">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-white.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-white.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-white@2x.png 2x" alt=""></a>
        <div class="wrap">
            <h1 class="hero-title wow fadeInUp" data-wow-delay="1s"><strong><?php the_title(); ?></strong></h1>
            <div class="hero-text wow fadeInUp" data-wow-delay="1.1s">
                <?php the_content(); ?>
            </div>
            <a href="" class="btn-white btn-big open_modal wow fadeInUp" data-wow-delay="1.4s" data-modalclass="modal_contact_big2"><?php _e('Get Report','splashdev') ?></a>

        </div>
    </section>
        <?php

    }}


?>

    </main>

<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-contact-landing.php'; ?>
<?php get_footer(); ?>