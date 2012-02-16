<?php

/*
* @package q21
* This file contains the functions that are required for child themes to use q21.
 * 
 */

add_action('Q21_before_init', 'Q21_preload_constants');

function Q21_preload_constants() {
    
/*First THEME CONSTANTS HERE  **/
define( 'Q21_NAME', 'q21' );
define( 'Q21_URL', get_template_directory_uri() );
define( 'Q21_DIR', get_template_directory() );
define( 'Q21_LIB_DIR', Q21_DIR.'/lib' );
define( 'Q21_CSS_URL', Q21_URL.'/lib/css' );
define( 'Q21_JS_URL', Q21_URL.'/lib/js' );
define( 'Q21_IMG_URL', Q21_URL.'/images' );
define( 'Q21_VER', '025' ); /* for enquing cachable files */
define( 'Q21_TRANS_VER', '025' ); /* for transiend cache clearing capability */

define( 'CHILD_URL', get_stylesheet_directory_uri() );
define( 'CHILD_DIR', get_stylesheet_directory() );

}

add_action('Q21_before_init', 'Q21_load_helperfiles');
function Q21_load_helperfiles(){

/*include out options page*/
include_once( Q21_DIR . '/theme-options.php' );

/*set featured images sizes*/
include_once( Q21_LIB_DIR . '/add-image-support.php' );

/*set post types, formats and taxonomies*/
include_once( Q21_LIB_DIR . '/post-types-formats-and-taxonomies.php' );

/*set featured images sizes*/
include_once( Q21_LIB_DIR . '/sidebars.php' );

/*set featured images sizes*/
include_once( Q21_LIB_DIR . '/nav-menus.php' );

/*enqueue javascript libraries*/
include_once( Q21_LIB_DIR . '/enqueue-js.php' );

/*enqueue css libraries*/
include_once( Q21_LIB_DIR . '/enqueue-css.php' );

/*Adds all of the html5 boilerplate html markup to q21*/
include_once( Q21_LIB_DIR . '/q21-markup.php' );

/*Adds all of the html5 boilerplate html markup to q21*/
//include_once( Q21_LIB_DIR . '/q21-markup.php' );

}

add_action('Q21_init', 'Q21_load_q21');
function Q21_load_q21() {
	/** Load Framework */
	require_once( Q21_LIB_DIR . '/q21-core.php' );
}

do_action('Q21_before_init');
do_action('Q21_init');
do_action('Q21_child_init');

