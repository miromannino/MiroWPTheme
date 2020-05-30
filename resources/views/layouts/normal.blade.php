<!doctype html>
<html {!! get_language_attributes() !!}>

  @include('partials.head')

  <body @php body_class() @endphp>
    
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="header-img-container">
      @php
      if (!is_front_page()) {
        if (has_post_thumbnail() && (is_single() || is_page())) {
          $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-thumbnail');
      @endphp
      <img class="wp-post-image" src="<?php echo $large_image_url[0] ?>" />
      @php
        } else {
      @endphp
      <?php the_custom_header_markup(); ?>
      @php
        }
      }
      @endphp
    </div>
    
    <div class="content-container">
      <div class="wrap container fadeIn" role="document">
        <div class="content row">
          <main class="main">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar fadeIn">
              @include('partials.sidebar')
            </aside>
          @endif
        </div>
      </div>
    </div>

    @if (App\display_sidebar())
      @include('partials.footer-sidebar')
    @else
      @include('partials.footer')
    @endif
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
    
    @if (function_exists('get_field') && get_field('footer_script'))
      {{!! the_field('footer_script') !!}}
    @endif

    @if (strlen(get_theme_mod('twitter_tag_code')) > 0)
      {{!! get_theme_mod('twitter_tag_code') !!}}
    @endif

  </body>
</html>
