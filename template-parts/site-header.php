<a class="skip-link sr-only" href="#main">Skip to content</a>
<header role="banner" class="site-header">
  <div class="container container--no-children site-header__top">

    <?php if ( is_front_page()) : ?>
      <h1 class="site-header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" />
      </h1>
    <?php else : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" />
      </a>
    <?php endif; ?>

    <div class="site-header__social">
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

  <button type="button" class="site-header__toggle-nav" data-toggle-nav="true">
    <?php echo svg_icon('menu', 'Menu') ?>
  </button>

  <nav role="navigation" class="site-nav" data-nav="true">
    <div class="container container--no-children">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      <?php get_search_form() ?>
    </div>
  </nav>

</header>
