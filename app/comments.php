<?php
/**
 * Template for comments.
 *
 */
function miro_theme_comments( $comment, $args, $depth ) {
  switch ($comment->comment_type) :
  case 'pingback' :
  case 'trackback' :
  /*
    <li class="post pingback">
      <p><?php _e('Pingback:', 'miro'); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'miro'), ' '); ?></p>
    </li>
  */
    break;
  default :
  ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
      <article id="comment-<?php comment_ID(); ?>" class="comment">
        <footer class="comment-meta">
          <div class="comment-author vcard">
            <?php
            $avatar_size = 50;
            // if ('0' != $comment->comment_parent) $avatar_size = 50;
            echo get_avatar($comment, $avatar_size);
            printf('<cite class="fn">%s</cite>', get_comment_author());
            ?>
          </div><!-- .comment-author .vcard -->
          <div class="comment-metadata">
            <?php
            printf('%1$s%2$s at %3$s%4$s',
              '<time pubdate datetime="' . get_comment_time('c') . '">',
              get_comment_date(),
              get_comment_time(),
              '</time>');
              edit_comment_link( __('[Edit]', 'miro'), ' ');
            ?>
            <?php if ( $comment->comment_approved == '0') : ?>
              <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'miro'); ?></em>
              <br />
            <?php endif; ?>
          </footer>
          <div class="comment-content"><?php comment_text(); ?></div>
          <div class="reply">
            <?php comment_reply_link( array_merge( $args, array('reply_text' => __('Reply &darr;', 'miro'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
          </div><!-- .reply -->
        </article><!-- #comment-## -->
      </li>
    <?php
    break;
  endswitch;
}

/** Remove website field */
add_filter('comment_form_default_fields', function ($fields) {
  if(isset($fields['url'])) unset($fields['url']);
  return $fields;
});

?>