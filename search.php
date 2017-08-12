<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sgp
 */

get_header(); ?>

<div class="container">
  <main id="main" class="col-sm-8" role="main">
    <div class="content-block">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="">Search results</h1>
				</header>
				<?php if (get_search_query()): ?>
					<h2>
					Searching for: <?php echo get_search_query(); ?>
					</h2>
				<?php endif; ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/posts/post-preview-simple');
				endwhile;

				the_posts_pagination( array(
			    'mid_size'  => 4,
			    'prev_text' => __( 'Back', 'textdomain' ),
			    'next_text' => __( 'Next', 'textdomain' ),
			  ) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</div>

	</main>
	<div class="col-sm-4">
		<?php get_template_part( 'template-parts/sidebar/news-archive-link'); ?>
	</div>
</div>

<?php
get_footer();
