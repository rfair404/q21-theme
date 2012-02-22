<?php
/*
* The loop part for everything BUT single, e.g. archives, tags, etc
* @package q21
*/
do_action('q21_before_loop');
	if ( have_posts() ) : 
		do_action('q21_loop_has_posts');
		while ( have_posts() ) : the_post(); // start the WordPress loop 
			do_action('q21_before_each_post'); 
			do_action('q21_each_post');
			do_action('q21_after_each_post'); 	
		endwhile; /** end of one post **/ 
		do_action('q21_loop_after_posts');
	else :do_action('q21_loop_empty'); /** if no posts exist **/ 	
	endif; /** end loop **/ 
do_action('q21_after_loop');
