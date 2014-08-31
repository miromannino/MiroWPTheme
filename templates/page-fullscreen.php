<?php
/*
 * Template Name: Full Screen Page
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>
	<div id="main" class="main-fullscreen clearfix">
		<div id="primary" class="primary-fullscreen fadeIn fadeInD1">
			<div id="content" role="main">
	        
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main -->
<?php get_footer(); ?>