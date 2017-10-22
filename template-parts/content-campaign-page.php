<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="col-sm-12">
      <?php $banner = get_field('campaign_banner'); ?>
      <?php if ($banner): ?>
        <header class="page-banner content-block content-block--large" style="background-image:url(<?php the_field('campaign_banner');?>)">
          <div class="page-banner__inner">
            <?php the_title('<h1 class="page-banner__title">', '</h1>'); ?>
            <?php if (get_field('campaign_tagline')): ?>
              <p class="page-banner__tagline"><?php the_field('campaign_tagline'); ?></p>
            <?php endif; ?>
          </div>
        </header>
      <?php else: ?>
        <div class="content-block content-block--large">
        <header class="page-header">
          <?php the_title('<h1 class="page-title">', '</h1>'); ?>
        </header>
         </div>
      <?php endif; ?>
  </div>

  <div class="col-sm-8">
    <div class="content-block content-block--large">
      <?php if (get_field('campaign_ctas')): ?>
        <div class="campaign-ctas campaign-section">
          <?php the_field('campaign_ctas'); ?>
        </div>
      <?php endif; ?>

      <?php if (get_field('campaign_video')): ?>
        <div class="campaign-video campaign-section">
          <?php the_field('campaign_video'); ?>
        </div>
      <?php endif; ?>

      <?php if (get_field('campaign_plan')): ?>
        <div class="campaign-plan campaign-section">
          <?php the_field('campaign_plan'); ?>
        </div>
      <?php endif; ?>

      <?php if (get_field('campaign_main_content')): ?>
        <div class="campaign-main_content campaign-section">
          <?php the_field('campaign_main_content'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="col-sm-4">
    <?php $cat = get_field('campaign_posts_category'); ?>
    <?php if($cat): ?>
      <div class="widget">
        <h2 class="widget__title">Find out more</h2>
        <?php $category_posts = sgp_category_posts($cat, 5);
          while ($category_posts->have_posts()) :
              $category_posts->the_post();
              get_template_part('template-parts/posts/post-preview-simple');
          endwhile; ?>
          <a href="/category/type/<?php echo $cat; ?>" class="home-section__more-link primary-btn">More posts</a>
        <?php endif; ?>
    </div>
  </div>
</article>
