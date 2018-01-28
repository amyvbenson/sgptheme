<?php if (get_field('hero-image')): ?>
  <div class="col-md-12">
    <div class="page-banner page-banner--no-content content-block content-block--large" style="background-image: url(<?php echo the_field('hero-image'); ?>);"></div>
  </div>
<?php endif; ?>
