<?php 
/**
 * Template part for displaying a message to let visitors know the content they are looking for can't be found
 */
?>

<section class="no-results">
  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Sorry, we can&rsquo;t seem to find what you are looking for...', 'semiserious-chefs' ); ?></h1>
  </header><!-- .page-header -->

  <div class="">
    <?php 
    if( is_home() && current_user_can( 'publish_posts' ) ) :

      printf(
        '<p>' . wp_kses(
          /* translators: 1: link to WP admin new post page. */
          __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'semiserious-chefs' ),
          array(
            'a' => array(
              'href'  => array(),
            ),
          )
        ) . '</p>',
        esc_url( admin_url( 'post-new.php' ) )
      );

    elseif( is_search() ) :
    ?>

    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'semiserious-chefs' ); ?></p>
    <?php 
    get_search_form();

    else :
    ?>

    <p><?php esc_html_e( 'It appears we weren&rsquo;t able to find what you were looking for. Perhaps a search will help.', 'semiserious-chefs' ); ?></p>
    <?php
    
    ?>
    <div class="no-results-search-form">
    <?php get_search_form(); ?>
    </div>

    <?php
    endif;
    ?>
  </div><!-- .page-content -->
</section><!-- .no-results -->