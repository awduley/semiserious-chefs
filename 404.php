<?php 
/**
 * This is the 404 template file to show users when the page they are looking for could not be found
 */

get_header();
?> 

  <main class="error-404" role="main"> 
    
    <header>
      <h1><?php echo esc_html__( 'Page not found...', 'semiserious-chefs' ); ?></h1>
      <p><?php echo esc_html__( 'It appears that the page you requested doesn\'t exist on this site.', 'semiserious-chefs' ); ?></p>
    </header>

    <div class="error">
      <p><?php echo esc_html__( 'Perhaps a search would help?', 'semiserious-chefs' ); ?></p>
      <?php get_search_form(); ?>
    </div>

    <div class="error-latest-posts">
      <?php the_widget( 'WP_Widget_Recent_Posts', [
          'title'     => __( 'Latest Posts', 'semiserious-chefs' ),
          'number'    => 3
        ] ); ?>
    </div>

  </main><!-- .error-404 -->

<?php
get_footer();