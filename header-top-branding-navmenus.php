<?php /* add 'descriptions' to the menu function to use the custom walker involving menu item descriptions */ ?>
<?php if ( function_exists('h5b_menu') ) h5b_menu('header_primary', 'header-primary', 'descriptions');  ?>
<hgroup id="top-branding">
<h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php _e('home', 'h5b'); ?>"><?php bloginfo('name');?></a></h1>
<h2 id="site-description"><?php bloginfo('description');?></h2>
</hgroup>
<?php if ( function_exists('h5b_menu') ) h5b_menu('header_secondary', 'header-secondary');  ?>

