<div class="post-preview post-preview--simple">

  <div class="post-preview__body">

    <h3 class="post-preview__heading">
      <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
        <?php the_title(); ?>
      </a>
    </h3>

    <div class="post-preview__text">
      <?php the_excerpt(); ?>
    </div>

  </div>

  <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</div>
