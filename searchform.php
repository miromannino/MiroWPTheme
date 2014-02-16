<?php
/**
 * The template for displaying search forms in MiroWPTheme
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
?>

<form method="get" id="searchform" action="	<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" class="field form-control" name="s" id="s" />
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit"><?php esc_attr_e( 'Search', 'miro' ); ?></button>
		</span>
	</div>
</form>
