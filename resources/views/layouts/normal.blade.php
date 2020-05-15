<!doctype html>
<html {!! get_language_attributes() !!}>

  @include('partials.head')

  <body @php body_class() @endphp>
    
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="header-img-container"><svg id="graph"/></div>
    <div class="header-img-container-white-filler">&nbsp;</div>
    
    <div class="content-container content-container-img-header">
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
