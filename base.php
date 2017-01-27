<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

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

  <footer class="footer">
    <?php include 'base-footer.php' ?>
  </footer>