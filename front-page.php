<?php 
/**
 * Template for displaying our very special and beautiful front page
 */

 get_header();
?>
  <div class="content-wrap">
  <main id="primary" class="site-main">

    <section class="newest-recipes margin-container">
      <h4 class="margin-y-md newest-recipes__heading"><span class="accent-secondary-1-2">Newest </span>recipes!</h4>
      <div class="newest-recipes__container">

        <?php 
          $argsNewestRecipes = array(
            'post_type'         => 'recipes',
            'posts_per_page'    => 8
          );
          $newestRecipes = new WP_Query( $argsNewestRecipes );
          while( $newestRecipes->have_posts() ) :
            $newestRecipes->the_post();
        ?>
          
        <div class="newest-recipes__post"> 

          <a href="<?php the_permalink(); ?>"><div class="newest-recipes__img"><?php the_post_thumbnail(); ?></div></a>

          <div class="newest-recipes__bottom">
            <a class="newest-recipes__link" href="<?php the_permalink(); ?>">
            <h3 class="newest-recipes__title margin-y-md">
              <?php the_title(); ?>
            </h3><!-- .newest-recipes__title -->
          </div><!-- .newest-recipes__bottom -->
          </a>
          
        </div><!-- .newest-recipes__post -->
        <?php endwhile; wp_reset_postdata(); ?>

      </div><!-- .newest-recipes__container -->
    </section><!-- .newest-recipes -->

    <section class="about">
        <div class="about__container margin-container">
          <img src="<?php echo get_template_directory_uri() . '/img/placeholder-couple-cropped.jpg'; ?>" alt="Vanessa and Andrew" class="about__pic">
          <div class="about__info">
            <h4 class="text-center">About Us</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div class="about__cf">
            <h4 class="text-center">About CF</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div><!-- .about-container -->
      </section><!-- .about -->

    <section class="recent-posts margin-container">
      <h4 class="margin-y-md recent-posts__heading"><span class="accent-secondary-1-2">Newest </span>blog posts <i class="far fa-grin-wink"></i></h4>
      <div class="recent-posts__container">
        
        <?php 
          $argsRecentPosts = array(
            'post_type'         => 'post',
            'posts_per_page'    => 6
          );
          $recentPosts = new WP_Query( $argsRecentPosts );
          while( $recentPosts->have_posts() ) :
            $recentPosts->the_post();
        ?>
        <div class="recent-posts__post">

          <a class="recent-posts__link" href="<?php the_permalink(); ?>">
          <h3 class="recent-posts__title margin-y-md">
            <?php the_title(); ?>
          </h3><!-- .recent-posts__title-->
          </a>
          <a href="<?php the_permalink(); ?>"><div class="recent-posts__img"><?php the_post_thumbnail(); ?></div></a>
          <div class="recent-posts__excerpt">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" class="read-more">Read more</a>
          </div><!-- .recent-posts__excerpt -->
            
        </div><!-- .recent-posts__post -->
        <?php endwhile; wp_reset_postdata(); ?>

      </div><!-- .recent-posts__container -->
    </section><!-- .recent-posts -->



    <section class="ingrediently margin-container">
      <h3 class="margin-y-xl ingrediently-heading text-center"><span class="accent-secondary-1-2">Ingrediently </span>&#8208; my new book!</h3>
      <div class="ingrediently-container">
        <div class="ingrediently-container__info">
          <ul class="ingrediently-container__items">
            <li class="ingrediently-container__item">
              Stuffed to the brim with history and knowledge of all your favorite ingredients. 
            </li>
            <li class="ingrediently-container__item">
              Tried and true recipes I've personally created and refined over time. 
            </li>
            <li class="ingrediently-container__item">
              This book is for those who love learning about and trying new food.
            </li>
            <li class="ingrediently-container__item">
              From Morocco through the Mediterranean and the middle east all the way to east Asia, this book has it covered.
            </li>
            <li class="ingrediently-container__item">
              I've literally spent hundreds of hours mastering the ingredients shared in this book. Believe me, my husband had to listen to me rant and rave about Ethiopian Berbere.
            </li>
            <li class="ingrediently-container__item">
              If you don't fall in love with the book, I offer a 100&#37; money back guarantee. So what are you waiting for, order today!
            </li>
          </ul>
        </div><!-- ingrediently-container-info -->
          <div class="temp-img">
          <img class="ingrediently-container__image" src="<?php echo get_template_directory_uri() . '/img/ingrediently.jpg'; ?>" alt="Ingrediently Book">
          </div>
      </div><!-- ingrediently-container -->
    </section><!-- .ingrediently -->

    <section class="random-recipes margin-container">
      <h4 class="margin-y-md random-recipes__heading"><span class="accent-secondary-1-2">Fresh </span>dinner ideas!</h4>
      <div class="random-recipes__container">

        <?php 
          $argsrandomRecipes = array(
            'post_type'         => 'recipes',
            'posts_per_page'    => 8
          );
          $randomRecipes = new WP_Query( $argsrandomRecipes );
          while( $randomRecipes->have_posts() ) :
            $randomRecipes->the_post();
        ?>
          
        <div class="random-recipes__post"> 

          <a href="<?php the_permalink(); ?>"><div class="random-recipes__img"><?php the_post_thumbnail(); ?></div></a>

          <div class="random-recipes__bottom">
            <a class="random-recipes__link" href="<?php the_permalink(); ?>">
            <h3 class="random-recipes__title margin-y-md">
              <?php the_title(); ?>
            </h3><!-- .random-recipes__title -->
          </div><!-- .random-recipes__bottom -->
          </a>
          
        </div><!-- .newest-recipes__post -->
        <?php endwhile; wp_reset_postdata(); ?>

      </div><!-- .newest-recipes__container -->
    </section><!-- .newest-recipes -->

  </main><!-- #primary -->
  <?php 
  if( is_active_sidebar( 'sidebar' ) ):
    get_sidebar(); 
  endif;
  ?>
  </div><!-- .content-wrap -->
<?php
get_footer();