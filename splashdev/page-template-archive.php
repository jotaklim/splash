<?php /* Template Name: Archive */ ?>
<?php get_header(); ?>
<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>8, 'paged'  => $paged,));
$counter = 0;
?>



<?php include 'parts/header-float.php'; ?>
    <section class="section-blog sb-bg-triangle post-on-grey">
        <div class="wrap">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();?>
                <h2 class="title-2 ">
                <?php the_title(); ?>
                </h2>
                <div class="intro-page-txt mb100">
                    <?php  the_content(); ?>
                </div>



                <?php endwhile;
            ?>

            <div class="grid-row ">
                <?php if ( $wpb_all_query->have_posts() ) : ?>



                        <!-- the loop -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
                            $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-big');

                        ?>
                        <?php $counter++; if( !$paged && $counter <= 2) :?>

                            <div  class="col-post-2 post-excerpt big">
                                <a href="<?php echo get_permalink(); ?>" class="img-cont" style="background-image: url(<?php echo $url[0]; ?>)"></a>
                                <h3 class="post-excerpt-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                            </div>

                         <?php else :?>
                            <?php endif;?>
                        <?php endwhile; ?>
            </div>
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            <?php echo do_shortcode('[ajax_load_more id="ajax_loadmore_page" container_type="div" css_classes="grid-row" post_type="post" posts_per_page="6" scroll="false" offset="2" button_label="Load more..." button_loading_label="Load more..."]'); ?>
        </div>


    </section>
<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>