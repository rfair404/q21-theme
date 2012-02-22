<?php 
/*
* Enques our CSS files
* @package q21
*/ 

add_action('init', 'Q21_register_css');
function Q21_register_css() {

	if(!is_admin()) :
		wp_register_style('q21-html5boilerplate', Q21_CSS_URL.'/html5boilerplate.css', '', Q21_VER, 'all');
                wp_register_style('q21-colors', Q21_CSS_URL.'/colors.css', '', Q21_VER, 'all');
		wp_register_style('q21-responsive', Q21_CSS_URL.'/responsive.css', '', Q21_VER, 'all');
		wp_register_style('child-style', get_stylesheet_uri(), '', Q21_VER, 'all');
	endif;
}

add_action('wp_print_styles', 'Q21_initial_css');
function Q21_initial_css() {
	if(!is_admin()) :
		wp_enqueue_style('q21-html5boilerplate');
                if ( defined( 'Q21_COLORS' ) && Q21_COLORS === true ) 
                    wp_enqueue_style('q21-colors');
		if ( defined( 'Q21_RESPONSIVE' ) && Q21_RESPONSIVE === true ) 
                    wp_enqueue_style('q21-responsive');
                if ( defined( 'Q21_CHILD' ) && Q21_CHILD === true )
                    wp_enqueue_style('child-style');
	endif;
}
