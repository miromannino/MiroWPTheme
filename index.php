<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>

		<div id="primary" class="fadeIn fadeInD1">
			<div id="content" role="main">
           
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'index' ); ?>

				<?php endwhile; ?>

				<?php miro_content_nav( 'nav-below' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
        
<?php get_sidebar(); ?>

<?php get_footer(); ?>