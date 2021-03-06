<?php
/**
 * The template for eventbrite events from EventBrite API plugin
 *
 * @package sgp
 */

get_header(); ?>

<div class="container">
  <main id="main"  role="main">
    <div class="col-md-12">
      <div class="content-block content-block--large">
        <header class="page-header page-header__full-width ">
          <h1 class="page-title">Events</h1>
        </header>
      </div>
    </div>

    <div class="col-md-6">
      <div class="content-block">
        <h2 class="latest-news-heading">Bookable events</h2>
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
            <p><em>There are no bookable events coming up soon, please check back again later.</em></p>
          <?php endif;

          // Return $post to its rightful owner.
          wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="content-block">
      <h2 class="latest-news-heading">Other events</h2>
      <?php while ( have_posts() ) : the_post(); ?>      
        <?php the_content(); ?>
      <?php endwhile; ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
