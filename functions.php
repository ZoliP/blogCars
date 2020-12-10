<?php 
function zoltan_register_styles() {
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('zoltan-style', get_template_directory_uri() . '/style.css', array('zoltan-bootstrap'), $version, 'all');
    wp_enqueue_style('zoltan-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '4.5.3', 'all');
    wp_enqueue_style('zoltan-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'zoltan_register_styles');

?>