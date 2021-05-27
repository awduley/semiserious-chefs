<?php 
/**
 * File that displays search results to users
 */

 get_header();
?>
  <div class="content-wrap">
  <main id="primary" class="site-main main-search">

    <h2 class="search-results">
      <?php esc_html__( 'Search results for: ', 'semiserious-chefs' ); ?>
    </h2>

    <?php 

      if( have_posts() ) :

        /* Start the loop */
        while( have_posts() ) :
          the_post();
          get_template_part( 'template-parts/content', 'search' );

          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        endwhile;

        the_posts_pagination(
          [
            'prev_text'   => esc_html_e( 'Previous', 'semiserious-chefs' ),
            'next_text'   => esc_html_e( 'Next', 'semiserious-chefs' ),
            'type'        => 'list'
          ]
        );
      else :
      ?>
        <p <?php esc_html_e( 'Sorry, we couldn\'t find anything that matched your criteria.' ); ?>></p>
        
      <?php 

      endif;

      ?>
<h1>search.php</h1>
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