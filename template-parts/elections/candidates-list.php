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
    <?php endif; ?>

  </div>
<?php endif; ?>