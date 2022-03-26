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
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_content(__('Read more <span class="meta-nav">&rarr;</span>', 'sage')); @endphp
  </div>
</article>
