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
      <ul class="thumbnail-list">
      <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>" class="thumbnail-list__item">
            <?php if(has_post_thumbnail()): ?>
              <span class="thumbnail-list__image">
                <?php the_post_thumbnail(array(60, 60)); ?>
              </span>
            <?php endif; ?>
            <span class="thumbnail-list__title">
                <?php the_title(); ?>
            </span>
          </a>
        </li>
      <?php endwhile;?>
      </ul>
      <?php
      endif;
      wp_reset_postdata();
    ?>
</div>
</article>
