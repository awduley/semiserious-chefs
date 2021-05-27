<?php 
/**
 * Template part for displaying page content on Semiserious Chefs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header page-entry-header">
    <?php the_title( '<h1 class="entry-title page-entry-title entry-title">', '</h1' ); ?>
  </header><!-- .page-entry-header -->

  <div class="entry-thumbnail page-thumbnail">
    <?php
      the_post_thumbnail();
    ?>
  </div>

  <div class="entry-content page-entry-content">
    <?php 
    the_content();

    ?>

    <?php if( is_page('7')) :
      echo do_shortcode('[contact-form-7 id="117" title="Contact form 1"]');
    endif; ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID() ?> -->