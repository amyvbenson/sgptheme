<div class="post-info content-block">

  <div class="post-info__author">
    <h2>Written by</h2>
    <div class="post-info__author-inner">
      <?php if (get_field('author-photo')): ?>
        <img src="<?php echo the_field('author-photo'); ?>" alt="" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/images/default-tb.jpg'; ?>" alt="" />
      <?php endif; ?>
      <p>
        <?php if (get_field('author-link')): ?>
          <a class="post-info__author-name" href="<?php the_field('author-link'); ?>">
            <?php get_field('author-name') ? the_field('author-name') : print('Sheffield Green Party'); ?>
          </a>
        <?php else: ?>
          <span class="post-info__author-name">
            <?php get_field('author-name') ? the_field('author-name') : print('Sheffield Green Party'); ?>
          </span>
        <?php endif; ?>
        <?php if (get_field('author-title')): ?>
          <span class="post-info__author-title">
            <?php the_field('author-title'); ?>
          </span>
        <?php endif; ?>
      </p>
    </div>
  </div>

  <div class="post-info__categories">
    <h2>Posted in</h2>
    <?php sgp_exclude_post_categories(['sticky', 'featured', 'city-ward-blog']); ?>
  </div>
</div>
