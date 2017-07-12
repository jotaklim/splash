<div id="mobileMenu" class="mobile-menu">
    <ul>
        <li><a class="scroll_to" data-href="weoffer" href="<?php echo esc_url( home_url( '/' ) ); ?>#weoffer"><?php _e('What we do','splashdev') ?></a></li>
    </ul>
    <?php include 'main_menu.php'; ?>
    <a href="" class="btn-basecolor open_modal" data-modalclass="modal_contact_big"><?php _e('Contact Us','splashdev') ?></a>
    <?php if( function_exists( 'qtranxf_getLanguage' ) )
    { ?>
    <div class="mm-title"><?php _e('Choose your language','splashdev') ?>:</div>
    <div class="mm-lang-list">
        <?php qtranxf_generateLanguageSelectCode(short); ?>
    </div>
    <?php } ?>
</div>
<?php

$phoneNum = get_option('phonenum_head');

?>
<div class="header-wrap" data-id="top">
    <header class="mainheader cf">
        <div class="fl">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo@2x.png 2x" alt="splashdev logo"></a>
            <ul class="mainmenu mainmenu-home">
                <li class=""><a  class="scroll_to" data-href="weoffer"  href="<?php echo esc_url( home_url( '/' ) ); ?>#weoffer"><?php _e('What we do','splashdev') ?></a></li>
            </ul>
            <?php include 'main_menu.php'; ?>
        </div>
        <div class="fr">
            <?php if(!empty($phoneNum)) { ?>
            <a href="tel:<?php echo $phoneNum; ?>" class="phone-num"><?php echo $phoneNum; ?></a>
            <?php } ?>

            <?php if( function_exists( 'qtranxf_getLanguage' ) )
            { ?>
            <div class="lang-switcher lang_switcher">
                <div class="current-lang open_langlist">
                    <?php echo qtranxf_getLanguage(); ?>
                </div>

                <?php qtranxf_generateLanguageSelectCode(short); ?>
            </div>
            <?php } ?>
            <a href="" class="btn-basecolor open_modal" data-modalclass="modal_contact_big"><?php _e('Contact Us','splashdev') ?></a>
            <div class="hamburger hamburger--elastic fl" id="openMobileMenu">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>

        </div>

    </header>
</div>