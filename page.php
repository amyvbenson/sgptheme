<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sgp
 */

get_header(); ?>

	<div class="container">
		<?php get_template_part( 'template-parts/pages/hero-image' ); ?>
		<main id="main" class="col-md-8" role="main">
			<div class="content-block content-block--large">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</main>

		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php get_footer(); ?>
