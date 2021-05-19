<?php 
/**
 * The home template for all the blog posts.
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

  <main id="primary" class="site-main main-blog">
    
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