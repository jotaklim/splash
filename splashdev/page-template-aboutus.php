<?php /* Template Name: About Us */ ?>
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
        <section class="section-bottom-triang sect-less-padding">
            <div class="wrap-post">
            <?php the_content(); ?>
                <h2 class="title-3 wow fadeInUp" data-wow-delay="0">
                    <?php _e('Meet the team','splashdev') ?>
                </h2>
            </div>
        </section>

        <?php

    }}


?>
    <section class="section-meettheteam">
        <div class="wrap">
            <div class="meettheteam-list">
                <div class="mt-item wow fadeInUp" data-wow-delay=".1s">
                    <div class="img-cont" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/img/team1.jpg')"></div>
                    <div class="name">Hans Kort</div>
                    <div class="position"><?php _e('Founder and CEO','splashdev') ?></div>
                    <div class="c-inf-block">
                        <div class="contact-inf"><a class="contact-tel" href="tel:+40751513874">+40 751 513 874</a></div>
                        <div class="contact-inf"><a class="contact-tel" href="tel:+43 664 230 1788">+43 664 230 1788</a></div>
                        <div class="contact-inf"><a class="contact-mail" href="mailto:hanskort@splashdev.at">hanskort@splashdev.at</a></div>
                        <div class="contact-inf"><a class="contact-skype" href="skype:hans_kort?chat">skype: hans_kort</a></div>
                    </div>
                </div>
                <div class="mt-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="img-cont" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/img/team3.jpg')"></div>
                    <div class="name">Marc Breit</div>
                    <div class="position"><?php _e('Managing Partner','splashdev') ?></div>
                    <div class="c-inf-block">
                    <div class="contact-inf"><a class="contact-tel" href="tel:+43-664-341-04-75">+43 664 341 04 75</a></div>
                    <div class="contact-inf"><a class="contact-mail" href="mailto:marcbreit@splashdev.at">marcbreit@splashdev.at</a></div>
                    <div class="contact-inf"><a class="contact-skype" href="skype:marc.breit.splash!?chat">skype: marc.breit.splash!</a></div>
                    </div>
                </div>
                <div class="mt-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="img-cont" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/img/team2.jpg')"></div>
                    <div class="name">Juliana Klimiuk</div>
                    <div class="position"><?php _e('Marketing Director','splashdev') ?></div>
                    <div class="c-inf-block">
                    <div class="contact-inf"><a class="contact-mail" href="mailto:jotaklim@splahdev.at">jotaklim@splahdev.at</a></div>
                    <div class="contact-inf"><a class="contact-skype" href="skype:jurocha1983?chat">skype: jurocha1983</a></div>
                    </div>
                </div>
                <!---
                <div class="mt-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="img-cont" style="background-image: url('<?php //echo esc_url(get_template_directory_uri());?>/assets/img/team4.jpg')"></div>
                    <div class="name">Daniela Ionesti</div>
                    <div class="position">Senior Consultant</div>
                    <div class="c-inf-block">
                    <div class="contact-inf"><a class="contact-mail" href="mailto:danielaionesti@splashdev.at">danielaionesti@splashdev.at</a></div>
                    <div class="contact-inf"><a class="contact-skype" href="skype:danielaionesti?chat">skype: danielaionesti</a></div>
                    </div>
                </div>
                <div class="mt-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="img-cont" style="background-image: url('<?php //echo esc_url(get_template_directory_uri());?>/assets/img/team5.jpg')"></div>
                    <div class="name">Florin Dumitru</div>
                    <div class="position">Senior Consultant</div>
                    <div class="c-inf-block">
                    <div class="contact-inf"><a class="contact-mail" href="mailto:florindumitru@splashdev.at">florindumitru@splashdev.at</a></div>
                    <div class="contact-inf"><a class="contact-skype" href="skype:florindumitru?chat">skype: florindumitru</a></div>
                    </div>
                </div>
                ---->

            </div>
        </div>
    </section>
<?php include 'parts/footer-main.php'; ?>
<?php include 'parts/preloader.php'; ?>
<?php include 'parts/modal-map.php'; ?>
<?php include 'parts/modal-contact-main.php'; ?>
<?php get_footer(); ?>