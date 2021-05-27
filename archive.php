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

    <div class="paginate-links">
      <?php semiserious_chefs_number_pagination() ?>
    </div>

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