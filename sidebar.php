<?php /*the sidebar files*/

if ( function_exists('h5b_menu') ) h5b_menu('sidebar_primary', 'sidebar-primary'); 


if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Global Sidebar') ) ; 


if ( function_exists('h5b_menu') ) h5b_menu('sidebar_secondary', 'sidebar-secondary'); 
