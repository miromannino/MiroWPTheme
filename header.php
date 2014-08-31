<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
?>
<!DOCTYPE html>
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)	]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	echo trim(wp_title('', false));
	
	// Add the blog description for the home/front page.
	if ( is_home() || is_front_page() ) {
		bloginfo('name'); // Add the blog name.
		$site_description = get_bloginfo( 'description', 'display' );
		if ($site_description) echo " | $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'miro' ), max( $paged, $page ) );

	?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner" class="clearfix">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menu-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="site-title" class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if ( get_theme_mod( 'header_logo', false) ) { ?>
							<img src="<?php echo get_theme_mod('header_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>" />
						<?php } else if ( get_theme_mod('header_text', false) ){
							echo get_theme_mod('header_text');
								}else{
							bloginfo( 'name' );
								}
						?>
					</a>
				</div>

				<?php
				wp_nav_menu( array(
						'menu'	=> 'primary',
						'theme_location'	=> 'primary',
						'depth'	=> 2,
						'container'	=> 'div',
						'container_class'	=> 'collapse navbar-collapse navbar-menu-collapse',
						'menu_class'	=> 'nav navbar-nav navbar-right',
						'fallback_cb'	=> 'wp_bootstrap_navwalker::fallback',
						'walker'	=> new wp_bootstrap_navwalker())
				);
				?>
			</div>
		</nav>

			<!--<nav id="access" role="navigation">
				<h1 class="section-heading"><?php _e( 'Main menu', 'miro' ); ?></h1>
				<?php 
					/* Our navigation menu.	If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ 
					wp_nav_menu( array( 'theme_location' => 'primary' ) ); 
				?>
			</nav>-->
	</header><!-- #branding -->