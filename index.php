<?php 
/**
 * This is the main template file. It acts as a fall back or default template if nothing more specific can be found.
 */

 get_header();
?>

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
          get_template_part( 'template-parts/content', get_post_type() );

        endwhile;

        the_posts_navigation();

      else :

        get_template_part( 'template-parts/content', 'none' );

      endif;
         ?>
<h1>this is index.php</h1>
  </main><!-- #primary -->

  <?php 
  get_footer();