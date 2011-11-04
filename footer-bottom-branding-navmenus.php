<?php /* add 'descriptions' to the menu function to use the custom walker involving menu item descriptions */ ?>
<?php if ( function_exists('h5b_menu') ) h5b_menu('footer_primary', 'footer-primary');  ?>
<hgroup id="footer-branding" role="main">
<p id="site-copyright"><a href="<?php home_url(); ?>" title="<?php _e('home', 'h5b'); ?>"><?php bloginfo('name');?></a></h1>
<p id="gotop"><a href="#container"><?php _e('Top', 'h5b'); ?></p>
</hgroup>
<?php if ( function_exists('h5b_menu') ) h5b_menu('footer_secondary', 'footer-secondary');  ?>

