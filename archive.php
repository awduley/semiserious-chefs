<?php 
/**
 * This is the archive file to display by author, category, tag, or date
 */

 get_header();
?>
  <div class="content-wrap">
  <main id="primary" class="site-main">

  <h1 class="archive-title"><?php the_archive_title(); ?></h1>

  <?php 
  
    the_archive_description();

    if ( have_posts() ) :
      while( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'archive' );

      endwhile;
    ?>

    <div class=" pagination pagination-archive">
      <?php previous_posts_link( esc_html_e( "<< Newer posts", 'semiserious-chefs' ) ); ?>
      <?php next_posts_link( esc_html_e( "Older posts >>", 'semiserious-chefs' ) ); ?>
    </div>
      
    <?php
      else :
        ?>
        <h2><?php esc_html_e( 'Sorry, there&rsquo;s nothing here to display', 'semiserious-chefs' ); ?></h2>
       
    <?php
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