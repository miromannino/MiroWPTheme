<!doctype html>
<html {!! get_language_attributes() !!}>

  @include('partials.head')

  <body @php body_class() @endphp>
    
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="header-img-container">
      @php
        $custom_header = get_custom_header_markup();
        if (!empty( $custom_header)) {
          echo($custom_header);
        }
      @endphp
    </div>
    
    <div class="content-container">
      <div class="wrap container fadeIn" role="document">
        <div class="content row">
          <main class="main col-12">
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
    
    @if (function_exists('get_field') && get_field('footer_script'))
      {{!! the_field('footer_script') !!}}
    @endif

    @if (strlen(get_theme_mod('twitter_tag_code')) > 0)
      {{!! get_theme_mod('twitter_tag_code') !!}}
    @endif

    @php wp_footer() @endphp

  </body>
</html>
