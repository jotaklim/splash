<?php /* Template Name: Landing (Contact form on the page) */ ?>
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
            <a href="" class="btn-white btn-big scroll_to wow fadeInUp" data-wow-delay="1.4s" data-href="contact_form">Get Report</a>

        </div>
    </section>
        <?php

    }}


?>
    <section class="section-blog form_landing" data-id="contact_form">
        <div class="wrap">
            <div class="form-contact-big form_steps" >

                    <div class="title-3 hide_on_submit"><?php _e('GET THE REPORT','splashdev') ?></div>
                    <?php echo do_shortcode('[contact-form-7 id="58" title="Home page popup"]'); ?>

            </div>
        </div>
    </section>
   

<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>

<?php get_footer(); ?>