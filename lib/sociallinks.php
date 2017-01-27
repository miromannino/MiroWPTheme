<?php 

function get_social_links($size = 'fa-2x') {
  $res = '<div class="social-links">';
  if (strlen(get_theme_mod('username_twitter')) > 0) {
    $res .= '<a target="_blank" href="https://twitter.com/' . get_theme_mod('username_twitter') . '" class="fa ' . $size . ' fa-twitter"></a>';
  }
  if (strlen(get_theme_mod('username_github')) > 0) {
    $res .= '<a target="_blank" href="https://github.com/' . get_theme_mod('username_github') . '" class="fa ' . $size . ' fa-github"></a>';
  }
  if (strlen(get_theme_mod('username_linkedin')) > 0) {
    $res .= '<a target="_blank" href="https://www.linkedin.com/in/' . get_theme_mod('username_linkedin') . '" class="fa ' . $size . ' fa-linkedin-square"></a>';
  }
  if (strlen(get_theme_mod('username_wordpress')) > 0) {
    $res .= '<a target="_blank" href="https://profiles.wordpress.org/' . get_theme_mod('username_wordpress') . '" class="fa ' . $size . ' fa-wordpress"></a>';
  }
  if (strlen(get_theme_mod('paypal_donation_link')) > 0) {
    $res .= '<a target="_blank" href="' . get_theme_mod('paypal_donation_link') . '" class="fa ' . $size . ' fa-cc-paypal"></a>';
  }
  if (strlen(get_theme_mod('username_instagram')) > 0) {
    $res .= '<a target="_blank" href="https://www.instagram.com/' . get_theme_mod('username_instagram') . '" class="fa ' . $size . ' fa-instagram"></a>';
  }
  if (strlen(get_theme_mod('username_flickr')) > 0) {
    $res .= '<a target="_blank" href="https://www.flickr.com/photos/' . get_theme_mod('username_flickr') . '" class="fa ' . $size . ' fa-flickr"></a>';
  }
  if (strlen(get_theme_mod('username_youtube')) > 0) {
    $res .= '<a target="_blank" href="https://www.youtube.com/user/' . get_theme_mod('username_youtube') . '" class="fa ' . $size . ' fa-youtube-square"></a>';
  }
  return $res . '</div>';
}

function get_social_links_list() {
  $res = '<ul class="social-links-list">';
  if (strlen(get_theme_mod('username_twitter')) > 0) {
    $res .= '<li><a target="_blank" href="https://twitter.com/' . get_theme_mod('username_twitter') . '"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;Twitter</a></li>';
  }
  if (strlen(get_theme_mod('username_github')) > 0) {
    $res .= '<li><a target="_blank" href="https://github.com/' . get_theme_mod('username_github') . '"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;Github</a></li>';
  }
  if (strlen(get_theme_mod('username_linkedin')) > 0) {
    $res .= '<li><a target="_blank" href="https://www.linkedin.com/in/' . get_theme_mod('username_linkedin') . '"><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;LinkedIn</a></li>';
  }
  if (strlen(get_theme_mod('username_wordpress')) > 0) {
    $res .= '<li><a target="_blank" href="https://profiles.wordpress.org/' . get_theme_mod('username_wordpress') . '"><i class="fa fa-wordpress" aria-hidden="true"></i>&nbsp;Wordpress.org</a></li>';
  }
  if (strlen(get_theme_mod('paypal_donation_link')) > 0) {
    $res .= '<li><a target="_blank" href="' . get_theme_mod('paypal_donation_link') . '"><i class="fa fa-cc-paypal" aria-hidden="true"></i>&nbsp;Paypal donations</a></li>';
  }
  if (strlen(get_theme_mod('username_instagram')) > 0) {
    $res .= '<li><a target="_blank" href="https://www.instagram.com/' . get_theme_mod('username_instagram') . '"><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp;Instagram</a></li>';
  }
  if (strlen(get_theme_mod('username_flickr')) > 0) {
    $res .= '<li><a target="_blank" href="https://www.flickr.com/photos/' . get_theme_mod('username_flickr') . '"><i class="fa fa-flickr" aria-hidden="true"></i>&nbsp;Flickr</a></li>';
  }
  if (strlen(get_theme_mod('username_youtube')) > 0) {
    $res .= '<li><a target="_blank" href="https://www.youtube.com/user/' . get_theme_mod('username_youtube') . '"><i class="fa fa-youtube-square" aria-hidden="true"></i>&nbsp;YouTube</a></li>';
  }
  return $res . '</ul>';
}

/*
  [social-links size="..."]
*/
add_shortcode('social-links', function ($atts, $content = null) {
  extract(shortcode_atts( array('size' => 'fa-2x'), $atts));
  return get_social_links($size);
});

add_shortcode('social-link-list', function ($atts, $content = null) {
  return get_social_links_list();
});

?>