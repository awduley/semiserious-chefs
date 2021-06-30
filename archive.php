<?php 
/**
 * The archive template for the theme.
 */

 get_header();
?>


  <?php 
    if( have_posts() ) :

      if( is_home() && ! is_front_page() ) :
        ?>
        <header>
          <h1 class="page-title screen-reader-text">
          <?php single_post_title(); ?></h1>
        </header>
    <?php 
    endif;
  ?>

  <div class="content-wrap"> 

  <main id="primary" class="site-main main-archive">
    
  <?php
    /* start the loop */
    while( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content' );

    endwhile;

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>


  </main><!-- #primary -->
  

  </div><!-- .content-wrap -->

    <div class="paginate-links">
      <?php semiserious_chefs_number_pagination() ?>
    </div>
<?php

if( is_active_sidebar( 'sidebar-bottom' ) ) : 
  get_sidebar( 'bottom' );
endif;
get_footer();