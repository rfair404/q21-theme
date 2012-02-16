<?php 
// add the admin settings and such
add_action('admin_init', 'h5b_admin_initial_options');
function h5b_admin_initial_options(){
register_setting( 'h5b_options', 'h5b_basic_options', 'h5b_basic_options_validate' );
register_setting( 'h5b_options', 'h5b_advanced_options', 'h5b_advanced_options_validate' );

/*add the two basic option sections*/
add_settings_section('h5b_settings_main_basic', 'Basic Settings', 'h5b_settings_basic_main', 'h5b-basic');
//add_settings_section('h5b_settings_main_alternate', 'Alternate Settings', 'h5b_settings_basic_alternate', 'h5b-basic');

/*add the two advanced options*/
add_settings_section('h5b_settings_advanced_css', 'CSS Settings', 'h5b_settings_advanced_css', 'h5b-advanced');
add_settings_section('h5b_settings_advanced_responsive', 'Responsive Settings', 'h5b_settings_advanced_responsive', 'h5b-advanced');

add_settings_field('h5b_first_option', H5B_NAME . ' Option number 1', 'h5b_first_option_field', 'h5b-basic', 'h5b_settings_main_basic');
}

function h5b_basic_options_validate() {
}

function h5b_advanced_options_validate() {
}

function h5b_settings_advanced_responsive() {
echo 'h5b advanced responsive callback';
}

function h5b_settings_basic_main() {
echo 'h5b basic callback';
}

function h5b_settings_advanced_css() {
echo 'h5b advanced callback';
}

function h5b_first_option_field() {
echo 'first option build';
}
add_action('admin_menu', 'h5b_create_theme_options_pages');
function h5b_create_theme_options_pages() {
add_menu_page( H5B_NAME. ' options', H5B_NAME. ' options', 'manage_options', 'h5b-options', 'h5b_basic_options', null, '61.6123456' );
add_submenu_page( 'h5b-options', 'roo2', H5B_NAME.' advanced options', 'manage_options', 'h5b-advanced-options', 'h5b_advnced_options' );
}

function h5b_basic_options(){ ?>
<div>
<h2><?php echo H5B_NAME; _e(' Basic Options', 'h5b'); ?></h2>
Options relating to the Custom Plugin.
<form action="options.php" method="post">
<?php settings_fields('h5b_settings_main_basic'); ?>
<?php do_settings_sections('h5b-basic'); ?>

<br /><input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php }

function h5b_advnced_options(){ ?>
<div>
<h2><?php echo H5B_NAME; _e(' Advanced Options', 'h5b'); ?></h2>
Options relating to the Custom Plugin.
<form action="options.php" method="post">
<?php settings_fields('h5b_settings_main_basic'); ?>
<?php do_settings_sections('h5b-advanced'); ?>

<br /><input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php }


// add the admin options page

