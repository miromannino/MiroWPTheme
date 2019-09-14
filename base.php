<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php include 'base-header.php'; ?>

  <div class="header-img-container"><svg id="graph"/></div>
  <div class="header-img-container-white-filler">&nbsp;</div>

  <div class="content-container content-container-img-header">
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main fadeIn fadeInD1">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar fadeIn">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </div><!-- /.content-container-img-header -->

  <?php
    if (Setup\display_sidebar()) {
      get_template_part('templates/footer-sidebar');
    } else {
      get_template_part('templates/footer-normal');
    }
    do_action('get_footer');
    wp_footer();
    if (strlen(get_theme_mod('twitter_tag_code')) > 0) {
      echo get_theme_mod('twitter_tag_code');
    }
  ?>
</body>
</html>