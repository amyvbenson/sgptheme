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
    <?php get_template_part('template-parts/posts/related-posts'); ?>
</div>
</article>
