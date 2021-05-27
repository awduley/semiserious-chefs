<aside id="secondary-sidebar-2" class="widget-area__sidebar-2  sidebar-widget-area__sidebar-2">
  <?php 
    if( ! is_dynamic_sidebar( 'sidebar-2' ) ) {
      return;
    } 
    dynamic_sidebar( 'sidebar-2' );
  ?>
</aside><!-- #secondary-bottom -->