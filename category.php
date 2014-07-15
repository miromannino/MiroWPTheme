<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>

		<section id="primary" class="fadeIn fadeInD1">
			<div id="content" role="main">

				<header class="page-header">
					<h1 class="page-info-title"><?php
						printf( __( 'Category: %s', 'miro' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>

					<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
				</header>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'index' ); ?>

				<?php endwhile; ?>

				<?php miro_content_nav( 'nav-below' ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>