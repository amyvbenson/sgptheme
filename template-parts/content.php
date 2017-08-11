<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sgp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="page-meta">
				<p class="post__date">
	        <?php the_time(__('jS', 'default')) ?>  <?php the_time(__('F', 'default')) ?> <?php the_time(__('Y', 'default')) ?>
				</p>
			</div>
		<?php
		endif; ?>
	</header>

	<div class="page-content">
		<?php
			the_content( );
		?>
	</div>

</article>
