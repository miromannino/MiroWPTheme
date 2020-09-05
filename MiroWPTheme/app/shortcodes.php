<?php

namespace App;

use App\Controllers\App;

if (class_exists('Shortcodes')) return;

class Shortcodes {
    public function __construct() {
        $shortcodes = [
            'box',
            'date',
            'month',
            'day',
            'year'
        ];

        return collect($shortcodes)
            ->map(function ($shortcode) {
                return add_shortcode($shortcode, [$this, strtr($shortcode, ['-' => '_'])]);
            });
    }

    /*
      [button href="..." target="..."]...[/button]
    */
    public function box($atts, $content = null) {
      extract( shortcode_atts( array('href' => '', 'target' => ''), $atts));

  return '<a class="btn btn-primary btn-sm" href="' 
          . $href . '"' . ((strlen($target) == 0)? '' : (' target="' . $target . '"')) . '>' 
        . $content 
        . '</a>';
    }

}

new Shortcodes();
?>