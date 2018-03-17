<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

if (Setup\display_sidebar()) {
  get_template_part('templates/footer-sidebar');
} else {
  get_template_part('templates/footer');
}
?>
