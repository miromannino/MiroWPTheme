<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
?>

	<header class="entry-meta fadeIn fadeInD3">
		<div class="post-date">
			<time class="entry-date" datetime="<?php echo get_the_date( 'c' ); ?>" pubdate>
				<span class="month"><?php echo get_the_date('M'); ?></span>
				<span class="day"><?php echo get_the_date('d'); ?></span>
				<span class="year"><?php echo get_the_date('Y'); ?></span>
			</time>
		</div>
		<div class="post-comments">
			<?php 
				if ( comments_open() ) {
			?>
					<a href="<?php comments_link(); ?>">
			<?php
						echo( comments_number( 
							'<div class="value">0</div><div class="comments-label">'.__('comments', 'miro'),
							'<div class="value">1</div><div class="comments-label">'.__('comment', 'miro'), 
							'<div class="value">%</div><div class="comments-label">'.__('comments', 'miro')
						));
			?>
					</a>
			<?php
				} else { 
					_e( '<div class="comments-label">comments</div><div class="comments-label">closed</div>', 'miro');
				}
			?>
		</div>
	</header>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
        <div>
		<header class="entry-header">
        	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'miro' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->

		<?php if ( has_post_thumbnail()) : ?>
			<a class="wp-post-image-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail'); ?>	
				<img class="wp-post-image" src="<?php echo $large_image_url[0] ?>" />
			</a>
 		<?php endif; ?>

		<div class="entry-summary">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'miro' ) ); ?>
		</div><!-- .entry-summary -->

		<div style="clear:both"></div>

		<footer class="entry-meta">
			<?php
				$categories_list = get_the_category_list(', ');
				if ( $categories_list ) {
					echo( __( 'Posted in:', 'miro' ) . ' ' . $categories_list . '<span class="sep"> | </span>');

				}
			?>
			<?php edit_post_link( __( 'Edit', 'miro' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="post-loop-separator"></div>