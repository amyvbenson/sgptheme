<?php
/* Template Name: Home 
 *
 * @package sgp
 */

get_header(); ?>

  <main id="main" role="main">

  <div class="container">
  
    <div class="col-xs-12">
      <div class="home-banner">
      </div>
    </div>

  </div>

  <div class="container">
    <div class="col-sm-6" >
      
      <?php include(TEMPLATEPATH . '/includes/homepage/_latest-news.php'); ?>
       
    </div>

    <div class="col-sm-6">
      
      <?php include(TEMPLATEPATH . '/includes/homepage/_latest-video.php'); ?>

      <a href="https://my.greenparty.org.uk/civicrm/membership/joining" class="home-cta">
        Join the Green Party
      </a>

      <a href="/about-us/donate" class="home-cta">
        Donate to Sheffield Green Party
      </a>

      <a href="http://shop.sheffieldgreenparty.org.uk/" class="home-cta">
        Visit our shop
      </a>     

    </div>
  </div>

  </main>

<?php get_footer(); ?>
