<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Bwater
 * @since Bwater 1.0
 */
?>

</div><!-- #main -->

<footer id="colophon" role="contentinfo">
   <div id="colophon-content-wrapper">
      <div id="site-generator">
         <?php do_action( 'bwater_credits' ); ?>
         <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bwater' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'bwater' ); ?>"><?php printf( __( 'Proudly powered by %s', 'bwater' ), 'WordPress' ); ?></a>.
         <?php echo __('Theme', 'bwater'); ?> <a href="https://github.com/laMarciana/bwater"><?php echo __( 'Bwater by La Marciana', 'bwater' );?></a>
      </div>
   </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
