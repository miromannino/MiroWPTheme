<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>
	<div id="main" class="clearfix">
		<div id="primary" class="fadeIn fadeInD1">
			<div id="content" role="main">
            
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- #main -->
<?php get_footer(); ?>