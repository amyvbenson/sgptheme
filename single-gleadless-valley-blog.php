<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sgp
 */

get_header(); ?>

<div class="container">

  <?php
  while ( have_posts() ) : the_post(); ?>

    <main id="main" class="col-md-8" role="main">
      <div class="content-block content-block--large">
        <?php
        get_template_part( 'template-parts/content', get_post_format() );

            // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?>
      </div>
    </main>
    <div class="col-md-4">
      <?php get_template_part( 'template-parts/sidebar/gleadless-valley-blog' ); ?>
      <?php get_template_part( 'template-parts/sidebar/post-author' ); ?>
      <?php dynamic_sidebar('gleadless-valley-blog-sidebar'); ?>
    </div>

  <?php
    endwhile; // End of the loop.
  ?>

</div>

<?php get_footer(); ?>
