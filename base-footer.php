<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
  <?php
    do_action('get_footer');
    if (Setup\display_sidebar()) {
      get_template_part('templates/footer-sidebar');
    } else {
      get_template_part('templates/footer');
    }
    wp_footer();
    if (strlen(get_theme_mod('twitter_tag_code')) > 0) {
      echo get_theme_mod('twitter_tag_code');
    }
  ?>
</body>
</html>
