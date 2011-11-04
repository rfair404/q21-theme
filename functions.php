<?php /* functions.php */

/*First THEME CONSTANTS HERE  **/

define( 'H5B_URL', get_template_directory_uri() );
define( 'H5B_DIR', get_template_directory() );
define( 'H5B_LIB_DIR', H5B_DIR.'/lib' );
define( 'H5B_CSS_URL', H5B_URL.'/css' );
define( 'H5B_JS_URL', H5B_URL.'/js' );
define( 'H5B_VER', '007' ); /* for enquing cachable files */
define( 'H5B_TRANS_VER', '007' ); /* for transiend cache clearing capability */

/*set featured images sizes*/
include_once( H5B_LIB_DIR . '/add-image-support.php' );

/*set post types, formats and taxonomies*/
include_once( H5B_LIB_DIR . '/post-types-formats-and-taxonomies.php' );

/*set featured images sizes*/
include_once( H5B_LIB_DIR . '/sidebars.php' );

/*set featured images sizes*/
include_once( H5B_LIB_DIR . '/nav-menus.php' );

/*enqueue javascript libraries*/
include_once( H5B_LIB_DIR . '/enqueue-js.php' );

/*enqueue css libraries*/
include_once( H5B_LIB_DIR . '/enqueue-css.php' );


