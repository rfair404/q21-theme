<?php 

/*
* Enques our Javascript files
* @package h5b
*/ 
add_action('init', 'h5b_register_js');
function h5b_register_js() {
	if(!is_admin()) :
		/* modernizer in the head, all else in the footer please (enqueue with "false" in array) */
		wp_register_script( 'modernizr', H5B_JS_URL . '/modernizr-2.0.6.min.js', array('jquery'), H5B_VER , false );

		/* js enqueed in footer */
		wp_register_script( 'h5b-plugins', H5B_JS_URL . '/plugins.js', array('modernizr'), H5B_VER , true );
	endif;
}

add_action('wp_print_scripts', 'h5b_print_js');
function h5b_print_js() { 
	if(!is_admin()) :
		/* now load */		
		wp_enqueue_script( 'modernizr');
		wp_enqueue_script( 'h5b-plugins');
	endif;
}
