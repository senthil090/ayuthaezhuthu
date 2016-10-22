<?php
function ayuthaEzhuthuFoundationScripts()
 {
wp_enqueue_script( 'supermanquery', get_template_directory_uri() . '/public/materialkit/js/jquery.min.js' );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/public/materialkit/js/bootstrap.min.js' );
wp_enqueue_script( 'AeFScript', get_template_directory_uri() . '/public/js/ayuthaEzhuthuFoundation.js' );
wp_enqueue_script( 'materialkit', get_template_directory_uri() . '/public/materialkit/js/material-kit.js' );
wp_enqueue_script( 'materialkitmin', get_template_directory_uri() . '/public/materialkit/js/material.min.js' );
wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/public/materialkit/css/bootstrap.min.css' );
wp_enqueue_style( 'fa_style', get_template_directory_uri() . '/public/fontawesome/css/font-awesome.min.css' );
wp_enqueue_style( 'materialkit', get_template_directory_uri() . '/public/materialkit/css/material-kit.css' );
}
add_action( 'wp_enqueue_scripts', 'ayuthaEzhuthuFoundationScripts' );
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size(250,250,true);
add_theme_support( 'menus' );
function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');
?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
add_theme_support( 'html5', array( 'search-form' ) );



?>