<?php 
/**
 * File that displays search results to users
 */

 get_header();
?>
  <div class="content-wrap">
  <main id="primary" class="site-main main-search">

    <?php 

      if( have_posts() ) :

        /* Start the loop */
        while( have_posts() ) :
          the_post();
          get_template_part( 'template-parts/content', 'search' );
          ?>
          
          <?php
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        endwhile;
        ?>

          <div class="paginate-links ">
            <?php semiserious_chefs_number_pagination() ?>
          </div>

        <?php

      else :
      get_template_part( 'template-parts/content', 'none' );

      ?>
      

          
      <?php endif; ?>

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