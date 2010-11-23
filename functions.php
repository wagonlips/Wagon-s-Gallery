<?php

/*-----------------------------------------------------------------------------
	Widget Support
-----------------------------------------------------------------------------*/
function wagons_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'wagons' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'wagons' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'wagons' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'wagons' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the header. Empty by default.
	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'wagons' ),
		'id' => 'widgets-top',
		'description' => __( 'The header widget area', 'wagons' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
/** Register sidebars by running wagons_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'wagons_widgets_init' );


/*-----------------------------------------------------------------------------
	Display Post Template
-----------------------------------------------------------------------------*/
function getPost($post = NULL) {
	include('post.php');
}

/* function to add new fields to the user profile page in dashboard */
function my_new_contactmethods( $contactmethods ) {
    // Add Twitter
    $contactmethods['twitter'] = 'Twitter';
    //add Facebook
    $contactmethods['facebook'] = 'Facebook';

    return $contactmethods;
}
/* function to add new fields to the user profile page in dashboard */
add_filter('user_contactmethods','my_new_contactmethods',10,1);

/* Add a proper menu. */
function register_my_menus() {
  register_nav_menus( array( 'header-menu' => __( 'Header Menu' )));
}
/* Register the menu. */
add_action( 'init', 'register_my_menus' );
