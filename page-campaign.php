<?php
/* Template Name: Campaign Page
 *
 * @package sgp
 */

get_header(); ?>

  <div class="container">
    <main id="main" role="main">
      <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'campaign-page' );
      endwhile; // End of the loop.
      ?>
    </main>

  </div>

<?php get_footer(); ?>
