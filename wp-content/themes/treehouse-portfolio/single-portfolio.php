<?php
  /*
    # ==========================================================================
    # single-portfolio.php
    #
    # single-post.php template is used for single custom posts
    # ==========================================================================
    */
      
?>



<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
          <div class="primary">

          <?php /** the_field is not worpress specific its plugins way to display the content we defined in plugin  **/ ?>
          <?php the_field('images'); ?>    


        </div>
      </div>
      
      <!-- Secondary Column -->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">
          
          <h1><?php the_title(); ?></h1>
          <p><?php the_field('description'); ?></p>
          
          <p>
          <?php if (get_previous_post_link()): ?>
            <?php
              /** Previous Link  **/
              previous_post_link(); 
            ?> -
          <?php endif ?>
            
            <a href="<?php bloginfo('url'); ?>/?page_id=37">Back to Portfolio</a> -
            
            <?php
              /** Next Link  **/
              next_post_link();
              
            ?>
          </p>

        </div>
      </div>
          <?php endwhile; else : ?>              
          <?php endif; ?>

    </div>
  </div>
</section>

<?php
/** Load Footer  **/
get_footer();
?>

