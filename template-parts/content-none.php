<?php 
/**
 * Template part for displaying a message to let visitors know the content they are looking for can't be found
 */
?>

<section class="no-results">
  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Sorry, we can&rsquo;t seem to find what you are looking for...', 'semiserious-chefs' ); ?></h1>
  </header><!-- .page-header -->

      <div class="page-not-found-img-container">
        <img src="<?php echo get_template_directory_uri() . '/img/beaver.svg'; ?>" alt="Page not found Beaver" class="page-not-found-img">
      </div>

    <p><?php esc_html_e( 'We apologize for the inconvenience. Perhaps a search will help?', 'semiserious-chefs' ); ?></p>
    <?php
    
    ?>
    <div class="no-results-search-form">
    <?php get_search_form(); ?>
    </div>

    <div class="error-latest-posts">
      <?php the_widget( 'WP_Widget_Recent_Posts', [
          'title'     => __( 'Latest Posts', 'semiserious-chefs' ),
          'number'    => 6
        ] ); ?>
    </div>

  </div><!-- .page-content -->
</section><!-- .no-results -->