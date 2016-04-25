<?php
	// Load stylesheets and javascripts
	function load_resources() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-responsive.min', get_template_directory_uri() . '/css/bootstrap-responsive.min.css');
		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	}
add_action('wp_enqueue_scripts', 'load_resources');

// Register Widgets
function register_widget_areas() {

	register_sidebar( array(
		'name'          => 'Header',
		'id'            => 'header',
		'description'   => __( 'Add widgets here to appear in your header.', 'blank_theme' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Above Content',
		'id'            => 'above_content',
		'description'   => __( 'Add widgets here to appear just above your content.', 'blank_theme' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Below Content',
		'id'            => 'below_content',
		'description'   => __( 'Add widgets here to appear just below your content.', 'blank_theme' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left_sidebar',
		'description'   => __( 'Add widgets here to appear in your left sidebar.', 'blank_theme' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => 'right_sidebar',
		'description'   => __( 'Add widgets here to appear in your right sidebar.', 'blank_theme' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'description'   => __( 'Add widgets here to appear in your footer.', 'blank_theme' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'register_widget_areas', 'register_sidebar' );
