<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sgp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
  <?php echo sgp_pages_nav(); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
