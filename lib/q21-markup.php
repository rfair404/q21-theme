<?php 
/*
* @package q21
* This file contains the functions that make up the q21 theme.
* A lot of the html markup was taken from the html 5 boilerplate, obviously 
*/

/**************the header items******************************/

// do doctype and conditional css files per html5boilerplate
add_action('q21_html_start', 'q21_doctype_tags', 0);
function q21_doctype_tags() { ?>
	<!doctype html>
	<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php }

//start head, meta
add_action('q21_head_start', 'q21_head_elements', 0);
function q21_head_elements() { ?>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<?php }

//complete head
add_action('q21_head_end', 'q21_head_elements_close', 99);
function q21_head_elements_close() { ?>
	<link rel="icon" href="<?php echo q21_IMG_URL; ?>/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo q21_IMG_URL; ?>/apple-touch-icon.png" />
	<?php wp_head(); ?>
	</head>
<?php }

//start body
	add_action('q21_body_start', 'q21_body_tag', 0);
	function q21_body_tag() { ?>
	<body <?php body_class('sexy q21'); ?>>
<?php }

//start div#container
add_action('q21_body_start', 'q21_body_container_tag', 10);
function q21_body_container_tag() { ?>
	<div id="container" class="container_12">
<?php }

//complete div#container
add_action('q21_body_end', 'q21_body_container_tag_close', 99);
function q21_body_container_tag_close() { ?>
	</div><!--/#container -->
<?php }

//start header#primary-header
add_action('q21_header_start', 'q21_header_primary_start', 0);
function q21_header_primary_start() { ?>
	<header id="primary-header" class="primary" role="main" class="container_12">
	<?php get_template_part( q21_NAME, 'top' ); ?>
	<?php get_template_part( q21_NAME, 'featured' ); ?>
<?php }

//complete header#primary-header
add_action('q21_header_end', 'q21_header_primary_end', 99);
function q21_header_primary_end() { ?>
	</header><!--/#primary-header -->
<?php }

/*****************the inner q21 function ********************************/

//start content wrapper
add_action('q21_content_start', 'q21_section_primary_start', 0);
function q21_section_primary_start() { ?> 
	<section id="main" role="main" class="primary" class="container_12">
<?php }

//start main col wrapper with loop !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! important has loop
add_action('q21_content_start', 'q21_section_maincol', 10);
function q21_section_maincol() { ?> 
	<section id="maincol" class="inner grid_8" role="main" >
	<?php get_template_part('q21','loop'); ?>
	</section><!--/#maincol -->
<?php }

//start second col wrapper with sidebar !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! important has sidebar
add_action('q21_content_start', 'q21_section_secondcol', 10);
function q21_section_secondcol() { ?> 
	<section id="secondcol" class="inner grid_3" role="complementary">
	<?php get_template_part('q21', 'sidebar'); ?>
	</section><!--/#secondcol -->
<?php }

//complete section # main
add_action('q21_content_end', 'q21_section_primary_close', 99);
function q21_section_primary_close() { ?> 
	</section><!--/#main -->
<?php }

/******************** post/page items**********************/

//start each post markup
add_action('q21_before_each_post', 'q21_post_markup_start', 99);
function q21_post_markup_start() { ?> 
	<section <?php post_class(); ?>> 
<?php }

//complete each post markup
add_action('q21_after_each_post', 'q21_post_markup_finish', 99);
function q21_post_markup_finish() { ?> 
	</section><!-- end section.post -->
<?php }

// before post meta
add_action('q21_each_post', 'q21_post_header', 10);
function q21_post_header() { ?> 
	<header class="entry-header">
    	<?php if ( is_singular() ) : ?>
        	<h1 class="title"><?php the_title(); ?></h1>
    	<?php else: ?>
		<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php _e('Link to ', 'q21'); echo the_title(); ?>"><?php the_title(); ?></a></h2>
   	<?php endif; ?>
        	<span class="meta">
			<span class="author"><?php _e('Posted by: ', 'q21'); ?><?php the_author_posts_link(); ?></span>
			<span class="date"><?php the_time('F, j Y'); ?></span>
		</span><!--/span.meta-->
	</header><!--/.entry-header -->
<?php }

//the post content
add_action('q21_each_post', 'q21_post_content', 20);
function q21_post_content() { ?> 
	<article class="entry">
            <?php if ( is_singular() && !is_page_template('blog-page.php') ) : the_content(); 
            else : the_excerpt(); 
            endif; ?>
	</article><!-- end article.entry -->
<?php }

//after post meta
add_action('q21_each_post', 'q21_post_footer', 20);
function q21_post_footer() { ?> 
	<footer class="entry-footer">
		<span class="meta"><?php
			//stolen from 2011 => janky but good enough
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'q21' ) );
                        $utility_text = null;
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'q21' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'Categories %1$s <br />Tags %2$s', 'q21' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'Categories %1$s', 'htb' );
			} 

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
		<?php edit_post_link( __( 'Admin Edit', 'twentyeleven' ), '<span class="edit-link">', '</span><!--/span.edit-link-->' ); ?>
</span><!--/span.meta -->
	</footer><!--/.entry-footer-->
<?php }

//somment section for each post
add_action('q21_each_post', 'q21_post_comments', 20);
function q21_post_comments() { ?> 
        <?php if ( is_singular() && !is_page_template('blog-page.php') ) : ?>
        	<section class="comments"><?php comment_form(); ?></section><!--/.comments-->
        <?php endif;?>
<?php }

//runs when no post found
add_action('q21_loop_empty', 'q21_posts_not_found', 20);
function q21_posts_not_found(){ ?>
	<p id="not-found"><?php _e('Nothing found' , 'q21'); ?> <!--/.not-found-->
<?php }

// this is standard nav for next/previous posts 
add_action('q21_loop_after_posts', 'q21_show_pagination', 10 );
function q21_show_pagination() { ?>
	<aside class="next-post-link"><?php next_posts_link('&laquo; Older Entries'); ?></aside><!--/aside.next-post-link-->	
	<aside class="prev-post-link"><?php previous_posts_link('Newer Entries &raquo;'); ?></aside><!--/aside.prev-post-link-->
<?php }

/**************************the footer items****************/

//start the footer markup
add_action('q21_footer_start', 'q21_footer_primary_start', 0);
function q21_footer_primary_start() { ?>
	<footer id="primary-footer" class="primary">
<?php get_template_part( 'q21', 'bottom' ); ?>
<?php }

//complete footer markup
add_action('q21_footer_end', 'q21_footer_primary_end', 10);
function q21_footer_primary_end() { ?>
	</footer><!--/#primary-footer-->
<?php }

//add chromeframe
add_action('q21_footer_end', 'q21_chromeframe', 20);
function q21_chromeframe() { /*part of html5boilerplate*/ ?>
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
<?php }
//end body, html

add_action('q21_html_end', 'q21_body_end', 99);
function q21_body_end() { ?>
    </body><!--/body.sexy-->
    </html>
<?php }
