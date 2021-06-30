<?php 
/**
 * Template for displaying Semiserious Chef posts
 */

 get_header();
?>

  <div class="content-wrap">
  <main id="primary" class="site-main main-recipe">
  
    <?php 
    while( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'recipe' );
      
      ?>
      <?php
      // If comments are open or there is at least one comment, the comment template will be loaded
      if( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile;
    ?>

  </main><!-- #primary -->
  <section class="double-sidebar">
    <?php
      if( is_active_sidebar( 'sidebar-1' ) ):
      get_sidebar( '1' ); 
      endif;
      if( is_active_sidebar( 'sidebar-2' ) ):
        get_sidebar( '2' ); 
        endif;
      ?>
  </section>
  
  </div><!-- .content-wrap -->
<?php
if( is_active_sidebar( 'sidebar-bottom' ) ) : 
  get_sidebar( 'bottom' );
endif;
get_footer();