<?php 

/*
* Enques our Javascript files
* @package q21
*/ 
add_action('init', 'q21_register_js');
function q21_register_js() {
	if(!is_admin()) :
		/* modernizer in the head, all else in the footer please (enqueue with "false" in array) */
		wp_register_script( 'modernizr', Q21_JS_URL . '/modernizr-2.0.6.min.js', array('jquery'), Q21_VER , false );

		/* js enqueed in footer */
		wp_register_script( 'q21-plugins', Q21_JS_URL . '/plugins.js', array('modernizr'), Q21_VER , true );
	endif;
}

add_action('wp_print_scripts', 'q21_print_js');
function q21_print_js() { 
	if(!is_admin()) :
		/* now load */		
		wp_enqueue_script( 'modernizr');
		wp_enqueue_script( 'q21-plugins');
	endif;
}
