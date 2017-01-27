<?php

namespace Roots\Sage\Shortcodes;

/*
  [button href="..." target="..."]...[/button]
*/
add_shortcode('button', function ($atts, $content = null) {
  extract( shortcode_atts( array('href' => '', 'target' => ''), $atts));

  return '<a class="btn btn-primary btn-sm" href="' 
          . $href . '"' . ((strlen($target) == 0)? '' : (' target="' . $target . '"')) . '>' 
        . $content 
        . '</a>';
});


?>