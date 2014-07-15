<?php
/**
 * The template for displaying content in the single.php template
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
				echo( comments_number( 
					'<div class="value">0</div><div class="comments-label">'.__('comments', 'miro'),
					'<div class="value">1</div><div class="comments-label">'.__('comment', 'miro'), 
					'<div class="value">%</div><div class="comments-label">'.__('comments', 'miro')
				));
			} else { 
				_e( '<div class="comments-label">comments</div><div class="comments-label">closed</div>', 'miro');
			}
		?>
	</div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<header class="entry-header">

		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php $categories_list = get_the_category_list(', ');
			if ( $categories_list ) { ?>
	            <span class="categories"><?php _e( 'Posted in:', 'miro' ); ?> <?php echo $categories_list; ?></span>
	        <?php } ?>
		</div><!-- .entry-meta -->

		<?php 
			if ( has_post_thumbnail()){
				$page = get_query_var( 'page' ) ? get_query_var( 'page' ) : -1;
				if ($page <= 1) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail');
		?>
					<img class="wp-post-image" src="<?php echo $large_image_url[0] ?>" />
		<?php
				}
 		 	} 
	 	?>

	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( '<span>Pages:</span>', 'miro' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<?php 
		if (get_theme_mod('socialbuttonspost', false)) {
			entry_social_buttons('bottom', get_post_custom_values('extra_button'));
		}
	?>

	<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'miro_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2>
					<span id="author-about"><?php _e( 'About ', 'miro' ); ?></span>
					<span id="author-username"><?php echo(get_the_author()); ?></span>
				</h2>
				<?php the_author_meta( 'description' ); ?>
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->
	<?php endif; ?>

		<footer class="entry-meta">
			<?php $categories_list = get_the_category_list(', ');
			if ( $categories_list ) { ?>
			    <div class="categories">
			        <span class="categories-title"><?php _e( 'Categories:', 'miro' ); ?></span> <?php echo $categories_list; ?>
			    </div>
			<?php } ?>
			<?php $tag_list = get_the_tag_list('',', ','');
			if ( $tag_list ) { ?>
			    <div class="tags">
			        <span class="tags-title"><?php _e( 'Tags:', 'miro' ); ?></span> <?php echo $tag_list; ?>
			    </div>
			<?php } ?>
		</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
