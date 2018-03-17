<?php

/* Replace the original version of WP_Widget_Meta with the following one */
add_action('widgets_init', function () {
    unregister_widget('WP_Widget_Meta');
    register_widget('WP_Widget_Meta_Mod');
});

/*
 * Modified version of wp-includes/widgets/class-wp-widget-meta.php
*/
class WP_Widget_Meta_Mod extends WP_Widget {

  public function __construct() {
    $widget_ops = array(
      'classname' => 'widget_meta',
      'description' => __( 'Login, RSS, &amp; WordPress.org links.' ),
      'customize_selective_refresh' => true,
    );
    parent::__construct( 'meta', __( 'Meta' ), $widget_ops );
  }

  public function widget( $args, $instance ) {
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $title = apply_filters( 'widget_title', empty($instance['title']) ? __( 'Meta' ) : $instance['title'], $instance, $this->id_base );

    echo $args['before_widget'];
    if ( $title ) {
      echo $args['before_title'] . $title . $args['after_title'];
    }
      ?>
      <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <li><a href="<?php echo esc_url( get_bloginfo( 'rss2_url' ) ); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
      <li><a href="<?php echo esc_url( get_bloginfo( 'comments_rss2_url' ) ); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
      <?php
      wp_meta();
      ?>
      </ul>
      <?php
    echo $args['after_widget'];
  }

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = sanitize_text_field( $new_instance['title'] );

    return $instance;
  }

  public function form( $instance ) {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = sanitize_text_field( $instance['title'] );
?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
<?php
  }
}
