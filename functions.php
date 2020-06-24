<?php 

function laadStijlblad() {
    wp_enqueue_style( 'stijl', get_stylesheet_uri() );
}

add_action('init', 'laadStijlblad');

function registreer_menu() {
    $argumenten = array(
        'hoofd-menu' => __('Hoofd menu')
    );
    register_nav_menus();
}
add_action('init', 'registreer_menu');
?>