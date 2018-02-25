<?php
/* Template Name: Election page
 *
 * @package sgp
 */

get_header(); ?>

<main id="main" role="main">
  <div class="container">

    <div class="col-sm-12">
      <div class="content-block content-block--large">

        <div class="page-header">
          <?php the_title('<h1 class="page-title">', '</h1>'); ?>
        </div>
        <?php if( get_field('intro') ): ?>
          <?php the_field('intro'); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="content-block content-block--large">
        <?php get_template_part( 'template-parts/elections/candidates-list' ); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-8">
      <div class="content-block content-block--large">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="col-md-4">
      <?php dynamic_sidebar('elections-sidebar'); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
