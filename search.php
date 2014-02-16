<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-info-title">
						<?php _e('Search Results for: ', 'miro') ?> 
						<span class="search-title-query"><?php echo(get_search_query()); ?></span>
					</h1>
				</header>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'index' );
					?>

				<?php endwhile; ?>

				<?php miro_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="hentry post no-results not-found">
					<div>
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'miro' ); ?></h1>
						</header><!-- .entry-header -->
					</div>
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>