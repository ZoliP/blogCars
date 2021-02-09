<?php 

//Adds dynamic title tag support set in Dashboard and the logo
function zoltan_theme_support() {

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'zoltan_theme_support');

//Add the menu set in Dashboard
function zoltan_menus(){

    $locations = array(
        'primary' => "Header primary menu",
        'footer' => " Footer menu"
    );

    register_nav_menus($locations);

}

add_action ('init', 'zoltan_menus');


//Adds style for the site
function zoltan_register_styles() {

    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('zoltan-style', get_template_directory_uri() . '/style.css', array('zoltan-bootstrap'), $version, 'all');
    wp_enqueue_style('zoltan-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '4.5.3', 'all');
    wp_enqueue_style('zoltan-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('zoltan-preconnectForFonts', "https://fonts.gstatic.com", array(), '1.0', 'all');
    wp_enqueue_style('zoltan-latoRegularFont', "https://fonts.googleapis.com/css2?family=Lato&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('zoltan-sansRegularFont', "https://fonts.googleapis.com/css2?family=PT+Sans&display=swap", array(), '1.0', 'all');
    
}

add_action('wp_enqueue_scripts', 'zoltan_register_styles');

?>