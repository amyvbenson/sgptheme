<?php
/* Template Name: Home
 *
 * @package sgp
 */

get_header(); ?>

  <main id="main" role="main" class="container">
    <div class="col-md-12">
      <?php
      $desktop_banner = get_field('desktop_banner');
      $mobile_banner = get_field('mobile_banner');
      $banner_link = get_field('banner_link');
      if( !empty($desktop_banner) && !empty($mobile_banner) && !empty($banner_link) ): ?>
        <a href="<?php echo $banner_link; ?>" class="home-banner">
          <span class="home-banner__image home-banner__desktop" style="background-image: url(<?php echo $desktop_banner['url']; ?>)"></span>
          <span class="home-banner__image home-banner__mobile" style="background-image: url(<?php echo $mobile_banner['url']; ?>)"></span>
          <span class="sr-only"><?php echo $desktop_banner['alt']; ?></span>
        </a>
      <?php endif; ?>

      <div class="homepage-content">
        <?php get_template_part( 'template-parts/homepage/latest-news'); ?>
        <?php get_template_part( 'template-parts/homepage/ctas'); ?>
    </div>
  </main>

<?php get_footer(); ?>
