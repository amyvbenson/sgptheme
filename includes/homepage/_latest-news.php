<div class="home-section">
  <h2 class="home-section__heading">Latest News</h2>

  <?php
    $category_posts = sgp_category_posts('featured', 5);   
    while($category_posts->have_posts()) : $category_posts->the_post();
      include(TEMPLATEPATH . '/includes/posts/_post-preview.php'); 
    endwhile; ?>

  <a href="/news" class="home-section__more-link">
    More news
  </a>
</div>