<?php
/* Template Name: Child Pages List
 *
 * @package sgp
 */

get_header(); ?>

  <div class="container">

    <main id="main" class="col-sm-8" role="main">
      <div class="content-block content-block--large">
        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'child-pages-list' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        endwhile; // End of the loop.
        ?>
      </div>
    </main>

    <div class="col-sm-4">
      <?php get_sidebar(); ?>
    </div>

  </div>

<?php get_footer(); ?>
