<?php
/**
 * The template for eventbrite events from EventBrite API plugin
 *
 * @package sgp
 */

get_header(); ?>

<div class="container">
  <main id="main" class="col-sm-8" role="main">
    <div class="content-block content-block--large">
      <header class="page-header">
        <h1 class="page-title">Events</h1>
      </header>
      <?php
        // Set up and call our Eventbrite query.
        $events = new Eventbrite_Query( apply_filters( 'eventbrite_query_args', array(
        ) ) );

        if ( $events->have_posts() ) :
          while ( $events->have_posts() ) : $events->the_post(); ?>

          <div class="post-preview post-preview--event">

            <div class="post-preview__image">
              <?php if ( get_the_post_thumbnail($post_id) != '' ) {
                the_post_thumbnail(array(250,180));
              } else {
                echo '<img src="' . catch_that_image() . '" alt="" />';
              }
              ?>
            </div>

            <div class="post-preview__body">

              <h3 class="post-preview__heading">
                <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
                  <?php the_title(); ?>
                </a>
              </h3>

              <div class="post-preview__text"><?php eventbrite_event_meta(); ?></div>

            </div>

            <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </div>

          <?php endwhile;
          // Previous/next post navigation.
          eventbrite_paging_nav( $events );

        else : ?>
          <p><em>There are no events coming up soon, please check back again later.</em></p>
        <?php endif;

        // Return $post to its rightful owner.
        wp_reset_postdata();
      ?>

    </div>
  </main>

  <div class="col-sm-4">
    <?php dynamic_sidebar('events-sidebar'); ?>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>


