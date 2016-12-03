<?php
  /** setting up the page for the portfolio type posts using WP_Query functions **/
  
  $page_num = ( is_front_page() ) ? 4 : -1 ;


  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $page_num
  );

  $query = new WP_Query($args);
?>



<!-- Displays the content of the page -->
<section class="row no-max pad">

  <?php if($query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns grid-item">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('large'); ?>
    </a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>