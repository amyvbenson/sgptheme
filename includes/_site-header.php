<a class="skip-link sr-only" href="#main">Skip to content</a>
<header role="banner" class="site-header">
  <div class="container">

    <?php if ( is_front_page() && is_home() ) : ?>
      <h1 class="site-header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" />
      </h1>
    <?php else : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" />
      </a>
    <?php endif; ?>

  </div>

  <nav role="navigation" class="site-nav">
    <div class="container">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      <?php get_search_form() ?>
    </div>
  </nav>

</header>