<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    // nothing for now
  } elseif (is_front_page()) {
    // nothing for now
  } elseif (is_archive()) {
    return '<div class="archive-title">' . get_the_archive_title() . '</div>';
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return '<h1>' . get_the_title() . '</h1>';
  }
}


function add_titles($content) {
  if (!is_singular() || $content == '') return $content;
  return preg_replace_callback('/(\<h[2-6].*?)\>(.*)(<\/h[2-6]>)/i', function($matches) {
    if (!stripos($matches[0], 'id=')) {
      $stitle = sanitize_title($matches[2]);
      $matches[0] = $matches[1] . '>' 
        . '<a href="#' . $stitle . '" class="anchor">#</a>' 
        . '<div class="placeholder" id="' . $stitle . '">&nbsp;</div>'
        . $matches[2] . $matches[3];
    } 
    return $matches[0];
  }, $content);
  return $content;
}