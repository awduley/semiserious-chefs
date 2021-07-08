<?php 
/**
 * Template for displaying our very special and beautiful front page
 */

 get_header();
?>
  <div class="content-wrap">
  <main id="primary" class="site-main">

    <section class="newest-recipes margin-container">
      <h4 class="margin-y-md newest-recipes__heading"><span class="accent-secondary-1-2"><?php echo esc_html__( 'Newest', 'semiserious-chefs' ); ?> </span><?php echo esc_html__( 'Recipes!', 'semiserious-chefs' ); ?></h4>

      <div class="newest-recipes__container">
        <?php 
          $argsNewestRecipes = array(
            'post_type'         => 'ssc_recipes',
            'posts_per_page'    => 4
          );
          $newestRecipes = new WP_Query( $argsNewestRecipes );
          if( $newestRecipes->have_posts() ) :
            while( $newestRecipes->have_posts() ) :
              $newestRecipes->the_post();
        ?>
          
        <div class="newest-recipes__post"> 

          <a href="<?php the_permalink(); ?>"><div class="newest-recipes__img"><?php the_post_thumbnail(); ?></div></a>

          <div class="newest-recipes__bottom">
            
          </div><!-- .newest-recipes__bottom -->

          <a class="newest-recipes__link" href="<?php the_permalink(); ?>">
            <h3 class="newest-recipes__title margin-y-md">
              <?php the_title(); ?>
            </h3><!-- .newest-recipes__title -->
          </a><!-- .newest-recipes__link -->
          
          
        </div><!-- .newest-recipes__post -->
          <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
        
      </div><!-- .newest-recipes__container -->
    </section><!-- .newest-recipes -->

    <section class="recent-posts margin-container">
      <h4 class="margin-y-lg recent-posts__heading"><span class="accent-secondary-1-2"><?php esc_html_e( 'Newest', 'semiserious-chefs' ); ?> </span><?php esc_html_e( 'blog posts', 'semiserious-chefs' ); ?> <i class="far fa-grin-wink"></i></h4>
      
      <div class="recent-posts__container">
        
        <?php 
          $argsRecentPosts = array(
            'post_type'         => 'post',
            'posts_per_page'    => 4
          );
          $recentPosts = new WP_Query( $argsRecentPosts );
          if ( $recentPosts->have_posts() ) :
            while( $recentPosts->have_posts() ) :
              $recentPosts->the_post();
          ?>
        <div class="recent-posts__post">

          <a href="<?php the_permalink(); ?>"><div class="recent-posts__img"><?php the_post_thumbnail(); ?></div></a>
          <a class="recent-posts__link" href="<?php the_permalink(); ?>">
          <h3 class="recent-posts__title margin-y-lg">
            <?php the_title(); ?>
          </h3><!-- .recent-posts__title-->
          </a>
          <div class="recent-posts__excerpt">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" class="read-more"><?php esc_html_e( 'Read more', 'semiserious-chefs' ); ?></a>
          </div><!-- .recent-posts__excerpt -->
            
        </div><!-- .recent-posts__post -->
        <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>

      </div><!-- .recent-posts__container -->
    </section><!-- .recent-posts -->

    <section class="random-recipes margin-container">
      <h4 class="margin-y-lg random-recipes__heading"><span class="accent-secondary-1-2"><?php esc_html_e( 'Fresh', 'semiserious-chefs' ); ?> </span><?php esc_html_e( 'dinner ideas!', 'semiserious-chefs' ); ?></h4>
      <div class="random-recipes__container">

        <?php 
          $argsrandomRecipes = array(
            'post_type'         => 'recipes',
            'posts_per_page'    => 6
          );
          $randomRecipes = new WP_Query( $argsrandomRecipes );
          while( $randomRecipes->have_posts() ) :
            $randomRecipes->the_post();
        ?>
          
        <div class="random-recipes__post"> 

          <a href="<?php the_permalink(); ?>"><div class="random-recipes__img"><?php the_post_thumbnail(); ?></div></a>

          <div class="random-recipes__bottom">
            
          </div><!-- .random-recipes__bottom -->

          <a class="random-recipes__link" href="<?php the_permalink(); ?>">
            <h3 class="random-recipes__title margin-y-md">
              <?php the_title(); ?>
            </h3><!-- .random-recipes__title -->
          </a>
          
        </div><!-- .random-recipes__post -->
        <?php endwhile; wp_reset_postdata(); ?>

      </div><!-- .random-recipes__container -->
    </section><!-- .random-recipes -->

    <section class="about">
        <div class="about__container margin-container">
          <img src="<?php echo get_template_directory_uri() . '/img/placeholder-couple-cropped.jpg'; ?>" alt="Vanessa and Andrew" class="about__pic">
          <div class="about__info">
            <h4 class="text-center margin-y-lg"><?php esc_html_e( 'About Us', 'semiserious-chefs' ); ?></h4>
            <p><?php esc_html_e( "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", 'semiserious-chefs' ); ?></p>
          </div>
          <div class="about__cf">
            <h4 class="text-center margin-y-lg"><?php esc_html_e( 'About CF', 'semiserious-chefs' ); ?></h4>
            <p><?php esc_html_e( "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", 'semiserious-chefs' ); ?></p>
          </div>
        </div><!-- .about-container -->
      </section><!-- .about -->










  </main><!-- #primary -->
  
  
  <section class="double-sidebar">
    <?php
      if( is_active_sidebar( 'sidebar-1' ) ):
      get_sidebar( '1' ); 
      endif;
      if( is_active_sidebar( 'sidebar-2' ) ):
        get_sidebar( '2' ); 
        endif;
      ?>
  </section>
  
  </div><!-- .content-wrap -->
<?php
if( is_active_sidebar( 'sidebar-bottom' ) ) : 
  get_sidebar( 'bottom' );
endif;
get_footer();