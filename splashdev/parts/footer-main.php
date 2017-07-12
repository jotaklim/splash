</main>

<?php

$linkedin = get_option('linkedin');

?>

<footer class="mainfooter">
    <div class="wrap cf">
        <div class="fl">
            <div class="address-col">
                <div class="ac-title"><?php _e('Office in Vienna','splashdev') ?></div>
                <address>
                    1040, Johann-Strauss-Gasse 3<br/>
                    <a class="foot-tel" href="tel:+436643410475">+43 664 341 0475</a><br/>
                    10:00 - 19:00
                </address>
                <a href="" class="map-link open_modal show_map" data-latitude="48.189522" data-longitude="16.366266" data-modalclass="modal_map"><span class="icon-location"></span><?php _e('Show on map','splashdev') ?></a>
            </div>
            <div class="address-col">
                <div class="ac-title"><?php _e('Office in Bucharest','splashdev') ?></div>
                <address>

                    020011, Str. C.A. Rosetti 17, Sector 2<br/>
                    <a href="tel:+40757022541" class="foot-tel">+40 757 022 541</a><br/>
                    10:00 - 19:00
                </address>
                <a href="" class="map-link open_modal show_map" data-modalclass="modal_map"  data-latitude="44.441235" data-longitude="26.101086"><span class="icon-location"></span><?php _e('Show on map','splashdev') ?></a>
            </div>
        </div>
        <div class="fr">
            <div class="socials-list">
                <?php if(!empty($linkedin)) { ?>
                    <a href="<?php echo $linkedin; ?>" target="_blank" class="soc-item icon-linkedin"></a>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>