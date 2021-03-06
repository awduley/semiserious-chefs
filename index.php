<?php 
/**
 * This is the main template file. It acts as a fall back or default template if nothing more specific can be found.
 */

 get_header();
?>
  <div class="content-wrap">
  <main id="primary" class="site-main">

    <?php 
      if( have_posts() ) :

        if( ! is_home() && ! is_front_page() ) :
    ?>
          <header class="page-header">
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
          </header>
        <?php 
        endif;

        /* Start the loop */
        while( have_posts() ) :
          the_post();

          /* Get the post-type-specific template for the content. */
          get_template_part( 'template-parts/content' );

        endwhile;

        // the_posts_navigation();
        //posts_nav_link();

      else :

        get_template_part( 'template-parts/content', 'none' );

      endif;
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