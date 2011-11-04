<?php get_header(); ?>
	<section id="main" role="main" class="primary">
		<section id="maincol" class="inner" >
			<?php if ( is_single() || is_page() ) $context = 'singular'; else $context = null; get_template_part('loop', $context); ?>
		</section>
		<section id="secondcol" class="inner" role="complementary">
			<?php get_template_part('sidebar', 'primary'); ?>
			<?php get_template_part('sidebar', 'secondary'); ?>
		</section>
	</section>
<?php get_footer(); ?>
