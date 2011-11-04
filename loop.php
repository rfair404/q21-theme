<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the WordPress loop ?>
		<?php do_action('h5b_before_post'); ?>
			<section <?php post_class(); ?>>
				<header class="entry-header">
					<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php _e('Link to', 'h5b'); ?>"><?php the_title(); ?></a></h2>
					<span class="meta"><?php _e('Posted by: ', 'h5b'); ?><a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a><?php _e(' on ', 'h5b'); the_date(); ?></span>
				</header>
				<article class="entry">
					<?php the_excerpt(); ?>
				</article><!-- end article.entry -->
				<footer class="entry-footer">
					<span class="meta">Meta 2 mutiple only</span>
				</footer>
			</section><!-- end section.post -->
			<?php endwhile; /** end of one post **/ ?>
			<?php else : /** if no posts exist **/ ?>
		<p id="not-found"><?php _e('Nothing found' , 'h5b'); ?>
		<?php endif; /** end loop **/ ?>
