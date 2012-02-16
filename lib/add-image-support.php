<?php 
/*
* Set up a few WordPress theme options like image size and enables background iamge support
* @package h5b
*/ 

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images /*2011*/
	add_theme_support( 'post-thumbnails' );

	// Add Twenty Eleven's custom image sizes
	add_image_size( 'post-feature', 600, 400, true ); // Used for in post images on single, archive and taxonomy loops
	add_image_size( 'small-thumbnail', 120, 80 );     // used by widgets
	add_image_size( 'sidebar-full-width', 300, 200 ); // used by widgets

	// Add support for custom backgrounds
	add_custom_background();
