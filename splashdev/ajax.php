<?php
add_action( 'wp_ajax_get_postinfo', 'get_postinfo' );
add_action( 'wp_ajax_nopriv_get_postinfo', 'get_postinfo' );
function get_postinfo() {
    if (isset($_POST['postid'])){
        $postid = $_POST['postid'];
    }

    $res = '<h2 class="rightcard-title">'.get_the_title($postid).'</h2>';


    echo $res;

}


?>
<?php //if (have_posts()) : ?>
<?php //while (have_posts()) : the_post(); ?>
<!---->
<h2 class="rightcard-title"><?php echo get_the_title($postid); ?> </h2>

<p>
    Some short text that explains that this project is very cool and awesome and what we did for this
    project, for example
    <a href="">Frond-end</a> and <a href="">Responsive design</a>
</p>

<div class="example-links">
    <div class="rightcard-title-small">Try our work:</div>
    <ul class="">
        <li><a target="_blank" href="">Main page</a></li>
        <li><a target="_blank" href="">Archive page</a></li>
        <li><a target="_blank" href="">Single page</a></li>
        <li><a target="_blank" href="">Contacts page</a></li>
    </ul>
    <ul class="">
        <li><a target="_blank" class="livesite" href=""><strong>See live website</strong></a></li>
    </ul>
</div>

<div class="tags-block">
    <div class="rightcard-title-small">Technologies we used:</div>
    <ul class="tags-list">
        <li><a target="_blank" href="">HTML5</a></li>
        <li><a target="_blank" href="">CSS3</a></li>
        <li><a target="_blank" href="">JavaScript</a></li>
        <li><a target="_blank" href="">jQuery</a></li>
        <li><a target="_blank" href="">Google Maps API</a></li>
    </ul>
</div>
<!--    --><?php //endwhile; ?>
<?php //endif; ?>
