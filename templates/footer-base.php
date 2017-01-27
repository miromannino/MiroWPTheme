<div class="container">
  <div>
    <?php 
      dynamic_sidebar('sidebar-footer'); 
      echo get_social_links();
    ?>
  </div>
  <div class="copyrights">
    <div class="theme-designed">Theme and header images are designed by and are property of Miro Mannino.</div>
    <div class="proudly-powered">Proudly powered by Wordpress.</div>
    <div class="general-copyrights">© 2004-<?php echo date('Y') ?> Miro Mannino. All rights reserved.</div>
  </div>
  <div class="other-footer-links">
    <?php if (strlen(get_theme_mod('privacy_policy_extended_link')) > 0) { ?>
      <a href="<?php echo get_theme_mod('privacy_policy_extended_link') ?>" class="privacy-policy">Privacy policy</a>
    <?php } ?>
  </div>
</div>