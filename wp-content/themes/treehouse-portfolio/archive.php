<?php
  /*
  # ============================================================================
  # archive.php
  #
  # Archive Page 
  # ============================================================================
  */
  
?>

<?php get_header(); ?>

  <section class="two-column row no-max pad">
    <div class="small-12 columns">
      <div class="row">
        <!-- Primary Column -->
        <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
          <div class="primary">
            <div class="leader">
              <h2><?php wp_title(' '); ?> Blog Posts</h2>
            </div>
          	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
              <article class="post">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
                <ul class="post-meta no-bullet">
                  <li class="author">
                    <a href="author.html">
                      <span class="wpt-avatar small">
                        <?php echo get_avatar( get_the_author_meta('ID') ,24 ) ?>
                      </span>
                        by <?php the_author_posts_link(); ?>
                    </a>
                  </li>
                  <li class="cat">in <?php the_category('&bull;'); ?></li>
                  <li class="date">on <?php the_time('F j, Y'); ?></li>
                </ul>
                <?php if (get_the_post_thumbnail()): ?>
                  <div class="img-container">
                    <?php the_post_thumbnail(); ?>
                    <p>Photo by Gratt Spore</p>
                  </div>
                <?php endif ?>
                  
              </article>
        		
        		<?php endwhile; else : ?>
        		
        			<p><?php _e( 'Sorry, no page is available.' ); ?></p>
              
            <?php endif; ?>

          </div>
        </div>
        
      <?php
        /** Load Sidebar  **/
        get_sidebar();
      ?>
      </div>
    </div>
  </section>

<?php
/** Load Footer  **/
get_footer();
?>

