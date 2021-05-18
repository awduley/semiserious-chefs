<?php 
/**
 * Template for desplaying a custom search bar because the default one is ugly
 */
?>

<form role="search" method="get" class="custom-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" class="custom-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'semiserious-chefs' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit" class="custom-search-submit"><i class="fas fa-search"></i></button>
</form>