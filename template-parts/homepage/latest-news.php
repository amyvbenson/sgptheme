<div class="content-block">
  <h2 class="home-section__heading">Latest News</h2>

  <?php
    $sticky_post = sgp_category_posts('sticky', 1);
    while($sticky_post->have_posts()) : $sticky_post->the_post();
      get_template_part( 'template-parts/posts/post-preview');
    endwhile; ?>

  <?php
    $category_posts = sgp_featured_posts(3);
    while($category_posts->have_posts()) : $category_posts->the_post();
      get_template_part( 'template-parts/posts/post-preview');
    endwhile; ?>

  <?php
    $secondary_news_posts = sgp_featured_posts(3, 3);
    while($secondary_news_posts->have_posts()) : $secondary_news_posts->the_post();
      get_template_part( 'template-parts/posts/post-preview-simple');
    endwhile; ?>

  <a href="/category/type/news" class="home-section__more-link primary-btn">
    More news
  </a>
</div>
