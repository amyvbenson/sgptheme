<?php
/* Template Name: Events page
 *
 * @package sgp
 */

get_header(); ?>

	<div class="container">
		
		<main id="main" class="col-md-12" role="main">
      <div class="col-md-12">
        <div class="content-block content-block--large">
          <header class="page-header page-header__full-width ">
            <h1 class="page-title">Events</h1>
          </header>
        </div>
      </div>

      <div class="col-md-6">
        <div class="content-block">
          <h2 class="latest-news-heading">Coming up</h2>
          <?php if( get_field('current_events') ): ?>
            <?php the_field('current_events'); ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-6">
        <div class="content-block">
          <h2 class="latest-news-heading">Regular meetings</h2>
          <?php if( get_field('regular_events') ): ?>
            <?php the_field('regular_events'); ?></p>
          <?php endif; ?>
        </div>

        <div class="content-block">
          <h2 class="latest-news-heading">Other events you might be interested in</h2>
          <?php if( get_field('other_events') ): ?>
            <?php the_field('other_events'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </main>

	</div>

<?php get_footer(); ?>
