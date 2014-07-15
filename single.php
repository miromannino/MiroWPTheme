<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>

		<div id="primary" class="fadeIn fadeInD1">
            
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
                
					<?php get_template_part( 'content', 'single' ); ?>

					<?php miro_content_nav( 'nav-below' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
                
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>