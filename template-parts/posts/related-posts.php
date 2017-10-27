<?php $cat = get_post_meta($post->ID, 'category', true); ?>
    <?php if ($cat) : ?>
      <div class="related-posts">
        <h2 class="home-section__heading">Related posts</h2>
          <?php $category_posts = sgp_category_posts($cat, 5);
          while ($category_posts->have_posts()) :
              $category_posts->the_post();
              get_template_part('template-parts/posts/post-preview-simple');
          endwhile; ?>
          <a href="/category/type/<?php echo $cat;?>" class="home-section__more-link primary-btn">More posts</a>
        </div>
    <?php endif; ?>
<?php wp_reset_postdata() ?>
