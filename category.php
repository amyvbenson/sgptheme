<?php
get_header(); ?>

  <div class="container">
    <main id="main" class="col-md-6" role="main">
      <div class="content-block">
        <?php get_template_part( 'template-parts/content-category', 'category' ); ?>
      </div>
    </main>
    <div class="col-md-6">
      <div class="widget widget_categories">
        <h2>Categories</h2>
        <ul>
          <?php wp_list_categories('exclude='.sgp_category_ids(['sticky', 'featured']).'&title_li='); ?>
        </ul>
      </div>
      <?php get_template_part( 'template-parts/sidebar/news-archive-link'); ?>
    </div>
  </div>

<?php
get_footer();
