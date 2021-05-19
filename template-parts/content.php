<?php 
/**
 * Template part for displaying post content on Semiserious Chefs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="article-post">

    <div class="entry-meta">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php esc_html_e( 'Posted on', 'semiserious-chefs' ); ?> <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a> <?php esc_html_e( 'by', 'semiserious-chefs' ); ?> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></p></a>
    </div><!-- .entry-meta -->

    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>

  <div class="entry-content">

    <div class="recent-posts__excerpt">
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink() ?>" class="read-more"><?php esc_html_e( 'Read more', 'semiserious-chefs' ); ?></a>
    </div><!-- .recent-posts__excerpt -->
    
    <?php
      //the_content();
    
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->