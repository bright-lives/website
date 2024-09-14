<?php
/**
 * Template Name: Jobs
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
		'title' => 'Werken voor Bright Lives',
		'full-height' => false,
		'tailwind-background-image' => 'bg-hero-jobs'
	);
	get_template_part( 'template-parts/hero/hero', null, $args);
	?>


	<!--            <section class="container mx-auto grid grid-cols-1 md:grid-cols-2">-->
	<!--                <div class="items-center pb-24">-->
	<!--                    <h2 class="text-4xl leading-normal font-serif mb-6">Ambassadeurs</h2>-->
	<!--                    <p class="font-sans-serif pb-4">-->
	<!--                        Bright Lives zoekt ambassadeurs! We zoeken mensen die zich belangeloos willen inzetten om het gezicht-->
	<!--                        van de stichting te zijn en het gevoel van urgentie en onze ambities over te brengen.-->
	<!--                    </p>-->
	<!--                    <p class="font-sans-serif pb-4">-->
	<!--                        Ons doel is om de kwetsbare meisjes van nu te begeleiden naar onafhankelijke vrouwen van de toekomst.-->
	<!--                        Een ambassadeur is iemand met een maatschappelijk profiel of een ervaringsdeskundige die een-->
	<!--                        persoonlijke band met onze missie en activiteiten kan overbrengen.-->
	<!--                    </p>-->
	<!--                    <p class="font-sans-serif">-->
	<!--                        Ben jij de ambassadeur die wij zoeken? Meld je dan meteen hier aan.-->
	<!--                    </p>-->
	<!--                </div>-->
	<!--            </section>-->

	<section class="container mx-auto">
		<div class="items-center py-24 max-w-2xl">
			<p class="font-sans-serif text-xl font-bold text-primary-500 pb-6">
				Bright Lives is een non-profitorganisatie die zich inzet voor het verbeteren van de leefsituatie
				van kwetsbare meisjes in Ghana. Wij geloven in de kracht van verhalen om bewustzijn te creëren
				en verandering te stimuleren.
			</p>
			<p class="font-sans-serif text-xl font-bold text-primary-500">
				Daarom zijn wij op zoek naar gepassioneerde mensen die onze missie delen en zich willen inzetten
				voor een betere wereld. Wij bieden verschillende vacatures aan voor vrijwilligers
				die graag een verschil willen maken.
			</p>
		</div>

		<div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-4 pb-10">

			<div class="col-span-2">
				<h3 class="text-2xl leading-normal font-serif mb-6">Ambassadeurs</h3>
			</div>
			<div class="col-span-3 max-w-2xl">
				<p class="font-sans-serif pb-4">
					Bright Lives zoekt ambassadeurs! We zoeken mensen die zich belangeloos willen inzetten om het gezicht
					van de stichting te zijn en het gevoel van urgentie en onze ambities over te brengen.
				</p>
				<p class="font-sans-serif pb-4">
					Ons doel is om de kwetsbare meisjes van nu te begeleiden naar onafhankelijke vrouwen van de toekomst.
					Een ambassadeur is iemand met een maatschappelijk profiel of een ervaringsdeskundige die een
					persoonlijke band met onze missie en activiteiten kan overbrengen.
				</p>
				<p class="font-sans-serif">
					Ben jij de ambassadeur die wij zoeken? Meld je dan meteen hier aan.
				</p>
			</div>

			<div class="col-span-2">
				<h3 class="text-2xl leading-normal font-serif mb-6">Vacature voorzitter</h3>
			</div>
			<div class="col-span-3 max-w-2xl">
				<p class="font-sans-serif mb-4">
					In deze functie leid je het bestuur en ontwikkel je strategieën om onze missie te versterken.
					Je vertegenwoordigt de organisatie en werkt samen met een gemotiveerd team van vrijwilligers en professionals.
				</p>
			</div>

			<div class="col-span-2">
				<h3 class="text-2xl leading-normal font-serif mb-6">Vacature fondsenwerver</h3>
			</div>
			<div class="col-span-3 max-w-2xl">
				<p class="font-sans-serif mb-4">
					Kan jij makkelijk contact leggen en vind je het leuk om je in te spannen om geld in te zamelen?
				</p>
				<p class="font-sans-serif mb-4">
					Binnen het CSG zoeken wij ondernemende vrijwilligers die graag iets voor ander overhebben
					en zich in kunnen en willen zetten.
				</p>
			</div>

			<div class="col-span-2">
				<h3 class="text-2xl leading-normal font-serif mb-6">Vacature redactie</h3>
			</div>
			<div class="col-span-3 max-w-2xl">
				<p class="font-sans-serif mb-4">
					Bright Lives is op zoek naar een gepassioneerde redacteur die onze verhalen kan vertellen
					en onze boodschap kan verspreiden. In deze rol ben je verantwoordelijk voor het schrijven
					en redigeren van content voor onze website, nieuwsbrieven en sociale media.
				</p>
			</div>
		</div>
	</section>

</main>
<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
