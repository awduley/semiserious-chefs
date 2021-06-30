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
     wp_enqueue_style( 'main-css-pizza', get_template_directory_URI() . '/css/main.css', [], '1.0.0', 'all' );

    // Font Awesome
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/a38893edb6.js', [], true );

    // Main scripts
    wp_enqueue_script( 'main-javascript' , get_template_directory_uri() . '/scripts/main.js', [], NULL, true );
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

  // Add theme support for woocommerce just in case we intend to use it in the future
  add_theme_support( 'woocommerce' );

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

  // Add theme support for post formats
  add_theme_support( 
    'post-formats',
    [
      'standard',
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video'
    ] 
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
  add_image_size( 'thumbnail', 150, 150, true );
  add_image_size( 'square', 350, 350, true );
  add_image_size( 'portrait', 350, 750, true );
  add_image_size( 'box', 400, 400, true );
  add_image_size( 'medium', 700, 400, true );
  add_image_size( 'blog', 1800, 650, true);

  /**
   * Add theme support for core custom logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'width'       => 150,
      'height'      => 150,
      'flex-width'  => true,
      'flex-height' => true
    )
  );

  $customHeaderArgs = [
    'width'   => 225,
    'height'  => 1920
  ];

  // Add theme support for a custom header
  add_theme_support(
    'custom-header', $customHeaderArgs
  );

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
}
add_action( 'after_setup_theme', 'semiserious_chefs_setup' );

// Support for Gutenberg features
add_theme_support( 'align-wide' );
add_theme_support( 'responsive-embeds' );

/**
 * Resister widgets area
 */
function semiserious_chefs_widgets_init() {
 
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar 1', 'semiserious-chefs' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Drop widgets here.', 'semiserious-chefs' ),
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>', 
    )
  );

  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar 2', 'semiserious-chefs' ),
      'id'            => 'sidebar-2',
      'description'   => esc_html__( 'Drop widgets here.', 'semiserious-chefs' ),
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>', 
    )
  );

  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar Bottom', 'semiserious-chefs' ),
      'id'            => 'sidebar-bottom',
      'description'   => esc_html__( 'Drop widgets here.', 'semiserious-chefs' ),
      'before_widget' => '<div class="widget-bottom">',
      'after_widget'  => '</div>', 
    )
  );
}
add_action( 'widgets_init', 'semiserious_chefs_widgets_init' );


function semiserious_chefs_custom_comment_title( $defaults ){
  $defaults['title_reply'] = __( 'Post a comment', 'semiserious-chefs' );
  return $defaults;
}
add_filter('comment_form_defaults', 'semiserious_chefs_custom_comment_title', 20);




// // Remove the website field from the comment section
function unset_url_field( $fields ) {
  if(isset( $fields [ 'url' ] ) )
  unset( $fields [ 'url' ] );
  return $fields;
}
add_filter( 'comment_form_default_fields', 'unset_url_field' );








// comment form fields re-defined:
  add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );
  function mo_comment_fields_custom_html( $fields ) {
    // first unset the existing fields:
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    // then re-define them as needed:
    $fields = [
      'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="Share your thoughts"></textarea></p>',
      'author' => '<p class="comment-form-author">' . '<label for="author">' . __( '', 'semiserious-chefs'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' placeholder="&ast; Your name" /></p>',
      'email'  => '<p class="comment-form-email"><label for="email">' . __( '', 'semiserious-chefs'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
        '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' placeholder="&ast; Your email" /></p>',
      // 'url'    => '<p class="comment-form-url"><label for="url">' . __( 'A CUSTOM WEBSITE LABEL', 'textdomain'  ) . '</label> ' .
      //   '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
    ];
    // done customizing, now return the fields:
    return $fields;
  }
  // remove default comment form so it won't appear twice
  add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
  function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }



// Code to add custom numbered pagination to the bottom of archive pages

function semiserious_chefs_number_pagination() {

  global $wp_query;
  $bigNumber = 9999999;
    echo paginate_links(
      [
        'base'        => str_replace( $bigNumber, '%#%', esc_url( get_pagenum_link( $bigNumber ) ) ),
        'format'      => '?paged=%#%',
        'current'     => max( 1, get_query_var('paged') ),
        'total'       => $wp_query->max_num_pages,
        'prev_text'   => __( '&larr; Previous', 'semiserious-chefs' ),
        'next_text'   => __(  'Next &rarr;', 'semiserious-chefs' )
      ]
    );
}