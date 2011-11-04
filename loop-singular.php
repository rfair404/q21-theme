<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the WordPress loop ?>
		<?php do_action('h5b_before_post'); ?>
			<section <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="title"><?php the_title(); ?></h2>
					<span class="meta"><?php _e('Posted by: ', 'h5b'); ?>
						<span class="author"><?php the_author(); ?></span>
						<span class="date"><?php _e(' on ', 'h5b'); the_date(); ?></span>
					</span>
				</header>
				<article class="entry">
					<?php the_content(); ?>
				</article><!-- end article.entry -->
				<footer class="entry-footer">
					<span class="meta">Meta 2 single only</span>
				</footer>
			</section><!-- end section.post -->
			<section class="comments"><?php comment_form(); ?></section>
			<?php endwhile; /** end of one post **/ ?>
			<?php else : /** if no posts exist **/ ?>
		<p id="not-found"><?php _e('Nothing found' , 'h5b'); ?>
		<?php endif; /** end loop **/ ?>
