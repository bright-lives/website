<?php
/**
 * Template Name: Home page
 *
 * @package WordPress
 * @subpackage Bright lives
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body <?php body_class(); ?>>
		<?php get_template_part( 'template-parts/page-header/page-header' ); ?>
		<main>
			<?php the_content(); ?>
		</main>
		<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
