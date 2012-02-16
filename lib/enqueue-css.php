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
		wp_register_style('q21-responsive-wide', Q21_CSS_URL.'/responsive-wide-desktop.css', '', Q21_VER, 'all and (min-width:1440px)');
		wp_register_style('q21-responsive-desktop', Q21_CSS_URL.'/responsive-desktop.css', '', Q21_VER, 'all and (max-width:1024px), (max-width:1440px)');
		wp_register_style('q21-responsive-ipad', Q21_CSS_URL.'/responsive-ipad.css', '', Q21_VER, 'screen and (max-device-width:768px) and (max-device-width:1024px)');
		wp_register_style('q21-responsive-iphone', Q21_CSS_URL.'/responsive-iphone.css', '', Q21_VER, 'screen and (max-device-width:480px)');
		wp_register_style('q21-responsive-handheld', Q21_CSS_URL.'/responsive-handheld.css', '', Q21_VER, 'screen and (max-width:480px), (max-width:320px)');
		wp_register_style('child-style', get_stylesheet_uri(), '', Q21_VER, 'all');
	endif;
}

add_action('wp_print_styles', 'Q21_initial_css');
function Q21_initial_css() {
	if(!is_admin()) :
		wp_enqueue_style('q21-html5boilerplate');
                if ( defined( 'Q21_COLORS' ) && Q21_COLORS === true ) 
                    wp_enqueue_style('q21-colors');
		if ( defined( 'Q21_RESPONSIVE' ) && Q21_RESPONSIVE === true ) {
                    wp_enqueue_style('q21-responsive');
                    wp_enqueue_style('q21-responsive-desktop');
                    wp_enqueue_style('q21-responsive-wide');
                    wp_enqueue_style('q21-responsive-ipad');
                    wp_enqueue_style('q21-responsive-iphone');
                    wp_enqueue_style('q21-responsive-handheld');
                }
                if ( defined( 'Q21_CHILD' ) && Q21_CHILD === true )
                    wp_enqueue_style('child-style');
	endif;
}
