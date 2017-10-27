<div class="post-info content-block">
  <?php echo post_author($post); ?>
  <div class="post-info__categories">
    <h2>Posted in</h2>
    <?php sgp_exclude_post_categories(['sticky', 'featured', 'city-ward-blog']); ?>
  </div>
</div>
