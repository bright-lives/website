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
		<main>
            <?php
            $args = array(
                'title' => 'Doneren',
                'full-height' => false,
                'tailwind-background-image' => 'bg-hero-donate'
            );
            get_template_part( 'template-parts/hero/hero', null, $args);
            ?>

            <div class="container mx-auto py-20 items-center grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <p class="sans-serif">
                        Met jouw bijdrage kunnen wij kinderen in Ghana helpen. Bright Lives zet projecten op om de leefsituatie
                        van kinderen en jongvolwassenen in Ghana te verbeteren. Bright Lives helpt kwetsbare kinderen, met een
                        speciale focus op meisjes, door onderwijs, zorg en onderdak te bieden.
                    </p>
                </div>
                <div>

                </div>
            </div>

            <div class="container mx-auto py-20 items-center grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl leading-normal font-serif mb-12">
                        Ja ik help mee
                    </h2>

                    <form class="grid grid-cols-1">
                        <div class="mb-4">
                            <p class="font-sans-serif font-bold">Hoe vaak wil je doneren?</p>
                        </div>
                        <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex">
                                <?php
                                    $args = array('text' => 'Eenmalig', 'name' => 'donation_frequency', 'id' => 'once', 'siblingId' => 1);
                                    get_template_part( 'template-parts/radio-button/radio-button', null, $args);
                                ?>
                            </div>
                            <div class="flex">
	                            <?php
                                    $args = array('text' => 'Maandelijks', 'name' => 'donation_frequency', 'id' => 'monthly', 'siblingId' => 2, 'checked' => true);
                                    get_template_part( 'template-parts/radio-button/radio-button', null, $args);
	                            ?>
                            </div>
                        </div>

                        <div class="my-4">
                            <p class="font-sans-serif font-bold">Welk bedrag wil je doneren?</p>
                        </div>
                        <div class="mb-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="flex">
                                <?php
			                        $args = array('text' => '€ 15', 'name' => 'donation_amount', 'id' => '15', 'siblingId' => 5, 'checked' => true);
			                        get_template_part( 'template-parts/radio-button/radio-button', null, $args);
                                ?>
                            </div>
                            <div class="flex">
                                <?php
                                    $args = array('text' => '€ 10', 'name' => 'donation_amount', 'id' => '10', 'siblingId' => 4);
                                    get_template_part( 'template-parts/radio-button/radio-button', null, $args);
                                ?>
                            </div>
                            <div class="flex">
                                <?php
			                        $args = array('text' => '€ 5', 'name' => 'donation_amount', 'id' => '5', 'siblingId' => 3);
			                        get_template_part( 'template-parts/radio-button/radio-button', null, $args);
                                ?>
                            </div>
                        </div>
                        <div class="mb-4 grid grid-cols-1 gap-4">
                            <div class="flex">
                              <?php
                              $args = array(
                                'labelText' => 'Zelf een bedrag invullen',
                                'type' => 'number',
                                'placeholder' => 'Zelf een bedrag invullen',
                                'id' => 'custom_amount',
                              );
                                get_template_part( 'template-parts/input/input', null, $args);
                              ?>
                            </div>
                        </div>

                        <div class="mb-4 grid grid-cols-1 gap-4">
                            <?php
                            $args = array(
                                'text' => 'Doneer',
                                'border' => true,
                            );
                            get_template_part( 'template-parts/button/button', null, $args);
                            ?>
                        </div>
                    </form>

                </div>
                <div>
                </div>
            </div>
		</main>
		<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
		<?php wp_footer(); ?>
</body>
</html>
