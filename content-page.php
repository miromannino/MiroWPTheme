<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<?php 
		if (get_theme_mod('socialbuttonspagetop', false)) {
			entry_social_buttons('top', get_post_custom_values('extra_button'));
		}
	?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php 
		if (get_theme_mod('socialbuttonspagebottom', false)) {
			entry_social_buttons('bottom', get_post_custom_values('extra_button'));
		}
	?>
	
</article><!-- #post-<?php the_ID(); ?> -->
