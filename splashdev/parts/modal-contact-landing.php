<div class="modal_cont modal_contact_big2 modal-contact-big form_landing">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo@2x.png 2x" alt=""></a>

    <span class="hide_modal close-icon"></span>
    <div class="form-contact-big form_steps">
        <div class="title-3 hide_on_submit"><?php _e('GET THE REPORT','splashdev') ?></div>
        <?php echo do_shortcode('[contact-form-7 id="58" title="Home page popup"]'); ?>
    </div>
</div>