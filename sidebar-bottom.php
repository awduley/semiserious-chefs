<aside id="secondary-sidebar-bottom" class="widget-area__sidebar-bottom  sidebar-widget-area__sidebar-bottom">
  <?php 
    if( ! is_dynamic_sidebar( 'sidebar-bottom' ) ) {
      return;
    } 
    dynamic_sidebar( 'sidebar-bottom' );
  ?>
</aside><!-- #secondary-sidebar-bottom -->