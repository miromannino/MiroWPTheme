<article <?php post_class(); ?>>
  <header>
    <div class="entry-meta-top">
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
    </div>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(__('Read more <span class="meta-nav">&rarr;</span>', 'sage')); ?>
  </div>
</article>
