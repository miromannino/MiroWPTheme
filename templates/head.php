<head>
  <?php if (strlen(get_theme_mod('ganalytics_tag_code')) > 0) {
    echo get_theme_mod('ganalytics_tag_code');
  } ?>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
