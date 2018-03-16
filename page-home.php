<?php
/* Template Name: Home
 *
 * @package sgp
 */

get_header(); ?>

  <main id="main" role="main" class="container">
    <div class="col-md-12">
      <?php get_template_part( 'template-parts/homepage/banner'); ?>
      <div class="homepage-content">
        <?php get_template_part( 'template-parts/homepage/latest-news'); ?>
        <?php get_template_part( 'template-parts/homepage/ctas'); ?>
    </div>
  </main>

<?php get_footer(); ?>
