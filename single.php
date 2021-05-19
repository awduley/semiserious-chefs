<?php 
/**
 * Template for displaying Semiserious Chef posts
 */

 get_header();
?>

  <div class="content-wrap">
  <main id="primary" class="site-main">
  
    <?php 
    while( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'single' );
      ?>

      <div class="post-navigation">
        <?php the_post_navigation(
        array(
          'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'semiserious-chefs' ) . '</span> <span class="nav-title">%title</span>', 
          'next_text' => '<span class="nav-subtitle">' .esc_html__( 'Next:', 'semiserious-chefs' ) . '</span> <span class="nav-title">%title</span>'
        )
      ); ?>
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