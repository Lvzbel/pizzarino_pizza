<?php 

// Enqueue Styles and Scripts
function add_theme_scripts() {
  // BooStrap
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '4.5.0', 'all');

  wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array ('jquery'), '1.0.0', true);
  // Vendor CSS
  wp_enqueue_style( 'vendor_styles', get_template_directory_uri() . '/dist/vendor.css', array(), '1.0.0', 'all');
  // Custom Styles CSS
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/app.css', array('vendor_styles'), '1.0.0', 'all');
  // Cusom JavaScript
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/app.js', array (), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Enable extra features
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'Pizzarino' ),
) );