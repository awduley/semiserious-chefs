<?php 
/**
 * Template for displaying the footer
 * 
 * It containes the closing tag for the #page as well as the </body> and </html> tags
 */
?>

  <div id="colophon" class="site-footer">
    
    <div class="social-icons">
      <a href="<?php esc_url( 'https://www.facebook.com/semiseriouschefs', 'semiserious-chefs' ); ?>" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>

      <a href="<?php esc_url( 'https://www.youtube.com/channel/UCNqzlvDhpB9QVGBXSFHqe3g', 'semiserious-chefs' ); ?>" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>

      <a href="<?php esc_url( 'https://www.instagram.com/semiseriouschefs', 'semiserious-chefs' ); ?>" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a>
    </div><!-- .social-icons -->

    <div class="credits">
      <p><?php echo esc_html__( 'Theme developed by', 'semiserious-chefs' ); ?> <span class="cfs"><a href="<?php echo esc_url( 'https://crookedfallstudios.com', 'semiserious-chefs' ); ?>" target="_blank"><?php echo esc_html__( 'Crooked Fall Studios', 'semiserious-chefs' ); ?></a></span> <?php _e( '| &copy; 2014 - ', 'semiserious-chefs' ); ?><span class="year"><?php echo date( 'Y' ); ?></span> <?php _e( 'All rights reserved', 'semiserious-chefs' ); ?></p>
    </div>

  </div><!-- #colophon -->
</div><!-- #page -->

  <?php wp_footer(); ?>
  </body>
  </html>