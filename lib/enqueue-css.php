<?php add_action('wp_print_styles', 'h5b_initial_css');
function h5b_initial_css() {
	if(!is_admin()) :
		wp_register_style('h5b-initial', H5B_CSS_URL.'/h5b.css', '', H5B_VER, 'all');
		wp_register_style('h5b-responsive', H5B_CSS_URL.'/responsive.css', '', H5B_VER, 'all');
		wp_register_style('child-style', get_stylesheet_uri(), '', H5B_VER, 'all');
		
		wp_enqueue_style('h5b-initial');
		wp_enqueue_style('h5b-responsive');
		wp_enqueue_style('child-style');
	endif;
}
