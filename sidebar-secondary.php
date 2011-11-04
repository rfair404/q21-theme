<?php /*the sidebar files*/

if ( is_home() ) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) ; 
} elseif ( is_page() ) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ) ; 
} else {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) ; 
}

//lollypop? if ( function_exists('h5b_menu') ) h5b_menu('sidebar_secondary', 'sidebar-secondary'); 
