<header class="banner" role="banner">
  <nav class="navbar navbar-full navbar-light navbar-fixed-top bg-faded">

    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php include(__DIR__ . '/miromannino.svg'); ?>
    </a>

    <button class="navbar-toggler hidden-md-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>

    <div class="collapse navbar-toggleable-sm" id="navbarResponsive">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav float-md-right']);
      endif;
      ?>

    <!--   <form class="form-inline float-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
  <!-- <img src="<?=get_stylesheet_directory_uri(); ?>/dist/images/header.jpg"> -->
</header>