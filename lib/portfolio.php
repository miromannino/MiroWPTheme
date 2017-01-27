<?php

/**
 * Portfolio
 */
function doShortcode($text) {
  $replaces = array(
    '&#8221;' => '"',
    '&#8220;' => '"',
    '&#8217;' => '\'',
    '&#8216;' => '\'',
    '&#215;' => 'x',
  );
  return do_shortcode(str_replace(array_keys($replaces), array_values($replaces), $text));
}

/*
  [portfolio id="..."]...[/portfolio]
*/
add_shortcode('portfolio', function ($atts, $content = null) {
  extract(shortcode_atts(array('id' => ''), $atts));

  $v = get_transient('portfolio' . get_the_ID() . $id);
  if (false === $v) { // if transient not set, do this!
    $v = '<div class="portfolio">' . doShortcode($content) . '</div>';
    set_transient('portfolio' . get_the_ID(), $v, 60*60);
  }
  return $v;
});

/*
  [portfolio-entry]...[/portfolio-entry]
*/
add_shortcode('portfolio-entry', function ($atts, $content = null) {
  return '<div class="portfolio-entry">' . doShortcode($content) . '</div>';
});

/*
  [portfolio-title href="..." ]Title[/portfolio-title]
*/
add_shortcode('portfolio-title', function ($atts, $content = null) {
  extract(shortcode_atts(array('href' => ''), $atts));

  if(strlen($href) == 0)
    return '<h3>' . $content . '</h3>';
  else
    return '<h3><a href="' . $href . '" title="' . $content . '">' . $content . '</a></h3>';
});

/*
  [portfolio-attrs image="..."]...[/portfolio-attrs]
*/
add_shortcode('portfolio-attrs', function ($atts, $content = null) {
  extract(shortcode_atts( array('image' => ''), $atts));

  $ris = '';

  if(strlen($image) == 0)
    $ris .= '<div class="portfolio-attrs">'
      .   '  <div class="entryData col-xs-12">'
      .       doShortcode($content)
      .   '  </div>'
      .   '</div>';
  else
    $ris .= '<div class="row portfolio-attrs">'
      .   '  <div class="col-sm-6 col-xs-12">'
      .   '   <figure class="figure">'
      .   '    <img class="figure-img rounded" src="' . $image . '" />'
      .   '   </figure>'
      .   '  </div>'
      .   '  <div class="col-sm-6 col-xs-12">'
      .       doShortcode($content)
      .   '  </div>'
      .   '</div>';

  return $ris;
});

/*
  [portfolio-attr label="..." ]...[/portfolio-attr]
*/
add_shortcode('portfolio-attr', function ($atts, $content = null) {
  extract( shortcode_atts( array('label' => ''), $atts));

  return '<div class="portfolio-attr">'
    .   ((strlen($label) == 0) ? '' : ('<span class="attr-label">' . $label . ': </span>'))
    .   $content
    .   '</div>';
});

/*
  [portfolio-links href="..." ]...[/portfolio-links]
*/
add_shortcode('portfolio-links', function ($atts, $content = null) {
  $ris = '';

  $ris = '<div class="portfolio-links">'
    . doShortcode($content)
    .  '</div>';

  return $ris;
});

/*
  [portfolio-link href="..." target="..."]...[/portfolio-link]
*/
add_shortcode('portfolio-link', function ($atts, $content = null) {
  extract(shortcode_atts(array('href' => '', 'target' => ''), $atts));

  return  '<a href="' 
        . $href . '"' . ((strlen($target) == 0)? '' : (' target="' . $target . '"')) 
        . 'class="btn btn-primary btn-sm">' . $content . '</a>';
});

/*
  [portfolio-description ]...[/portfolio-description]
*/
add_shortcode('portfolio-description', function ($atts, $content = null) {
  return  ' <div class="portfolio-description">' . $content . ' </div>';
});

?>