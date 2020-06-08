<div class="container">
  <div>
    @php dynamic_sidebar('sidebar-footer') @endphp
    {!! get_social_links() !!}
  </div>
  <div class="copyrights">
    <div class="reproduction-notice">
      No reproduction or publication for any content on this site without express prior written permission.
      <br/>
      Commercial and editorial licenses are available. Contact me via email for more information. 
    </div>
    <div class="general-copyrights">© 2004-{!! date('Y') !!} Miro Mannino. All rights reserved.</div>
  </div>
  <div class="other-footer-links">
    @if (strlen(get_theme_mod('privacy_policy_extended_link')) > 0)
      <a href="<?php echo get_theme_mod('privacy_policy_extended_link') ?>" class="privacy-policy">Privacy policy</a>
    @endif
  </div>
</div>