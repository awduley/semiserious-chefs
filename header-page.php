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

  <header id="page-header-masthead" class="site-header header-main page-header-page">

  <div class="hamburger-btn">
      <div class="line-1"></div>
      <div class="line-2"></div>
      <div class="line-3"></div>
    </div>
    <nav class="nav-main__mobile">
      <?php wp_nav_menu(
        array(
          'theme_location'  => 'menu-primary',
          'menu_id'         => 'primary-menu',
          'menu_class'      => 'nav-main__mobile--items'
        )
      ); ?>
    </nav>

    <nav id="page-nav-main" class="nav-main page-nav-main">
      <?php wp_nav_menu(
        array(
          'theme_location'  => 'menu-primary',
          'menu_id'         => 'primary-menu',
          'menu_class'      => 'nav-main__items'
        )
      ); ?>
    </nav>
  </header><!-- #masthead -->