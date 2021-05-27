<?php 
/**
 * Template for displaying pages
 */

 get_header( 'page' );
?>
  <div class="content-wrap">
  <main id="primary" class="site-main main-page">

    <section class="page-content">

    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        endwhile;
      endif;
    ?>
      
    </section><!-- .page-content -->

  </main><!-- #primary -->
  
  </div><!-- .content-wrap -->
<?php
if( is_active_sidebar( 'sidebar-bottom' ) ) : 
  get_sidebar( 'bottom' );
endif;
get_footer();