<article @php post_class() @endphp>
  <header>
    <div class="entry-meta-top">
      @php 
      $cat_list = get_the_category_list(' ');
      if ($cat_list) { 
        ?>
        <div class="categories">
          <?php echo $cat_list; ?>
        </div>
        <?php 
      } 
      @endphp
    </div>
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
