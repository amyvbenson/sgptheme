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
		<?php if (in_category('letters-to-the-press')): ?>
			<a href="/category/letters-to-the-press/" class="page-header__letters-icon">Letters to the press</a>
		<?php endif; ?>

		<?php if (in_category('newsletters')): ?>
			<a href="/category/newsletters/" class="page-header__newsletter">
				<span class="page-header__newsletter-heading">The Sheffield Green</span>
				<span class="page-header__newsletter-tagline">Your local Green Party newsletter</span>
			</a>
		<?php endif; ?>

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() && !in_category('newsletters') ) : ?>
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
