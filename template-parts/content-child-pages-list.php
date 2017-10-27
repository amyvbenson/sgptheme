<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package sgp
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="page-header">
    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
  </header><!-- .entry-header -->
  <div class="page-content">
    <?php
    the_content();
    ?>
    <?php $child_pages = sgp_child_pages();?>
    <?php if ( $child_pages->have_posts() ) :?>
      <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
        <div class="post-preview">
          <div class="post-preview__image">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail(array(250,180)); ?>
            <?php else: ?>
              <?php echo '<img src="' . catch_that_image() . '" alt="" />'; ?>
            <?php endif; ?>
          </div>

          <div class="post-preview__body">
            <h3 class="post-preview__heading">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <div class="post-preview__text">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </div>
      <?php endwhile;?>
      <?php
      endif;
      wp_reset_postdata();
    ?>
</div>
</article>
