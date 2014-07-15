<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>

		<section id="primary" class="fadeIn fadeInD1">
			<div id="content" role="main">
            
            	<?php the_post(); ?>

				<header class="page-header">
					<h1 class="page-info-title"><?php
						printf( __( 'Tag Archives: %s', 'miro' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					?></h1>
				</header>
                
                <?php rewind_posts(); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'index' ); ?>

				<?php endwhile; ?>

				<?php miro_content_nav( 'nav-below' ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>