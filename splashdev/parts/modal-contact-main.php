<div class="modal_cont modal_contact_big modal-contact-big form_home">

    <a href="index.html" class="logo"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo.png" srcset="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo.png 1x, <?php echo esc_url(get_template_directory_uri());?>/assets/img/logo@2x.png 2x" alt=""></a>
    <span class="hide_modal close-icon"></span>
    <div class="form-contact-big form_steps" >
        <div class="steps-row">
            <div class="step-item "><div class="circle">1</div></div>
            <div class="step-item"><div class="circle">2</div></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="58" title="Home page popup"]'); ?>
    </div>
</div>