<?php 
/**
 * Template for displaying Semiserious Chef posts
 */

 get_header();
?>

  <div class="content-wrap">
  <main id="primary" class="site-main main-post">
  
    <?php 
    while( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'single' );
      ?>

      <div class="single-nav">
        <div class="prev-post">
          <?php previous_post_link('%link'); ?>
        </div>
        <div class="next-post">
          <?php next_post_link('%link'); ?>
        </div>
      </div>
      
    <?php
      // If comments are open or there is at least one comment, the comment template will be loaded
      if( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile;
    ?>

  </main><!-- #primary -->
  <?php 
  if( is_active_sidebar( 'sidebar' ) ):
    get_sidebar(); 
  endif;
  ?>
  </div><!-- .content-wrap -->
<?php
if( is_active_sidebar( 'sidebar-bottom' ) ) : 
  get_sidebar( 'bottom' );
endif;
get_footer();
?>