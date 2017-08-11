<?php
/* Template Name: Home
 *
 * @package sgp
 */

get_header(); ?>

  <main id="main" role="main">

  <!-- <div class="container">

    <div class="col-xs-12">
      <div class="home-banner">
      </div>
    </div>

  </div> -->

  <div class="container">
    <div class="col-sm-6" >

      <?php include(TEMPLATEPATH . '/includes/homepage/_latest-news.php'); ?>

    </div>

    <div class="col-sm-6">

      <div class="home-ctas">
      <a href="https://my.greenparty.org.uk/civicrm/membership/joining" class="home-ctas__cta">
        Join
      </a>

      <a href="/about-us/donate" class="home-ctas__cta">
        Donate
      </a>

      <a href="#" class="home-ctas__cta">
        Get Involved
      </a>
      </div>

      <?php include(TEMPLATEPATH . '/includes/homepage/_latest-video.php'); ?>

      <div class="home-ctas home-ctas--single">
        <a href="http://shop.sheffieldgreenparty.org.uk/" class="home-ctas__cta">
          Visit our shop
        </a>
      </div>

    </div>
  </div>

  </main>

<?php get_footer(); ?>
