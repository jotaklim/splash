<?php get_header(); ?>
<section class="section-hero" style="background-image: url(<?php echo esc_url(get_template_directory_uri());?>/assets/img/hero-image.jpg);">
    <div class="wrap">
        <div class="hero-title "><strong><?php _e('Error 404','splashdev') ?></strong></div>
        <p class="hero-text">
            <?php _e('Sorry, this page doesn\'t exist','splashdev') ?>
        </p>
        <a href="" class="btn-white btn-big open_modal" data-modalclass="modal_contact_big"><?php _e('Contact Us','splashdev') ?></a>
    </div>
</section>

</main>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>
