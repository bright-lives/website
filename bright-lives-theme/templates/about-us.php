<?php
/**
 * Template Name: About us
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
			<?php
			$args = array(
				'title' => 'Over ons',
				'full-height' => false,
				'tailwind-background-image' => 'bg-hero-about-us'
			);
			get_template_part( 'template-parts/hero/hero', null, $args);
			?>

            <section class="container mx-auto grid grid-cols-1 md:grid-cols-2">
                <div class="items-center py-12">
                    <h2 class="text-4xl leading-normal font-serif mb-6">Visie</h2>
                    <p class="font-sans-serif">
                        Bright Lives streeft naar een wereld waarin kinderen zich volledig kunnen ontwikkelen tot kansrijke
                        volwassenen, ongeacht hun achtergrond. Bright Lives zet zich in voor een wereld waarin meisjes
                        dezelfde rechten en mogelijkheden hebben als jongens. Bright Lives staat voor een wereld die de
                        rechten en de waardigheid van kinderen en jongvolwassenen respecteert.
                    </p>
                </div>
            </section>

            <section class="container mx-auto grid grid-cols-1 md:grid-cols-2">
                <div class="items-center pb-24">
                    <h2 class="text-4xl leading-normal font-serif mb-6">Missie</h2>
                    <p class="font-sans-serif">
                        Bright Lives zet projecten op om de leefsituatie van kinderen en jongvolwassenen in Ghana te verbeteren.
                        Bright Lives helpt kwetsbare kinderen, met een speciale focus op meisjes, door onderwijs, zorg en
                        onderdak te bieden. Dit doet Bright Lives al sinds 2005. De stichting werft fondsen en vrijwilligers
                        voor kleinschalige projecten die samen met lokale organisaties en mensen worden vormgegeven en uitgevoerd.
                        Wij werken kleinschalig en direct met lokale mensen.
                    </p>
                </div>
            </section>

		</main>
		<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
