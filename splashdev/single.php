<?php get_header(); ?>
<?php include 'parts/header-float.php'; ?>

    <section class="section-blog">
        <div class="wrap-post text-format">
            <h1 class="title-4 ">
                <?php echo the_title(); ?>
            </h1>
            <div class="img-main">
                <?php echo the_post_thumbnail('full'); ?>
            </div>

            <?php

            if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
            endif; ?>


            <?php echo do_shortcode('[mc4wp_form id="70"]'); ?>




        </div>

    </section>

<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>