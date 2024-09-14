<?php
/**
 * Template Name: Home
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
                'title' => 'Je steun vandaag,<br />hoop voor morgen.',
                'full-height' => true,
                'tailwind-background-image' => 'bg-hero-home'
            );
            get_template_part( 'template-parts/hero/hero', null, $args);
            ?>

            <div class="bg-radial-gradient">
                <article class="container mx-auto grid grid-cols-1 md:grid-cols-2">
                    <div class="flex items-center">
                        <div class="font-sans-serif max-w-lg">
                            <h2 class="text-4xl leading-normal font-serif mb-6">Een Toekomst voor Kinderen in Ghana</h2>
                            <p class="mb-4">Bij Bright Lives zetten we ons in voor de verbetering van de levensomstandigheden van kinderen en jongvolwassenen in Ghana. Sinds 2010 ondersteunen we kwetsbare kinderen door middel van onderwijs en zorg, in samenwerking met <a class="text-primary-500 underline underline-offset-4" href="#" title="link van de pagina over pastoor Dan Saidu">pastoor Dan Seidu</a>.</p>
                            <p class="mb-6">Wij geloven in een wereld waarin alle kinderen, ongeacht hun geslacht, zich kunnen ontwikkelen tot zelfstandige en sterke individuen.</p>
	                        <?php
                            $args = array(
                                'text' => 'Meer over onze missie',
                                'url' => '#',
                                'border' => true,
                            );
                            get_template_part( 'template-parts/link-button/link-button', null, $args);
                            ?>
                        </div>
                    </div>
                    <div class="pt-24">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content/Dan-en-Oscar-2018.jpeg" alt="Dan and Oscar">
                    </div>
                </article>
            </div>

            <section class="container mx-auto pt-24">
                <div class="flex mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <h2 class="text-4xl leading-normal font-serif mb-6">Wat we doen</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4">
                    <article class="p-10 bg-primary-500">
                        <div class="h-28">
                            <h3 class="text-2xl font-heading text-white mb-4">Bright Lives</h3>
                        </div>
                        <div class="h-48">
                            <p class="text-white">
                                Bright Lives helpt kwetsbare meisjes met onderwijs, gezondheidszorg,
                                een veilige leefomgeving en aandacht. Het vindt plaats in Wa, de hoofdstad van de
                                Upper West Region in Ghana.
                            </p>
                        </div>
	                    <?php
	                    $args = array(
		                    'text' => 'Ontdek hoe we dit doen',
		                    'url' => '#',
		                    'border' => false,
		                    'invert' => false,
	                    );
	                    get_template_part( 'template-parts/link-button/link-button', null, $args);
	                    ?>
                    </article>
                    <article class="p-10 bg-primary-600">
                        <div class="h-28">
                            <h3 class="text-2xl font-heading text-white mb-4">Wa Yiri Residence</h3>
                        </div>
                        <div class="h-48">
                            <p class="text-white">
                                De ommuurde locatie in Wa biedt een veilige thuisbasis voor de meisjes tijdens het schooljaar,
                                met comfortabele slaapkamers, klaslokalen, sanitaire voorzieningen, een keuken en diverse andere faciliteiten.
                            </p>
                        </div>
	                    <?php
	                    $args = array(
		                    'text' => 'Ontdek Wa Yiri Residence',
		                    'url' => '#',
		                    'border' => false,
		                    'invert' => false,
	                    );
	                    get_template_part( 'template-parts/link-button/link-button', null, $args);
	                    ?>
                    </article>
                    <article class="p-10 bg-primary-700">
                        <div class="h-28">
                            <h3 class="text-2xl font-heading text-white mb-4">Realiseren campus en opzetten van een basisschool</h3>
                        </div>
                        <div class="h-48">
                            <p class="text-white">Het doel is om kwalitatief goed onderwijs te bieden aan kansarme kinderen in de regio. Hiermee willen we het programma zelfvoorzienend maken en hen een betere toekomst bieden.</p>
                        </div>
	                    <?php
	                    $args = array(
		                    'text' => 'Ontdek hoe jij kunt helpen',
		                    'url' => '#',
		                    'border' => false,
		                    'invert' => false,
	                    );
	                    get_template_part( 'template-parts/link-button/link-button', null, $args);
	                    ?>
                    </article>
                    <article class="p-10 bg-primary-800">
                        <div class="h-28">
                            <h3 class="text-2xl font-heading text-white mb-4">
                                Individuele ondersteunings-<br />projecten
                            </h3>
                        </div>
                        <div class="h-48">
                            <p class="text-white">
                                Kansarme meisjes ontvangen persoonlijke begeleiding en extra ondersteuning om hun talenten te ontwikkelen.
                                Hiermee helpen we hen obstakels te overwinnen en een kansrijke toekomst op te bouwen.
                            </p>
                        </div>
	                    <?php
	                    $args = array(
		                    'text' => 'Ontdek onze begeleiding',
		                    'url' => '#',
		                    'border' => false,
		                    'invert' => false,
	                    );
	                    get_template_part( 'template-parts/link-button/link-button', null, $args);
	                    ?>
                    </article>
                </div>
            </section>

            <article class="container mx-auto py-24 grid grid-cols-1 md:grid-cols-2">
                <div class="max-w-lg">
                    <h2 class="text-4xl leading-normal font-serif mb-6">Impact in Cijfers</h2>
                    <p>
                        Deze cijfers illustreren onze toewijding aan kwalitatief onderwijs en zorg voor kwetsbare kinderen in Wa,
                        en onderstrepen de noodzaak van een veilige en ondersteunende omgeving voor hun ontwikkeling.
                    </p>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col mb-5 pb-5 gap-x-4 border-b-2 border-primary-500">
                            <div class="text-6xl font-black text-primary-500 leading-tight">
                                1023
                            </div>
                            <span class="font-medium">Kinderen in het programma</span>
                        </div>
                        <div class="flex flex-col mb-5 pb-5 border-b-2 border-primary-500">
                            <div class="text-6xl font-black text-primary-500 leading-tight">
                                20
                            </div>
                            <span class="font-medium">Uitstroom per jaar</span>
                        </div>
                        <div class="flex flex-col pb-5 gap-x-4 border-b-2 border-primary-500">
                            <div class="text-6xl font-black text-primary-500 leading-tight">
                                100
                            </div>
                            <span class="font-medium">Klaslokalen</span>
                        </div>
                        <div class="flex flex-col pb-5 border-b-2 border-primary-500">
                            <div class="text-6xl font-black text-primary-500 leading-tight">
                                4
                            </div>
                            <span class="font-medium">Slaapvertrekken</span>
                        </div>
                    </div>
                </div>
            </article>

            <section class="container mx-auto mb-20 py-18 grid grid-cols-1 gap-10 md:grid-cols-3">
                <div class="h-80vh bg-center bg-cover bg-home-tile-1"></div>
                <div class="h-80vh bg-center bg-cover bg-home-tile-2"></div>
                <div class="h-80vh bg-center bg-cover bg-home-tile-3"></div>
            </section>

            <section class="bg-primary-500">
                <div class="container mx-auto py-24 max-w-4xl">
                  <h2 class="text-white mb-6 font-bold uppercase tracking-wider font-sans-serif">Jouw Steun, Hun Kans op Succes</h2>
                  <p class="text-4xl leading-normal font-serif text-white mb-6">Met jouw steun kunnen we de levens van kansarme kinderen in Ghana blijvend verbeteren. Doneer vandaag en maak een verschil!</p>
                  <div class="flex justify-end">
	                  <?php
	                  $args = array(
		                  'text' => 'Doneer nu',
		                  'url' => '#',
		                  'border' => true,
		                  'invert' => true,
	                  );
	                  get_template_part( 'template-parts/link-button/link-button', null, $args);
	                  ?>
                  </div>
              </div>
            </section>

          <?php the_content(); ?>
		</main>

        <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
