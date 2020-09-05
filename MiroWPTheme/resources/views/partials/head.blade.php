<head>
  @if (strlen(get_theme_mod('ganalytics_tag_code')) > 0)
    {!! get_theme_mod('ganalytics_tag_code') !!}
  @endif
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp
</head>
