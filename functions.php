<?php


function cw_business_lite_setup() {
    global $content_width;
    require_once ( 'includes/custom-functions.php' );
    require_once ( 'includes/customizer.php' );

    if ( ! isset( $content_width ) ) $content_width = 634;

	load_theme_textdomain( 'cw-business-lite', get_template_directory() . '/languages' );
    add_theme_support( 'post-thumbnails' ); /* Post Thumbnails */

    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'cw_business_lite_setup' );


/**
 *  WP Enqueue Style
 */
function cw_business_lite_wp_enqueue_style() {
    wp_enqueue_style( 'cw_business_lite_style', get_stylesheet_uri(), array(), '1.0' );
    if ( is_rtl() ) {
        wp_enqueue_style( 'cw_business_lite_rtl', get_template_directory_uri() . '/css/rtl.css', array(), '1.0' );
    }
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'cw_business_lite_scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery','jquery-masonry','carouFredSel' ), '1.0', true );
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}

add_action( 'wp_enqueue_scripts', 'cw_business_lite_wp_enqueue_style' );

function cw_business_lite_navigation_menu() {

	$locations = array(
		'top-menu' => __( 'This menu will appear in header.', 'cw-business-lite' ),
	);
	register_nav_menus( $locations );

}

add_action( 'init', 'cw_business_lite_navigation_menu' );

function cw_business_lite_sidebar() {

	$args = array(
		'id'            => 'general_sidebar',
		'name'          => __( 'General Sidebar', 'cw-business-lite' ),
		'description'   => __( 'This sidebar will appear in blog page.', 'cw-business-lite' ),
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

    $args = array(
        'id'            => 'footer_sidebar',
        'name'          => __( 'Footer Sidebar', 'cw-business-lite' ),
        'description'   => __( 'This sidebar will appear in footer.', 'cw-business-lite' ),
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="footer-one-widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}

add_action( 'widgets_init', 'cw_business_lite_sidebar' );

 
function cw_business_lite_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'cw-business-lite' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'cw_business_lite_wp_title', 10, 2 ); 