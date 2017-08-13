<div class="post-preview">

  <div class="post-preview__image">
    <?php
    if ( get_the_post_thumbnail($post_id) != '' ) {
      the_post_thumbnail(array(250,180));
    } else {
      echo '<img src="' . catch_that_image() . '" alt="" />';
    }
    ?>
  </div>

  <div class="post-preview__body">

    <h3 class="post-preview__heading">
      <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
        <?php the_title(); ?>
      </a>
    </h3>

    <?php if ( !is_front_page() ) { ?>
      <p class="post-preview__date"><?php the_time(__('jS F, Y', 'default')) ?></p>
    <?php } ?>

    <div class="post-preview__text">
      <?php the_excerpt(); ?>
    </div>

  </div>

  <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</div>
