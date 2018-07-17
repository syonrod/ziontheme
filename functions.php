<?php 
/*=============================================
=            Include scripts 	            =
=============================================*/
function portfolio_script_enqueue()
{
	//CSS
	wp_enqueue_style( 'bootstrapstyle' , get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), '3.3.4', 'all');
	wp_enqueue_style( 'materializestyle' , get_template_directory_uri() . '/assets/css/materialize.min.css' , array(), '1.0.0', 'all');
	wp_enqueue_style( 'customstyle' , get_template_directory_uri() . '/assets/css/styles.css' , array(), '1.0.0', 'all');
	//JS
	wp_enqueue_script( 'customjquery' , get_template_directory_uri() . '/assets/js/jquery.js' , array(), '3.3.1', true);
	wp_enqueue_script( 'materializejs' , get_template_directory_uri() . '/assets/js/materialize.min.js' , array(), '1.0.0', true);
	wp_enqueue_script( 'bootstrapjs' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array(), '3.3.4', true);
	wp_enqueue_script( 'customjs' , get_template_directory_uri() . '/assets/js/main.js' , array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_script_enqueue');


/*=============================================
=            Active menus 	            =
=============================================*/
function portfolio_theme_setup()
{
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'portfolio_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));


// function custom_excerpt_length( $length ) {
// 	return 20;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function pietergoosen_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '<a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&hellip;' . __( 'Read more &nbsp;&raquo;', 'pietergoosen' ) . '</a>');
}
 ?>