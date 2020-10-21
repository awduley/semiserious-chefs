<?php 
/**
 * Semiserious Chefs functions
 */

 /**
  * Enqueue scripts and styles
  */

  if ( ! isset( $content_width ) ) {
    $content_width = 60;
  }

  function semiserious_chefs_scripts() {

     // Main styles
     wp_enqueue_style( 'main-css', get_template_directory_URI() . '/css/main.css', [], '1.0.0', 'all' );

    // Font Awesome
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/a38893edb6.js', [], true );
  }

  
add_action( 'wp_enqueue_scripts', 'semiserious_chefs_scripts' );

/**
 * Semiserious setup
 */
function semiserious_chefs_setup() {

  /**
   * Let WordPress manage the document title
   */
  add_theme_support( 'title-tag' );

  /**
   * Switch default core markup for search form, comment form, and comments to output valid HTML5
   */
  add_theme_support( 
    'html',
    array(
      'caption',
      'comment-form',
      'comment-list',
      'gallery',
      'script',
      'style'
    )
  );

  /**
   * Add default posts and comments RSS feed links to head
   */
  add_theme_support( 'automatic-feed-links' );

  /**
   * Enable post thumbnails on posts and pages
   */
  add_theme_support( 'post-thumbnails' );


  /**
   * This theme has navigation menus in two locations
   */
  register_nav_menus(
    array(
      'menu-primary'    => esc_html__( 'Primary', 'semiserious-chefs' ),
      'menu-secondary'  => esc_html__( 'Secondary', 'semiserious-chefs' )
    )
  );

  // Register new image sizes
  add_image_size( 'square', 350, 350, true );
  add_image_size( 'portrait', 350, 750, true );
  add_image_size( 'box', 400, 400, true );
  add_image_size( 'medium', 700, 400, true );
  add_image_size( 'blog', 900, 650 );

  /**
   * Set up the WordPress core custom background feature
   */
  $SemiseriousChefsDefaults = array(
    'default-color'          => 'ffffff',
    'default-image'          => '',
    'default-repeat'         => 'repeat',
    'default-position-x'     => 'left',
    'default-position-y'     => 'top',
    'default-size'           => 'auto',
    'default-attachment'     => 'scroll',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
  );

  add_theme_support( 'custom-background', $SemiseriousChefsDefaults );

  /**
   * Add theme support for selective refresh for widgets
   */
   add_theme_support( 'customize-selective-refresh-widgets' );

  /**
   * Add theme support for core custom logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'width'       => 300,
      'height'      => 300,
      'flex-width'  => true,
      'flex-height' => true
    )
  );
}
add_action( 'after_setup_theme', 'semiserious_chefs_setup' );

/**
 * Resister widgets area
 */
function semiserious_chefs_widgets_init() {
 
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'semiserious-chefs' ),
      'id'            => 'sidebar',
      'description'   => esc_html__( 'Drop widgets here.', 'semiserious-chefs' ),
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>', 
    )
  );
}
add_action( 'widgets_init', 'semiserious_chefs_widgets_init' );