<div class="home-section">
  <h2 class="home-section__heading">Latest News</h2>

  <?php
    $category_posts = sgp_category_posts('featured', 3);
    while($category_posts->have_posts()) : $category_posts->the_post();
      include(TEMPLATEPATH . '/includes/posts/_post-preview.php');
    endwhile; ?>

  <?php
    $secondary_news_posts = sgp_category_posts('featured', 3, 3);
    while($secondary_news_posts->have_posts()) : $secondary_news_posts->the_post();
      include(TEMPLATEPATH . '/includes/posts/_post-preview-simple.php');
    endwhile; ?>

  <a href="/news" class="home-section__more-link primary-btn">
    More news
  </a>
</div>
