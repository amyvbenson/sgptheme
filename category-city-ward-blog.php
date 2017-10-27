<?php
get_header(); ?>

  <div class="container">
    <main id="main" role="main">

      <div class="col-sm-12">
        <header class="page-banner page-banner--city content-block content-block--large">
          <div class="page-banner__inner">
            <h1 class="page-banner__title">City Ward Blog</h1>
            <p class="page-banner__tagline">Regular updates from your Green Party team in City Ward</p>
          </div>
        </header>
      </div>

      <div class="col-sm-8">

        <div class="content-block">
          <?php get_template_part( 'template-parts/content-category', 'category' ); ?>
        </div>

      </div>

      <div class="col-sm-4">
        <div class="content-block">
          <h2>About City Ward</h2>
          <p>City Ward includes the city centre, Kelham Island, Shoreham Street and the University area. It has two Green Party Councillors, Douglas Johnson and Rob Murphy</p>
          <a href="#" class="primary-btn">More about City Ward</a>
        </div>
      </div>
    </main>

  </div>

<?php
get_footer();
