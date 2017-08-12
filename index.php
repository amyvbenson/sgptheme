<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sgp
 */

get_header(); ?>

<div class="container">
  <main id="main" class="col-sm-6" role="main">
    <div class="content-block">
      <?php get_template_part( 'template-parts/content-category', 'category' ); ?>
    </div>
  </main>
  <div class="col-sm-6">
  	<?php get_template_part( 'template-parts/sidebar/news-archive-link'); ?>
    <ul class="widget-holder">
      <?php dynamic_sidebar( 'category-sidebar' ); ?>
    </div>
  </div>
</div>

<?php
get_footer();
