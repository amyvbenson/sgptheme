<?php
/**
 * The template for displaying the footer.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sgp
 */

?>

	<footer class="site-footer" role="contentinfo">
		<div class="container">
      <div>
        <div class="col-md-8">
          <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
        </div>
        <div class="col-xs-12 col-md-4">
          <h2>Connect with us:</h2>
          <div class="site-footer__social">
            <a href="http://www.facebook.com/pages/Sheffield-Green-Party/">
              <?php echo svg_icon('facebook', 'Facebook') ?>
            </a>
            <a href="http://twitter.com/sheffieldgreens">
              <?php echo svg_icon('twitter', 'Twitter') ?>
            </a>
            <a href="http://www.youtube.com/user/sheffieldgreenparty/">
              <?php echo svg_icon('youtube', 'YouTube') ?>
            </a>
          </div>
        </div>
      </div>
      <div>
        <div class="col-xs-12">
        <?php dynamic_sidebar( 'footer-text' ); ?>
         <p class="site-footer__small-print">Copyright © <?php echo date("Y") ?> Sheffield Green Party</p>
        </div>
      </div>
    </div>
	</footer>

  <?php wp_footer(); ?>

</body>
</html>
