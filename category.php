<?php
get_header(); ?>

  <div class="container">
    <main id="main" class="col-sm-6" role="main">
      <div class="content-block">
        <?php get_template_part( 'template-parts/content-category', 'category' ); ?>
      </div>
    </main>
    <div class="col-sm-6">
      <?php get_template_part( 'template-parts/sidebar/news-archive-link'); ?>
      <ul class="widget widget_categories">
        <?php wp_list_categories('exclude='.sgp_category_ids(['sticky', 'featured'])); ?>
      </ul>
    </div>
  </div>

<?php
get_footer();
