  <div class="content-block">
    <h2 class="latest-news-heading">Latest News</h2>

    <div class="latest-news-grid">
      <?php
        $sticky_post = sgp_category_posts('sticky', 1);
        $num_featured = $sticky_post->have_posts() ? 3 : 4;
        $category_posts = sgp_featured_posts($num_featured);
        $secondary_news_posts = sgp_featured_posts(4, $num_featured);

        while($sticky_post->have_posts()) : $sticky_post->the_post();
          get_template_part( 'template-parts/posts/post-preview');
        endwhile;

        while($category_posts->have_posts()) : $category_posts->the_post();
          get_template_part( 'template-parts/posts/post-preview');
        endwhile;

        while($secondary_news_posts->have_posts()) : $secondary_news_posts->the_post();
          get_template_part( 'template-parts/posts/post-preview-simple');
        endwhile;
      ?>
    </div>
  </div>
