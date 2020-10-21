<?php 
/**
 * The template for displaying pages on Semiserious Chefs
 * 
 */

 get_header();
?>

  <main id="primary" class="site-main">
  
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

  <h1>this is page.php</h1>
<?php 
get_sidebar();
get_footer();