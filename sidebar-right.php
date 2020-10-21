<?php 
/**
 * Template for the right sidebar widget area
 */

if( ! is_active_sidebar( 'sidebar-right' ) ) {
  return;
}
?>

<aside id="secondary-right" class="widget-area sidebar-right">
  <?php dynamic_sidebar( 'sidebar-bottom' ); ?>
</aside><!-- #secondary-right -->