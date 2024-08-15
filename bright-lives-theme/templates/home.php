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
            <div class="relative h-screen bg-fixed bg-center bg-cover bg-hero pt-80">
                <div class="container mx-auto flex">
                    <h1 class="text-white text-7xl leading-normal font-display">Je steun vandaag,<br />hoop voor morgen.</h1>
                </div>
            </div>
            <div><!--  class="bg-radial-gradient" -->
                <article class="container mx-auto flex grid grid-cols-1 md:grid-cols-2">
                    <div class="flex items-center">
                        <div class="font-sans-serif max-w-lg">
                            <h2 class="text-4xl leading-normal font-serif mb-6">Een Toekomst voor Kinderen in Ghana</h2>
                            <p class="mb-4">Bij Bright Lives zetten we ons in voor de verbetering van de levensomstandigheden van kinderen en jongvolwassenen in Ghana. Sinds 2010 ondersteunen we kwetsbare kinderen door middel van onderwijs en zorg, in samenwerking met <a class="strong text-primary-500 underline-offset-4 underline" href="#" title="link van de pagina over pastoor Dan Saidu">pastoor Dan Seidu</a>.</p>
                            <p class="mb-6">Wij geloven in een wereld waarin alle kinderen, ongeacht hun geslacht, zich kunnen ontwikkelen tot zelfstandige en sterke individuen.</p>
                            <button>Meer over onze missie</button>
                        </div>
                    </div>
                    <div class="pt-24">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content/Dan-en-Oscar-2018.jpeg" alt="Dan and Oscar">
                    </div>
                </article>
            </div>
			<?php the_content(); ?>
		</main>
		<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
