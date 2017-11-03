<?php
/* Template Name: Area Page
 *
 * @package sgp
 */

get_header(); ?>

  <div class="container">

    <main id="main" class="col-sm-8" role="main">
      <div class="content-block content-block--large">
        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        endwhile; // End of the loop.
        ?>
      </div>
    </main>

    <div class="col-sm-4">
      <?php global $post;
      if ($post->post_name === 'city-ward'): ?>
        <?php get_template_part( 'template-parts/sidebar/city-ward-blog' ); ?>
        <?php dynamic_sidebar('city-ward-blog-sidebar'); ?>
      <?php else: ?>
        <?php get_sidebar(); ?>
      <?php endif; ?>
    </div>

  </div>

<?php get_footer(); ?>
