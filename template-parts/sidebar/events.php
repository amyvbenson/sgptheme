<div class="content-block sidebar-block">
  <h2>More events</h2>
  <ul class="sidebar-block__list">

  <?php
    $events = new Eventbrite_Query( apply_filters( 'eventbrite_query_args', array(
       'limit' => 5,            // integer
      ) ) );

    if ( $events->have_posts() ) :
      while ( $events->have_posts() ) : $events->the_post(); ?>

      <li>
        <a href="<?php the_permalink() ?>">
          <?php the_title(); ?> -
          <?php the_date(); ?>
        </a>
      </li>

      <?php endwhile;
    endif;

    wp_reset_postdata();
  ?>
  </ul>

  <p class="sidebar-block__view-all">
    <a href="/events"><strong>View all events</strong></a>
  </p>
</div>
