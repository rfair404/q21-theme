<?php 

/*
 * Template Name: Blog
* The Blog Page File
* @package q21
* Maintain for WordPress theme structure compatability
*/

//if you want to make a custom blog page, have at it, but leave this parent theme alone

add_action('q21_before_loop', 'q21_blog_page_load_queryvar');
function q21_blog_page_load_queryvar() {
    global $wp_query; $saved = $wp_query;
        
    $args = array( 'posts_per_page' => 10, 'paged' => get_query_var('paged') );
    $args = wp_parse_args($args);
	
    query_posts( $args );
}
add_action('q21_after_loop', 'q21_blog_page_reset_queryvar');
function q21_blog_page_reset_queryvar() {
		$wp_query = $saved; wp_reset_query(); 
}

q21();



