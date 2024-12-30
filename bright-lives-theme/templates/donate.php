<?php
ob_start();
/**
 * Template Name: Donate
 *
 * @package WordPress
 * @subpackage Bright lives
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
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
		<section class="container mx-auto grid grid-cols-1 md:grid-cols-2 m-16 gap-y-20 bg-slate-200">
            <div class="flex justify-center">
			    <?php get_template_part('template-parts/mollie-donate-form/mollie-donate-form'); ?>
            </div>
		</section>
	</main>

	<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
	<?php wp_footer(); ?>
	</body>
</html>
<?php ob_end_flush(); ?>
