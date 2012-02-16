<?php /*

/*
* The Main Header Logo, Description and top menu File
* @package q21
* add 'descriptions' to the menu function to use the custom walker involving menu item descriptions - e.g. <?php q21_menu('header_primary', 'header-primary', 'descriptions'); ?>
*/ ?>

<?php if ( function_exists('q21_menu') ) q21_menu('header_primary', 'header-primary', 'descriptions');  ?>
<hgroup id="top-branding" class="grid_6">
    <h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php _e('home', 'q21'); ?>"><?php bloginfo('name');?></a></h1>
    <h2 id="site-description"><?php bloginfo('description');?></h2>
</hgroup>
<div id="featured-area"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Sidebar') ) ; ?></div>
<?php if ( function_exists('q21_menu') ) q21_menu('header_secondary', 'header-secondary');  ?>

