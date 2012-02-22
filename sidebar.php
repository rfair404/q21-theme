<?php 

/* 
* The Main Sidebar File
* @package q21
*/



if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Global Sidebar') ) ; 

if ( is_home() ) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) ; 
} elseif ( is_page() ) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ) ; 
} else {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) ; 
}
