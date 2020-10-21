<aside id="secondary-sidebar" class="widget-area sidebar-widget-area">
  <?php 
    if( ! is_dynamic_sidebar( 'sidebar' ) ) {
      return;
    } 
    dynamic_sidebar( 'sidebar' );
  ?>
</aside><!-- #secondary-bottom -->