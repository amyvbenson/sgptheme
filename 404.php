<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sgp
 */

get_header(); ?>

	<div class="container">
		<?php get_template_part( 'template-parts/pages/hero-image' ); ?>
		<main id="main" class="col-md-8" role="main">
			<div class="content-block content-block--large">
				<?php
					get_template_part( 'template-parts/content', 'none' );
				?>
			</div>
		</main>

		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php get_footer(); ?>
