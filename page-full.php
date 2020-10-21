<?php 
/**
 * Template for displaying a full width page
 * 
 * Template Name: Full Width
 */

 get_header();
?>

  <main id="primary" class="site-main full-width">
  
    <?php 
    while( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or there is at least one comment, the comment template will be loaded
      if( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile;
    ?>

  </main><!-- #primary -->
  <?php 
  get_footer();