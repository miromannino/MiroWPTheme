<header class="banner" role="banner">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-faded" role="navigation">

    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php include(__DIR__ . '/miromannino.svg'); ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- <div class="collapse navbar-toggleable-sm" id="navbarResponsive">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav float-md-right']);
      endif;
      ?>
    </div> -->

    <?php
		wp_nav_menu( array(
			'theme_location'    => 'primary_navigation',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'navbarResponsive',
			'menu_class'        => 'nav navbar-nav float-md-right',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>

    
  </nav>
  <!-- <img src="<?=get_stylesheet_directory_uri(); ?>/dist/images/header.jpg"> -->
</header>