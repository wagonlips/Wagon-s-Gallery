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

/*-----------------------------------------------------------------------------
	Install Options - Not implemented yet
-----------------------------------------------------------------------------
if (!get_option('blueprint_installed')) {

	add_option('blueprint_installed',
						 $current, 
						 'This options simply tells me if K2 has been installed before', 
						 $autoload);

	add_option('blueprint_aboutblurp', 
						 'Enter your about text', 
						 'Allows you to write a small blurp about you and your blog, which will be put on the frontpage', 
						 $autoload);

	add_option('blueprint_columns', 
						 '12', 
						 'The number of columns across the page (default is 12)', 
						 $autoload);

	add_option('blueprint_columns_content',
						 '9', 
						 'Number of columns the content (left side) takes up (default is 9, this and sidebar must add up to total column number)',
							$autoload);

	add_option('blueprint_column_sidebar',
						 '3', 
						'Number of columns the sidebar (right side) takes up (default is 3, this and left column must add up to total column number)',
						$autoload);

	add_option('blueprint_show_author',
						 '0', 
						'Show the author on posts? (Default: no)',
						$autoload);

	add_option('blueprint_show_tagline',
						 '0', 
						'Show the tagline under the site title? (Default: no)',
						$autoload);

}
*/

?>
