<?php get_header(); ?>
<?php include 'parts/header-float.php'; ?>

    <section class="section-blog ">
        <div class="wrap">
            <h2 class="title-2 mb100">
                <?php _e('Blog','splashdev') ?>
            </h2>
            <div class="grid-row ">

<?php if ( have_posts() ) : ?>


    <?php
    // Start the Loop.
    while ( have_posts() ) : the_post();
        $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-big');

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */?>
        <div  class="col-post-3 post-excerpt ">
            <a href="<?php echo get_permalink(); ?>" class="img-cont" style="background-image: url(<?php echo $url[0]; ?>)"></a>
            <h3 class="post-excerpt-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
        </div>


            <?php
        // End the loop.
    endwhile;


endif;
?>
            </div>

        </div>
        <div class="tac">
            <a href="" class="btn-basecolor btn-middle " ><?php _e('Load more...','splashdev') ?></a>
        </div>

    </section>

<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>