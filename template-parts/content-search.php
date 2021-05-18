<article class="article-search">
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

  <div class="meta-info">

    <p><?php esc_html_e( 'Posted on', 'semiserious-chefs' ); ?> <?php echo get_the_date(); ?></p>

    <?php if ( has_category() ) : ?>

      <p><?php esc_html_e( 'Categories:', 'semiserious-chefs' ); ?> <?php the_category( ', ' ); ?></p>

    <?php endif; ?>

    <p><?php the_tags(); ?></p>

    <p><?php the_excerpt(); ?></p>

  </div><!-- .meta-info -->
</article>
