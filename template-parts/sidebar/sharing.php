<div class="sharing content-block">
  <h2>Share</h2>
  <div class="sharing__links">
  <a href="https://facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="sharing__link">
    <?php echo svg_icon('facebook', 'Facebook') ?>

  </a>

  <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php echo the_title(); ?>&via=sheffieldgreens" target="_blank" rel="noopener" class="sharing__link">
    <?php echo svg_icon('twitter', 'Twitter') ?>

  </a>

  <a href="mailto:?subject=<?php echo the_title(); ?>&body=<?php echo esc_url( get_permalink() ); ?>" class="sharing__link">
    <?php echo svg_icon('mail', 'Email') ?>

  </a>
</div>
  <!-- <a href="https://facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="sharing__link">
    <?php echo svg_icon('facebook') ?>
    Facebook
  </a>

  <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php echo the_title(); ?>&via=sheffieldgreens" target="_blank" rel="noopener" class="sharing__link">
    <?php echo svg_icon('twitter') ?>
    Twitter
  </a>

  <a href="mailto:?subject=<?php echo the_title(); ?>&body=<?php echo esc_url( get_permalink() ); ?>" class="sharing__link">
    <?php echo svg_icon('mail') ?>
    Email
  </a> -->

</div>
