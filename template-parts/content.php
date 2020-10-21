<?php 
/**
 * Template part for displaying post content on Semiserious Chefs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php 
    if( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '"rel="bookmark">', '</a></h2>' );
    endif;

    if( 'post' === get_post_type() ) :
    ?>
    <div class="entry-meta">
    <?php 
    //echo posted_on();
    ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php the_post_thumbnail(); ?>

  <div class="entry-content">
  <?php 
  wp_link_pages(
    array(
      'before'  => '<div class="page-links">' . esc_html__( 'Pages:', 'semiserious-chefs' ),
      'after'   => '</div>'
    )
  )
  ?>
  </div><!-- .entry-content -->
  
</article><!-- #post-<?php the_ID(); ?> -->