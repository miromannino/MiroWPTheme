<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
            <div id="site-generator">          
            	<?php _e( 'Powered by ', 'miro' ); ?><a href="<?php echo esc_url( __( 'http://www.wordpress.org', 'miro' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'miro' ); ?>" rel="generator"><?php _e( 'WordPress', 'miro' ); ?></a>
                <?php _e( 'and ', 'miro' ); ?><a href="<?php echo esc_url( 'http://miromannino.com/miro-wordpress-theme/' ); ?>" title="<?php esc_attr_e( 'Download the Miro WP Theme', 'miro' ); ?>" rel="generator">Miro WP Theme</a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>