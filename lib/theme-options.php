<?php 
// add the admin settings and such
add_action('admin_menu', 'q21_create_theme_options_pages');

function q21_create_theme_options_pages() {
    add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', 'q21-options', 'q21_basic_options', null, '61.6123456' );
    add_submenu_page( 'q21-options', 'roo2asdfasdf', 'Advanced options', 'manage_options', 'q21-advanced-options', 'q21_advnced_options' );
}

function q21_basic_options(){ ?>
<div>
<h2><?php _e('Theme Options', 'q21'); ?></h2>
<?php _e('Set the basic theme options', 'q21'); ?>
<form action="options.php" method="post">
<?php settings_fields('q21_settings_main_basic'); ?>
<?php do_settings_sections('q21-basic'); ?>

<br /><input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php }

function q21_advnced_options(){ ?>
<div>
<h2><?php _e('Advanced Options', 'q21'); ?></h2>
<?php _e('Set the advanced theme options', 'q21'); ?>
<form action="options.php" method="post">
<?php settings_fields('q21_settings_advanced_css'); ?>
<?php do_settings_sections('q21-advanced'); ?>

<br /><input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php }

// add the admin settings and such
add_action('admin_init', 'q21_admin_initial_options');
function q21_admin_initial_options(){
register_setting( 'q21_options', 'q21_basic_options', 'q21_basic_options_validate' );
register_setting( 'q21_options', 'q21_advanced_options', 'q21_advanced_options_validate' );

/*add the two basic option sections*/
add_settings_section('q21_settings_main_basic', 'Basic Settings', 'q21_settings_basic_main', 'q21-basic');
//add_settings_section('q21_settings_main_alternate', 'Alternate Settings', 'q21_settings_basic_alternate', 'q21-basic');

/*add the two advanced options*/
add_settings_section('q21_settings_advanced_css', 'CSS Settings', 'q21_settings_advanced_css', 'q21-advanced');
add_settings_section('q21_settings_advanced_responsive', 'Responsive Settings', 'q21_settings_advanced_responsive', 'q21-advanced');

add_settings_field('q21_first_option', 'SEO Settings', 'q21_first_option_field', 'q21-basic', 'q21_settings_main_basic');
}

function q21_basic_options_validate() {
}

function q21_advanced_options_validate() {
}

function q21_settings_advanced_responsive() {
    echo 'q21 advanced responsive callback';
}

function q21_settings_basic_main() {
    echo 'q21 basic callback';
}

function q21_settings_advanced_css() {
    echo 'q21 advanced callback';
}

function q21_first_option_field() {
    echo 'first option build';
}





// add the admin options page

