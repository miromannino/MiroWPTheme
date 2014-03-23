<?php

/**
 * Tell WordPress to run miro_setup() when the 'after_setup_theme' hook is run.
 */
 
add_action('after_setup_theme', 'miro_setup');

if ( ! function_exists('miro_setup') ):

function miro_setup() {

	/**
 	* Set the content width based on the theme's design and stylesheet.
 	*/
	if ( ! isset( $content_width ) )
		$content_width = 560;

	// languages
	load_theme_textdomain('miro', get_template_directory() . '/languages');

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support('automatic-feed-links');

	// The post thumbnail
	add_theme_support('post-thumbnails');
	add_image_size('post-thumbnail', 650, 200, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu('primary', __('Primary Menu', 'miro') );

}
endif; // miro_setup


// enqueue styles
if( !function_exists("theme_styles") ) {  
    function theme_styles() { 
        wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'bootstrap' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// enqueue javascript
if( !function_exists( "theme_js" ) ) {  
  function theme_js(){
    wp_register_script( 'bootstrap', 
      get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', 
      array('jquery'), 
      '1.2' );
    wp_enqueue_script('bootstrap');
  }
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

/**
 * Theme customizations
 */
function miro_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

	$wp_customize->add_section( 'miro_theme_header' , array(
    	'title' => __( 'Header', 'miro' ),
    	'priority' => 30,
	));

	$wp_customize->add_setting( 'header_text' , array(
		'default' => false
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_text', array(
		'label' => __( 'Custom Header HTML', 'miro' ),
		'section' => 'miro_theme_header',
		'settings' => 'header_text',
		'type' => 'text'
	)));

	$wp_customize->add_setting( 'header_logo' , array(
		'default' => false
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
		'label' => __( 'Custom Logo', 'miro' ),
		'section' => 'miro_theme_header',
		'settings' => 'header_logo',
	)));


	$wp_customize->add_section( 'miro_theme_socialbuttons' , array(
    	'title' => __( 'Social Buttons', 'miro' ),
    	'priority' => 30,
	));	
	$wp_customize->add_setting( 'socialbuttonspost' , array(
		'default' => false
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialbuttonspost', array(
		'label' => __( 'Post Social Buttons', 'miro' ),
		'section' => 'miro_theme_socialbuttons',
		'settings' => 'socialbuttonspost',
		'type' => 'checkbox'
	)));
	$wp_customize->add_setting( 'socialbuttonspagebottom' , array(
		'default' => false
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialbuttonspagebottom', array(
		'label' => __( 'Page Social Buttons (Bottom)', 'miro' ),
		'section' => 'miro_theme_socialbuttons',
		'settings' => 'socialbuttonspagebottom',
		'type' => 'checkbox'
	)));
	$wp_customize->add_setting( 'socialbuttonspagetop' , array(
		'default' => false
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'socialbuttonspagetop', array(
		'label' => __( 'Page Social Buttons (Top)', 'miro' ),
		'section' => 'miro_theme_socialbuttons',
		'settings' => 'socialbuttonspagetop',
		'type' => 'checkbox'
	)));
	$wp_customize->add_setting( 'twitterusername' , array(
		'default' => ''
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitterusername', array(
		'label' => __( 'Twitter username', 'miro' ),
		'section' => 'miro_theme_socialbuttons',
		'settings' => 'twitterusername',
		'type' => 'text'
	)));

}
add_action( 'customize_register', 'miro_customize_register' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function miro_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __('Continue reading <span class="meta-nav">&rarr;</span>', 'miro') . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and miro_continue_reading_link().
 *
 */
function miro_auto_excerpt_more( $more ) {
	return ' &hellip;' . miro_continue_reading_link();
}
add_filter('excerpt_more', 'miro_auto_excerpt_more');

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function miro_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= miro_continue_reading_link();
	}
	return $output;
}
add_filter('get_the_excerpt', 'miro_custom_excerpt_more');


/**
 * Registers the sidebars and widgetized areas.
 *
 */
function miro_widgets_init() {

	register_sidebar( array(
		'name' => __('Sidebar', 'miro'),
		'id' => 'sidebar',
		'description' => __('The right sidebar for posts and pages.', 'miro'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action('widgets_init', 'miro_widgets_init');

/**
 * Display navigation to next/previous pages when applicable
 */
function miro_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<h1 class="section-heading"><?php _e('Post navigation', 'miro'); ?></h1>
			<div class="nav-previous"><?php next_posts_link( __('<span class="meta-nav">&larr;</span> Older posts', 'miro') ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __('Newer posts <span class="meta-nav">&rarr;</span>', 'miro') ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}

/**
 * Comments
 */
if ( ! function_exists('miro_comment') ) :

/**
 * Template for comments.
 *
 */
function miro_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e('Pingback:', 'miro'); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'miro'), ' '); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 60;
						if ('0' != $comment->comment_parent )
							$avatar_size = 40;

						echo get_avatar( $comment, $avatar_size );

						printf( __('%1$s on %2$s%3$s at %4$s%5$s <span class="says">said:</span>', 'miro'),
							sprintf('<cite class="fn">%s</cite>', get_comment_author() ),
							'<a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '"><time pubdate datetime="' . get_comment_time('c') . '">',
							get_comment_date(),
							get_comment_time(),
							'</time></a>'
						);
					?>

					<?php edit_comment_link( __('[Edit]', 'miro'), ' '); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0') : ?>
					<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'miro'); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array('reply_text' => __('Reply &darr;', 'miro'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for miro_comment()


/**
 * Comment submit button
 */
function bootstrap3_comment_button() {
    echo '<button class="btn btn-default" type="submit">' . __( 'Submit' ) . '</button>';
}
add_action('comment_form', 'bootstrap3_comment_button' );

/**
 * Social Buttons
 */
function add_social_buttons_scripts() {
   wp_enqueue_script('social-button-script', get_template_directory_uri() . '/js/socialbuttons.js',true);
}
add_action('wp_enqueue_scripts','add_social_buttons_scripts');

function entry_social_buttons($position = 'bottom') {
?>
	<div class="entry-social-buttons <?php echo (($position == 'top')? 'top' : 'bottom'); ?>">
		<div class="entry-social-button button-googleplus">
			<!-- Google Plus One-->
			<div class="g-plusone" data-size="medium" data-href="<?php echo(get_permalink()); ?>"></div>
		</div>
		<div class="entry-social-button button-twitter">
			<!-- Twitter-->
			<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo(get_the_title()); ?>" data-url="<?php echo(get_permalink()); ?>" <?php echo((get_theme_mod('twitterusername', '') != '') ? 'data-via="' . get_theme_mod('twitterusername', '') . '"' : ''); ?> rel="nofollow"></a>
		</div>
		<div class="entry-social-button button-fblike">
			<!-- Facebook like-->
			<div id="fb-root"></div>
			<div class="fb-like" data-href="<?php echo(get_permalink()); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
		</div>
		<div class="entry-social-button-end"></div>
	</div>
<?php
}

/**
 * Portfolio
 */

/*
	[pf-portfolio id="..."]...[/pf-portfolio]
*/
function sc_pf_portfolio( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );

	$v = get_transient('pf-portfolio' . get_the_ID() . $id);
	if ( false === $v ) {
        // if transient not set, do this!

		add_shortcode('pf-entry', 'sc_pf_entry');

        $v = do_shortcode($content);

    	remove_shortcode('pf-entry');
 
		set_transient('pf-portfolio' . get_the_ID(), $v, 60*60);
	}
	return $v;
}
add_shortcode('pf-portfolio', 'sc_pf_portfolio');

/*
	[pf-entry]...[/pf-entry]
*/
function sc_pf_entry( $atts, $content = null ) {
	$ris = '';

	add_shortcode('pf-entryTitle', 'sc_pf_entryTitle');
	add_shortcode('pf-entryAttrList', 'sc_pf_entryAttrList');
	add_shortcode('pf-entryDescription', 'sc_pf_entryDescription');

	$ris = '<div class="pf-entry">'
		.   do_shortcode($content)
		.  '</div>';

	remove_shortcode('pf-entryTitle');
	remove_shortcode('pf-entryAttrList');
	remove_shortcode('pf-entryDescription');

	return $ris;
}

/*
	[pf-entryTitle href="..." ]Title[/pf-entryTitle]
*/
function sc_pf_entryTitle( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'href' => ''
	), $atts ) );

	if(strlen($href) == 0)
		return '<h2 class="pf-entryTitle">' . $content . '</h2>';
	else
		return '<h2 class="pf-entryTitle"><a href="' . $href . '" title="' . $content . '">' . $content . '</a></h2>';
}

/*
	[pf-entryAttrList image="..."]...[/pf-entryAttrs]
*/
function sc_pf_entryAttrList( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'image' => ''
	), $atts ) );

	$ris = '';

	add_shortcode('pf-entryAttr', 'sc_pf_entryAttr');
	add_shortcode('pf-entryLinks', 'sc_pf_entryLinks');

	if(strlen($image) == 0)
		$ris .= '<div class="pf-entryAttrList">'
			.   '  <div class="entryData">'
			.       do_shortcode($content)
			.   '  </div>'
			.   '</div>';
	else
		$ris .= '<div class="pf-entryAttrList">'
			.   '  <div class="entryImage">'
			.   '   <img src="' . $image . '" class="size-medium description-image" />'
			.   '  </div>'
			.   '  <div class="entryData">'
			.       do_shortcode($content)
			.   '  </div>'
			.   '</div>';

	$ris .= '<div class="pf-columnsBottomer">&nbsp;</div>';

	remove_shortcode('pf-entryAttr');
	remove_shortcode('pf-entryLinks');

	return $ris;
}

/*
	[pf-entryAttr label="..." ]...[/pf-entryAttr]
*/
function sc_pf_entryAttr( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'label' => ''
	), $atts ) );

	return '<div class="pf-entryAttr">'
		.   ((strlen($label) == 0)? '' : ('<span class="attrLabel">' . $label . ': </span>'))
		.   ' <span class="attrValue">' . $content . '</span>'
		.   '</div>';
}

/*
	[pf-entryLinks href="..." ]...[/pf-entryLinks]
*/
function sc_pf_entryLinks( $atts, $content = null ) {

	$ris = '';

	add_shortcode('pf-entryLink', 'sc_pf_entryLink');

	$ris = '<div class="pf-entryLinks">'
		.  '<span class="attrValue">' . do_shortcode($content) . '</span>'
		.  '</div>';

	remove_shortcode('pf-entryLink');

	return $ris;

}

/*
	[pf-entryLink href="..." target="..."]...[/pf-entryLink]
*/
function sc_pf_entryLink( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'href' => '',
		'target' => ''
	), $atts ) );

	return	'<a href="' 
				. $href . '"' . ((strlen($target) == 0)? '' : (' target="' . $target . '"')) 
				. 'class="btn btn-primary btn-xs">' . $content . '</a>';

}

/*
	[pf-entryDescription ]...[/pf-entryDescription]
*/
function sc_pf_entryDescription( $atts, $content = null ) {
	return	'<div class="entryDescriptionLabel">' . __('Description', 'miro') . '</div>'
		.   ' <div class="entryDescriptionValue">'
		.	   $content
		.   ' </div>';
}

/*
	[button href="..." target="..."]...[/button]
*/
function sc_button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'href' => '',
		'target' => ''
	), $atts ) );

	$ris = '';

	$ris = '<a class="btn btn-primary btn-sm" href="' . $href . '"' . ((strlen($target) == 0)? '' : (' target="' . $target . '"')) . '>' . $content . '</a>';

	return $ris;

}
add_shortcode('button', 'sc_button');