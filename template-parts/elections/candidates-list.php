<h2>Your Green candidates</h2>

<?php if(get_field('featured_candidates')):
  $featured_candidates = sgp_order_candidates(get_field('featured_candidates'));
?>
  <div class="featured-candidates featured-candidates--<?php print count($featured_candidates); ?>">
    <?php foreach ($featured_candidates as $post) :  setup_postdata($post); ?>
      <div class="featured-candidate">
        <a href="<?php echo get_permalink($post->ID); ?>">
          <?php if( get_field('thumbnail') ): ?>
            <img class="featured-candidate__image" src="<?php the_field('thumbnail', $post->ID); ?>" alt="Vote <?php echo get_the_title($post->ID); ?> in <?php the_field('area', $post->ID); ?>" />
          <?php endif; ?>
        </a>
      </div>
    <?php
    endforeach;
    wp_reset_query();
    ?>

    <?php if(get_field('link_to_all_candidates')): ?>
      <a href="<?php the_field('link_to_all_candidates'); ?>" class="all-candidates-link">Plus many more<br>See the full list of candidates ></a>
    <?php else: ?>
      <span class="all-candidates-link">Plus many more<br> to be announced soon</span>
    <?php endif; ?>

  </div>
  <?php else: ?>

<?php if(get_field('primary_candidates')):
  $primary_candidates = sgp_order_candidates(get_field('primary_candidates'));
?>
  <div class="candidates candidates--primary candidates--<?php print count($primary_candidates); ?>">
    <?php foreach ($primary_candidates as $post) :  setup_postdata($post); ?>
      <div class="candidate candidate--primary">
        <a href="<?php echo get_permalink($post->ID); ?>">
          <?php if( get_field('thumbnail') ): ?>
            <img class="candidate__image" src="<?php the_field('thumbnail', $post->ID); ?>" alt="Vote <?php echo get_the_title($post->ID); ?> in <?php the_field('area', $post->ID); ?>" />
          <?php endif; ?>
        </a>
      </div>
    <?php
    endforeach;
    wp_reset_query();
    ?>
  </div>
<?php endif; ?>

<?php if(get_field('secondary_candidates')):
  $secondary_candidates = sgp_order_candidates(get_field('secondary_candidates'));
?>
  <div class="candidates candidates--<?php print count($secondary_candidates); ?>">
    <?php foreach ($secondary_candidates as $post) :  setup_postdata($post); ?>
      <div class="candidate candidate--secondary">
      <a href="<?php echo get_permalink($post->ID); ?>" class="candidate__inner">
        <?php if( get_field('thumbnail') ): ?>
          <img class="candidate__image" src="<?php the_field('thumbnail', $post->ID); ?>" alt="" />
        <?php endif; ?>
        <span class="candidate__info">
            <span class="candidate__name"><?php echo get_the_title($post->ID); ?></span>
            <?php if( get_field('area') ): ?>
              <span class="candidate__area"> in <?php the_field('area', $post->ID); ?></span>
            <?php endif; ?>
        </span>
      </a>
    </div>
    <?php
    endforeach;
    wp_reset_query();
    ?>
  </div>
<?php endif; ?>
<?php if(get_field('link_to_all_candidates')): ?>
  <a href="<?php the_field('link_to_all_candidates'); ?>" class="primary-btn">Full list of candidates</a>
<?php endif; ?>
<?php endif; ?>