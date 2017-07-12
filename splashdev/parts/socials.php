<?php

$fb = get_option('fb');
$gp = get_option('gp');
$tw = get_option('tw');
$inst = get_option('inst');
$yt = get_option('yt');





?>

<div class="socials-list">
    <?php if(!empty($fb)) { ?>
        <a href="<?php echo $fb; ?>" target="_blank" class="soc-item icon-fb"></a>
    <?php } ?>
    <?php if(!empty($gp)) { ?>
        <a href="<?php echo $gp; ?>" target="_blank" class="soc-item icon-gp"></a>
    <?php } ?>
    <?php if(!empty($inst)) { ?>
        <a href="<?php echo $inst; ?>" target="_blank" class="soc-item icon-inst"></a>
    <?php } ?>
    <?php if(!empty($tw)) { ?>
        <a href="<?php echo $tw; ?>" target="_blank" class="soc-item icon-tw"></a>
    <?php } ?>
    <?php if(!empty($yt)) { ?>
        <a href="<?php echo $yt; ?>" target="_blank" class="soc-item icon-yt"></a>
    <?php } ?>
</div>
