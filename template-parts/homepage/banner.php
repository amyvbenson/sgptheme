<?php
  $desktop_banner = get_field('desktop_banner');
  $mobile_banner = get_field('mobile_banner');
  $banner_link = get_field('banner_link');
  $secondary_desktop_banner = get_field('secondary_desktop_banner');
  $secondary_mobile_banner = get_field('secondary_mobile_banner');
  $secondary_banner_link = get_field('secondary_banner_link');
  $has_banner = !empty($desktop_banner) && !empty($mobile_banner) && !empty($banner_link);
  $has_secondary = !empty($secondary_desktop_banner) && !empty($secondary_mobile_banner) && !empty($secondary_banner_link);

  if( $has_banner ): ?>
  <div class="home-banner-container <?php if ($has_secondary){ echo 'home-banner-container--split'; } ?> ">

    <a href="<?php echo $banner_link; ?>" class="home-banner">
      <span class="home-banner__image home-banner__desktop" style="background-image: url(<?php echo $desktop_banner['url']; ?>)"></span>
      <span class="home-banner__image home-banner__mobile" style="background-image: url(<?php echo $mobile_banner['url']; ?>)"></span>
      <span class="sr-only"><?php echo $desktop_banner['alt']; ?></span>
    </a>

    <?php if ( $has_secondary ): ?>
      <a href="<?php echo $secondary_banner_link; ?>" class="home-secondary-banner">
        <span class="home-secondary-banner__image home-banner__desktop" style="background-image: url(<?php echo $secondary_desktop_banner['url']; ?>)"></span>
        <span class="home-banner__image home-banner__mobile" style="background-image: url(<?php echo $secondary_mobile_banner['url']; ?>)"></span>
        <span class="sr-only"><?php echo $secondary_desktop_banner['alt']; ?></span>
      </a>
    <?php endif; ?>

  </div>
  <?php endif; ?>