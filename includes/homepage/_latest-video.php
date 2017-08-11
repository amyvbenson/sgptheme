<div class="home-section home-section--video">

  <?php
  $category_posts = sgp_category_posts('video', 1);
  while($category_posts->have_posts()) : $category_posts->the_post();
  ?>

    <div id="video">
      <h2 class="home-section__heading">Latest Video: <?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>

  <a href="/category/video" class="home-section__more-link primary-btn">
    More videos
  </a>
</div>
