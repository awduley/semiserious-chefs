<?php 
/**
 * Template part for displaying page content on Semiserious chefs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1' ); ?>
  </header><!-- .entry-header -->

  <?php the_post_thumbnail(); ?>

  <div class="entry-content">
    <?php 
    the_content();

    wp_link_pages(
      array(
        'before'  => '<div class="page-links">' . esc_html__( 'Pages:', 'crypto-template' ),
        'after'   => '</div>'
      )
    );
    ?>
  </div><!-- .entry-content -->
    
    <?php /* Perhaps we'll add a get_edit_post_link() in the future */ ?>

</article><!-- #post-<?php the_ID() ?> -->