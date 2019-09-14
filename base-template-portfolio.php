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

  <div class="content-container content-container-img-header">
    <div class="wrap container container-wide fadeIn" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </div><!-- /.content-container-img-header -->

  <?php
  get_template_part('templates/footer-wide');
  do_action('get_footer');
  wp_footer();
  if (function_exists('get_field') && get_field('footer_script')) {
    echo the_field('footer_script');
  }
  if (strlen(get_theme_mod('twitter_tag_code')) > 0) {
    echo get_theme_mod('twitter_tag_code');
  }
  ?>
  <script type="text/javascript">
    mirowptheme_init_portfolio(jQuery);
  </script>
</body>
</html>