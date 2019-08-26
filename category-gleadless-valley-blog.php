<?php
get_header(); ?>

  <div class="container">
    <main id="main" role="main">

      <div class="col-md-12">
        <header class="page-banner page-banner--gleadless content-block content-block--large">
          <div class="page-banner__inner">
            <h1 class="page-banner__title">Gleadless Valley Blog</h1>
            <p class="page-banner__tagline">Regular updates from your Green Party team in Gleadless Valley Ward</p>
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
          <h2>About Gleadless Valley</h2>
          <p><?php echo category_description(); ?></p>
          <a href="https://www.facebook.com/HeeleyGreenParty" class="primary-btn">Gleadless Valley Ward on Facebook</a>
        </div>
      </div>
    </main>

  </div>

<?php
get_footer();
