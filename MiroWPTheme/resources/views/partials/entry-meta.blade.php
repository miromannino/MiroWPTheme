<header class="entry-meta">
    @php
      if (has_post_thumbnail() && !(is_single())) {
        $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-thumbnail');
    @endphp
    <a href="{{ get_permalink() }}">
      <img class="wp-post-image rounded" src="<?php echo $large_image_url[0] ?>" />
    </a>
    @php
      } 
    @endphp
</header>