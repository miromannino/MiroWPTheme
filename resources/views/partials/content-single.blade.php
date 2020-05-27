<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer class="entry-meta-bottom">
    <div class="post-date">
      <time class="entry-date" datetime="<?php echo get_the_date( 'c' ); ?>" pubdate>
        <span class="month"><?php echo get_the_date('M'); ?></span>
        <span class="day"><?php echo get_the_date('d'); ?></span>
        <span class="year"><?php echo get_the_date('Y'); ?></span>
      </time>
    </div>
    <!-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} -->
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
