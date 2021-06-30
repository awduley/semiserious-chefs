<article class="article-search">
  <a href="<?php the_permalink(); ?>"><h2 class="article-search__title"><?php the_title(); ?></h2></a>

  <div class="article-search__container">

    <div class="article-search__thumbnail">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>

    <div class="article-search__content">

    <div class="article-search__excerpt"><?php the_excerpt(); ?></div>

      <div class="article-search__meta">
        <p><?php esc_html_e( 'Posted on', 'semiserious-chefs' ); ?> <?php echo get_the_date(); ?></p>

        <?php if ( has_category() ) : ?>

        <p><?php esc_html_e( 'Categories:', 'semiserious-chefs' ); ?> <?php the_category( ', ' ); ?></p>

        <?php endif; ?>

        <p><?php the_tags(); ?></p>
      </div>
    </div><!-- .article-search__content -->
  </div><!-- .article-search__container -->
</article>
