<?php
/**
 * Template Name: Donate
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
    <div class="relative bg-fixed bg-center bg-cover pt-80 min-h-[430px]"><!-- h-60vh max-h-[500px] -->
        <div class="z-1 absolute inset-0 bg-radial-gradient-opacity"></div>
        <div class="container mx-auto flex">
            <h1 class="z-10 text-white text-7xl leading-normal font-display"><?php the_title() ?></h1>
        </div>
    </div>

	<main class="bg-slate-200 flex pb-20">
		<?php the_content(); ?>
	</main>

	<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
	<?php wp_footer(); ?>
	</body>
</html>
