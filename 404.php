<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
 
get_header(); ?>

	<div id="primary">
		<div id="content" role="main">
                <article id="post-0" class="post error404 hentry">
                	<div>
	                    <header class="entry-header">
	                        <h1 class="entry-title"><?php _e( 'Page not found', 'miro' ); ?></h1>
	                    </header>
	    
	                    <div class="entry-content">
	                        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'miro' ); ?></p>
	    
	                        <?php get_search_form(); ?>
	    
	                        <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
	    
	                        <div class="widget">
	                            <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'miro' ); ?></h2>
	                            <ul>
	                            <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
	                            </ul>
	                        </div>
	    
	                        <?php
	                        $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'miro' ), convert_smilies( ':)' ) ) . '</p>';
	                        the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), "after_title=</h2>$archive_content" );
	                        ?>
	    
	                        <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
	    
	                    </div><!-- .entry-content -->
					</div>
                </article><!-- #post-0 -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>