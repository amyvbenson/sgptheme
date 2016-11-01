<a class="skip-link sr-only" href="#main">Skip to content</a>
<header role="banner" class="site-header">
  <div class="container container--no-children">

    <?php if ( is_front_page()) : ?>
      <h1 class="site-header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" />
      </h1>
    <?php else : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" />
      </a>
    <?php endif; ?>

  </div>

  <button type="button" class="site-header__toggle-nav" data-toggle-nav="true">
    <span class="sr-only">Menu</span>
    <svg class="icon">
      <use xlink:href="#icon-menu"></use>
    </svg>

  </button>

  <nav role="navigation" class="site-nav" data-nav="true">
    <div class="container container--no-children">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      <?php get_search_form() ?>
    </div>
  </nav>

</header>