<?php

$heroimage = get_option('home_hero');

?>
<section class="section-hero" style="background-image: url(<?php echo esc_url( home_url() ); ?><?php echo $heroimage; ?>);">
    <div class="wrap">
        <h1 class="hero-title "><strong><span class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1s">s</span><span class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">p</span><span class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">l</span><span class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">a</span><span class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">s</span><span class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">h</span></strong><span class="wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1s">d</span><span class="wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">e</span><span class="wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="1s">v</span></h1>
        <p class="hero-text wow fadeInUp" data-wow-delay="1.1s">
            <?php _e('Making your business run smoother','splashdev') ?>
        </p>
        <a href="" class="btn-white btn-big open_modal wow fadeInUp" data-wow-delay="1.4s" data-modalclass="modal_contact_big"><?php _e('Contact Us','splashdev') ?></a>
    </div>

    <a href="" class="btn-go-next scroll_to icon-chev_down wow fadeIn" data-wow-delay="2s" data-href="top"></a>
</section>