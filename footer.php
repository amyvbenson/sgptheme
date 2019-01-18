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
        <div class="col-xs-12 col-md-4">
          <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
        </div>
        <div class="col-xs-12 col-md-4">

          <!-- Begin Mailchimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style> -->
<div id="mc_embed_signup">
<form action="https://sheffieldgreenparty.us3.list-manage.com/subscribe/post?u=2f0e13e14e68429fb33a1876b&amp;id=a36f489b56" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  <label for="mce-EMAIL">Subscribe to weekly news updates:</label>
  <div class="mc-input-wrapper">
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2f0e13e14e68429fb33a1876b_a36f489b56" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
</div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
  </div>
  
  <div class="col-xs-12 col-md-4">

          <h2>Connect with us:</h2>
          <div class="site-footer__social">
            <a href="https://www.facebook.com/SheffieldGreenParty/">
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
      <div class="container">
        <div class="col-xs-12 site-footer__small-print">
        <?php dynamic_sidebar( 'footer-text' ); ?>
         <p>Copyright © <?php echo date("Y") ?> Sheffield Green Party</p>
        </div>
    </div>
	</footer>

  <?php wp_footer(); ?>

</body>
</html>
