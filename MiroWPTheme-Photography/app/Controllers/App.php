<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {
  public function siteName() {
    return get_bloginfo('name');
  }

  public static function title() {
    if (is_home() || is_front_page()) {
      // nothing for now
    } else if (is_archive()) {
      return get_the_archive_title();
    } else if (is_search()) {
      return sprintf(__('Search Results for %s', 'sage'), get_search_query());
    } else if (is_404()) {
      return __('Not Found', 'sage');
    } else {    
      return get_the_title();
    }
  }
}
