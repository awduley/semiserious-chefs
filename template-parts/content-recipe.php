<?php 
/**
 * Template part for displaying post content on Semiserious Chefs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="article-post">

    <div class="entry-meta">
      <h2 class="entry-title"><?php the_title(); ?></h2>
    <p><?php esc_html_e( 'Posted on', 'semiserious-chefs' ); ?> <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a> <?php esc_html_e( 'by', 'semiserious-chefs' ); ?> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></p></a>
    </div><!-- .entry-meta -->

    <div class="post-thumbnail">
      <?php
        the_post_thumbnail();
      ?>
      <div class="recipe-navigation">
        <?php the_post_navigation(
          array(
            'prev_text' => '<div class="post-nav__prev">' . esc_html__( 'Previous recipe', 'semiserious-chefs' ) . '</div> <div class="nav-title">%title</div>',

            'next_text' => '<div class="post-nav__next">' .esc_html__( 'Next recipe', 'semiserious-chefs' ) . '</div> <div class="nav-title">%title</div>'
          )
        ); ?>
      </div>
    </div>

  <div class="entry-content">
    <?php 
    
      the_content();
    
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->