<?php
/* 
* The Main footer with secondary Logo, copyright and footer menu File
* @package q21
* add 'descriptions' to the menu function to use the custom walker involving menu item descriptions - e.g. <?php q21_menu('footer_primary', 'footer-primary', 'descriptions'); ?>
*/ 
?>
<?php if ( function_exists('q21_menu') ) q21_menu('footer_primary', 'footer-primary');  ?>
<hgroup id="footer-branding" role="main">
<p id="site-copyright"><a href="<?php home_url(); ?>" title="<?php _e('home', 'q21'); ?>"><?php bloginfo('name');?></a></h1>
<p id="gotop"><a href="#container"><?php _e('Top', 'q21'); ?></a></p>
</hgroup>
<?php if ( function_exists('q21_menu') ) q21_menu('footer_secondary', 'footer-secondary');  ?>

