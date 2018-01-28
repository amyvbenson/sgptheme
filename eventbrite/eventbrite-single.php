<?php
/**
 * The template for eventbrite events from EventBrite API plugin
 *
 * @package sgp
 */

get_header(); ?>

<div class="container">
  <main id="main" class="col-md-8" role="main">
    <div class="content-block content-block--large">
      <?php
        // Get our event based on the ID passed by query variable.
        $event = new Eventbrite_Query( array( 'p' => get_query_var( 'eventbrite_id' ) ) );

        if ( $event->have_posts() ) :
          while ( $event->have_posts() ) : $event->the_post(); ?>

            <article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
              </header>

              <div class="page-content">
                <div class="page-meta">
                  <p><?php eventbrite_event_meta(); ?></p>
                </div>
                <?php the_content(); ?>
                <?php eventbrite_ticket_form_widget(); ?>
              </div>

            </article>

          <?php endwhile;

        else :
          // If no content, include the "No posts found" template.
          get_template_part( 'content', 'none' );

        endif;

        // Return $post to its rightful owner.
        wp_reset_postdata();
      ?>
    </div>
  </main>

  <div class="col-md-4">
    <?php get_template_part( 'template-parts/sidebar/events'); ?>
  </div>

</div>

<?php get_footer(); ?>
