<?php
if ( has_nav_menu( 'primary-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container_class' => 'mainmenu'
    ) );
}
?>




