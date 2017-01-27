<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer class="entry-meta-bottom">
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
      <!-- <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?> -->
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
