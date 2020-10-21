<?php 
/**
 * Template for the bottom sidebar widget area
 */

if( ! is_active_sidebar( 'sidebar-bottom' ) ) {
  return;
}
?>

<aside id="secondary-bottom" class="widget-area sidebar-bottom">
  <?php 
    if( is_active_sidebar( 'sidebar-bottom' ) ) :
      dynamic_sidebar( 'sidebar-bottom' );
    endif;
  ?>
  <h1 class="hello">hello</h1>
</aside><!-- #secondary-bottom --> 