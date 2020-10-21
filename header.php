<?php 
/**
 * The header for our awesome theme
 * 
 * This is the template that displays everything in the <head> section of the website
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="container">

  <header id="masthead" class="site-header header-main">
    <div class="header-main__top-bar">
      <div class="logo-container">
        <!-- <img src="" alt="Semiserious Chefs logo" class="logo-img"> -->
        <h1 class="logo"><span class="semiserious">Semiserious</span><img class="logo-knife" src="<?php echo get_template_directory_uri() . '/img/knife-2.png'; ?>" alt="Knife"> <span class="chefs">Chefs</span></h1>
      </div>
    </div><!-- .header-main_top-bar -->
    <nav class="nav-main">
    <?php wp_nav_menu(
      array(
        'theme_location'  => 'menu-primary',
        'menu_id'         => 'primary-menu',
        'menu_class'      => 'nav-main__items'
      )
    ); ?>
      <!-- <ul class="nav-main__items">
        <li class="nav-main__item">
          <a href="#">Home</a>
        </li>
        <li class="nav-main__item">
          <a href="#">Our Story</a>
        </li>
        <li class="nav-main__item">
          <a href="#">Blog</a>
        </li>
        <li class="nav-main__item">
          <a href="#">Ingrediently</a>
        </li>
        <li class="nav-main__item">
          <a href="#">Contact</a>
        </li>
      </ul>.nav-main__items -->
    </nav><!-- .nav-main -->
    
  </header><!-- #masthead -->