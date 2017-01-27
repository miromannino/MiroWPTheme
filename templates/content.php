<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(__('Read more <span class="meta-nav">&rarr;</span>', 'sage')); ?>
  </div>
  <div class="entry-meta-bottom">
    <?php 
    $cat_list = get_the_category_list(' ');
    if ($cat_list) { 
      ?>
      <div class="categories">
        <?php echo $cat_list; ?>
      </div>
      <?php 
    } 
    ?>
    <div class="post-date">
      <time class="entry-date" datetime="<?php echo get_the_date( 'c' ); ?>" pubdate>
        <span class="month"><?php echo get_the_date('M'); ?></span>
        <span class="day"><?php echo get_the_date('d'); ?></span>
        <span class="year"><?php echo get_the_date('Y'); ?></span>
      </time>
    </div>
  </div>
</article>
