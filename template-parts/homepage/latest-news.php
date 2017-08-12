<div class="content-block">
  <h2 class="home-section__heading">Latest News</h2>

  <?php
    $category_posts = sgp_category_posts('featured', 3);
    while($category_posts->have_posts()) : $category_posts->the_post();
      get_template_part( 'template-parts/posts/post-preview');
    endwhile; ?>

  <?php
    $secondary_news_posts = sgp_category_posts('featured', 3, 3);
    while($secondary_news_posts->have_posts()) : $secondary_news_posts->the_post();
      get_template_part( 'template-parts/posts/post-preview-simple');
    endwhile; ?>

  <a href="/news" class="home-section__more-link primary-btn">
    More news
  </a>
</div>
