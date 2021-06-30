<?php 
/**
 * This is the 404 template file to show users when the page they are looking for could not be found
 */

get_header();
?> 
  <div class="content-wrap">

  <main class="error-404" role="main"> 
    
    <header>
      <h1 class="page-not-found"><?php echo esc_html__( 'Uh Oh! Page Not Found...', 'semiserious-chefs' ); ?></h1>
      <div class="page-not-found-img-container">
        <img src="<?php echo get_template_directory_uri() . '/img/lemmling-yak.svg'; ?>" alt="Page not found Yak" class="page-not-found-img">
      </div>
      <p><?php echo esc_html__( 'It appears that the page you requested doesn\'t exist on this site.', 'semiserious-chefs' ); ?></p>
    </header>

    <div class="error">
      <p><?php echo esc_html__( 'Perhaps a search would help?', 'semiserious-chefs' ); ?></p>
      <?php get_search_form(); ?>
    </div>

    <div class="error-latest-posts">
      <?php the_widget( 'WP_Widget_Recent_Posts', [
          'title'     => __( 'Latest Posts', 'semiserious-chefs' ),
          'number'    => 6
        ] ); ?>
    </div>

  </main><!-- .error-404 -->

  </div><!-- .content-wrap -->
<?php
if( is_active_sidebar( 'sidebar-bottom' ) ) : 
  get_sidebar( 'bottom' );
endif;
get_footer();