<!doctype html>
<html {!! get_language_attributes() !!}>

  @include('partials.head')

  <body @php body_class() @endphp>
    
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="header-img-container"><svg id="animated-header"/></div>
    <div class="header-img-container-white-filler">&nbsp;</div>
    
    <div class="content-container content-container-img-header">
      <div class="wrap container fadeIn" role="document">
        <div class="content row">
          @if (App\display_sidebar())
            <main class="main col-lg-9">
              @yield('content')
            </main>
            <aside class="sidebar col-lg-3 d-none d-lg-block fadeIn">
              @include('partials.sidebar')
            </aside>
          @else
            <main class="main">
              @yield('content')
            </main>
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
