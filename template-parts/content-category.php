<?php
/**
 * Template part for displaying category content in index.php and category.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sgp
 */

?>

<header class="page-header">
  <h1 class="page-title">
    <?php if (is_category()) : ?>
      <?php single_cat_title(); ?>
    <?php else: ?>
      Category
    <?php endif; ?>
  </h1>
</header>

<?php
if ( have_posts() ) :

  /* Start the Loop */
  while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/posts/post-preview');
  endwhile;

  the_posts_pagination( array(
    'mid_size'  => 4,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Next', 'textdomain' ),
  ) );

else :

  get_template_part( 'template-parts/content', 'none' );

endif; ?>
