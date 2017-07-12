<?php get_header(); ?>
<?php include 'parts/section-hero.php'; ?>
<?php include 'parts/header-float.php'; ?>

    <section class="section-bottom-triang" data-id="weoffer" id="weoffer">
        <div class="wrap">
            <h2 class="title-2  wow fadeInUp" data-wow-delay="0">
                <?php _e('We offer','splashdev') ?>
            </h2>

            <div class="grid-row feat-row" data-id="soft_implement">
                <div class="grid-2 wow fadeInLeft">
                    <div class="feat-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/svg/softwareimplement.svg" alt="">
                    </div>
                </div>
                <div class="grid-2 wow fadeInRight">
                    <div class="feat-desc">
                        <h3 class="title-3"><?php _e('ERP and CRM implementation','splashdev') ?></h3>
                        <p>
                            <?php _e('8 out of 10 companies are currently implementing a business management software. By bringing SplashDev on board as your implementation services partner, you ensure your CRM implementation and your ERP implementation are a success. We help you to determine which is the best CRM or best ERP for your business and complete implementations of Microsoft Dynamics, Charisma Business Suite, Salesforce or HubSpot CRM on time and on budget.','splashdev'); ?>
                        </p>
                    </div>
                </div>

            </div>
            <div class="grid-row feat-row" data-id="pm">


                <div class="grid-2 wow fadeInLeft">
                    <div class="feat-desc">
                        <h3 class="title-3"><?php _e('Project management','splashdev') ?></h3>
                        <p>
                            <?php _e('Digitalization is the restructuring of a business through the use of digital technologies. You can only digitalize a business after digitizing its processes and information sources. SplashDev helps companies in the financial services and utilities sectors to go digital. Our consultants translate needs into technical requirements, making sure your investment in software brings measurable business results.','splashdev') ?>
                        </p>
                    </div>
                </div>
                <div class="grid-2 wow fadeInRight">
                    <div class="feat-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/svg/projectmanagement.svg" alt="">
                    </div>
                </div>

            </div>
            <div class="grid-row feat-row" data-id="soft_dev">

                <div class="grid-2 wow fadeInLeft">
                    <div class="feat-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/svg/softwaredev.svg" alt="">
                    </div>
                </div>
                <div class="grid-2 wow fadeInRight">
                    <div class="feat-desc">
                        <h3 class="title-3"><?php _e('Software development','splashdev') ?></h3>
                        <p>
                            <?php _e('You have an ERP system or CRM in place and need to connect it to other applications? You want to reap real benefits from your Microsoft CRM and to launch an online POS? Or do you need to connect your own web app to Salesforce services? Our developers can bring to life the custom features you envision for your business software. Focus on what you do best and let SplashDev take care of the technology stack.','splashdev') ?>
                        </p>
                    </div>
                </div>

            </div>
            <div class="grid-row feat-row" data-id="bus_dev">

                <div class="grid-2 wow fadeInLeft">
                    <div class="feat-desc">
                        <h3 class="title-3"><?php _e('business development','splashdev') ?></h3>
                        <p>
                            <?php _e('If your current challenge is getting more leads and getting better qualified leads, we can help you. We score leads according to their need for change and their fit to your business in terms of size, role and industry. We also offer interim management in the areas of business development, restructuring and change management.','splashdev') ?>
                        </p>
                    </div>
                </div>
                <div class="grid-2 wow fadeInRight">
                    <div class="feat-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/svg/busdev.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section-simple">
        <div class="wrap tac">
            <a href="" class="btn-basecolor btn-big open_modal wow fadeIn" data-modalclass="modal_contact_big" data-wow-delay="0"><?php _e('Contact Us','splashdev') ?></a>
        </div>
    </section>

    <section class="section-top-triang">
        <div class="wrap">
            <h2 class="title-3 wow fadeInUp" data-wow-delay="0">
                <?php _e('Partners','splashdev') ?>
            </h2>
            <div class="partners-list wow fadeInUp" data-wow-delay="0">

                <?php
                $args = array( 'post_type' => 'partners', 'posts_per_page' => -1 );
                $the_query = new WP_Query( $args );
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="pl-item">
                        <?php the_post_thumbnail();?>
                    </div>
                        <?php wp_reset_postdata(); ?>

                    <?php endwhile; ?>
                    <?php endif; ?>

            </div>
        </div>
    </section>

<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>