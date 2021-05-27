<aside id="secondary-sidebar" class="widget-area__sidebar-1  sidebar-widget-area__sidebar-1">
  <?php 
    if( ! is_dynamic_sidebar( 'sidebar-1' ) ) {
      return;
    } 
    dynamic_sidebar( 'sidebar-1' );
  ?>
</aside><!-- #secondary-bottom -->