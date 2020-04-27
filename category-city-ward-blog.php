<?php
get_header(); ?>

  <div class="container">
    <main id="main" role="main">

      <div class="col-md-12">
        <header class="page-banner page-banner--city content-block content-block--large">
          <div class="page-banner__inner">
            <h1 class="page-banner__title">City Ward Blog</h1>
            <p class="page-banner__tagline">Regular updates from your Green Party team in City Ward</p>
          </div>
        </header>
      </div>

      <div class="col-md-8">

        <div class="content-block">
          <?php get_template_part( 'template-parts/content-category', 'category' ); ?>
        </div>

      </div>

      <div class="col-md-4">
        <div class="content-block">
          <h2>About City Ward</h2>
          <p><?php echo category_description(); ?></p>
          <a href="https://www.facebook.com/sheffieldcentralgreens/" class="primary-btn">City Ward on Facebook</a>
        </div>
        <?php get_template_part( 'template-parts/sidebar/city-ward-blog-subscribe', 'category' ); ?>
      </div>
    </main>

  </div>

<?php
get_footer();
