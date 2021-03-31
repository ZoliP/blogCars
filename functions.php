<?php 

//Adds dynamic title tag support set in Dashboard and the logo
function zoltan_theme_support() {

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    // add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    add_image_size('post-image', 770, 440, true);
    add_image_size('hero-image-01', 360, 560, true);
    add_image_size('hero-images', 360, 265, true);
    add_image_size('gallery-widget', 130, 130, true);
    add_image_size('popular', 270, 195, true);
    add_image_size('most-popular', 262, 189, true);
    add_image_size('footer-recent', 95, 95, true);

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


//Adds scripts for the site
function zoltan_register_scripts() {
    
    wp_enqueue_script('zoltan-jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
    wp_enqueue_script('zoltan-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '3.5.1', true);
    wp_enqueue_script('zoltan-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js", array(), '3.5.1', true);

}

add_action('wp_enqueue_scripts', 'zoltan_register_scripts');

function zoltan_widget_areas(){

    register_sidebar(
        array(
            'name' => 'Sidebar Area Gallery',
            'id' => 'sidebar-1',
            'description' => 'For Instagram Gallery',
            'before_title' => '<h6>',
            'after_title' => '</h6>',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
    register_sidebar(
        array(
            'name' => 'Sidebar Area Tags',
            'id' => 'sidebar-2',
            'description' => 'For Tags',
            'before_title' => '<h6>',
            'after_title' => '</h6>',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
    
    register_sidebar(
        array(
            'name' => 'Footer Area Short Description',
            'id' => 'footer-1',
            'description' => 'Description about the blog',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
    register_sidebar(
        array(
            'name' => 'Footer Area Social',
            'id' => 'footer-2',
            'description' => 'Keep in Touch',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
            'before_widget' => '<div class="social">',
            'after_widget' => '</div>',
        )
        );
}

add_action('widgets_init', 'zoltan_widget_areas');



function zoltan_custom_wpp_update_postviews($postid) {
	// Accuracy:
	//   10  = 1 in 10 visits will update view count. (Recommended for high traffic sites.)
	//   30 = 30% of visits. (Medium traffic websites)
	//   100 = Every visit. Creates many db write operations every request.

	$accuracy = 50;

	if ( function_exists('wpp_get_views') && (mt_rand(0,100) < $accuracy) ) {
		// Remove or comment out lines that you won't be using!!
		update_post_meta( $postid, 'views_total',   wpp_get_views( $postid, 'all', false )            );
		update_post_meta( $postid, 'views_daily',   wpp_get_views( $postid, 'daily', false )   );
		// update_post_meta( $postid, 'views_weekly',  wpp_get_views( $postid, 'weekly', false )  );
		// update_post_meta( $postid, 'views_monthly', wpp_get_views( $postid, 'monthly', false ) );
	}
}

/* Storing views of different time periods as meta keys */
add_action( 'wpp_post_update_views', 'zoltan_custom_wpp_update_postviews' );

?>