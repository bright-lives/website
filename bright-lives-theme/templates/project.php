<?php
/**
 * Template Name: Project
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
                'title' => 'Wat we doen',
                'full-height' => false,
                'tailwind-background-image' => 'bg-hero-projects'
            );
            get_template_part( 'template-parts/hero/hero', null, $args);
            ?>
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
                <div class="items-center py-24">
                    <h2 class="text-4xl leading-normal font-serif mb-6">Bright Lives</h2>
                    <p class="font-sans-serif text-xl font-bold text-primary-500">
                        Bright Lives helpt kwetsbare meisjes in Ghana met onderwijs, gezondheidszorg,
                        een veilige en gezonde leefomgeving en natuurlijk liefde en aandacht. Op die manier
                        kunnen deze meisjes later een financieel onafhankelijk leven opbouwen en zijn ze in
                        staat om in positieve zin hun stempel te drukken op de volgende generatie.
                    </p>
                </div>
            </div>
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3">
                <div class="p-14 bg-primary-400 text-white">
                    <h3 class="text-2xl leading-normal font-serif mb-6">
                        Onderwijs voor Kwetsbare Kinderen
                    </h3>
                    <p class="font-sans-serif mb-4">
                        Bright Lives zet zich in voor de ondersteuning van onderwijs aan kwetsbare meisjes.
                        Het initiatief biedt niet alleen toegang tot onderwijs, maar voorziet ook in schoolgeld,
                        schooluniformen, lesmateriaal en aanvullende begeleiding, zoals studieloopbaanbegeleiding.
                        Het uiteindelijke doel is om deze meisjes te helpen een onafhankelijk leven op te bouwen.
                    </p>
                </div>
                <div class="p-14 bg-primary-500 text-white">
                    <h3 class="text-2xl leading-normal font-serif mb-6">
                        Gezondheidszorg en Veiligheid
                    </h3>
                    <p class="font-sans-serif mb-4">
                        Het programma voorziet de kinderen van een basiszorgverzekering om medische zorg te garanderen.
                        Daarnaast biedt de Wa Yiri Residence een veilige leefomgeving met toezicht en voorzieningen
                        zoals slaapkamers, badkamers, en een keuken
                    </p>
                </div>
<!--                <div  class="p-14 bg-primary-600 text-white">-->
<!--                    <h3 class="text-2xl leading-normal font-serif mb-6">Basiszorgverzekering</h3>-->
<!--                    <p class="font-sans-serif mb-4">-->
<!--                        Om de medische zorg te garanderen voorziet het programma de kinderen ook van een basiszorgverzekering.-->
<!--                        Hierdoor worden zij altijd geholpen als dit nodig is, zonder zorgen voor de rekening.-->
<!--                    </p>-->
<!--                    <p class="font-sans-serif">-->
<!--                        Het is namelijk niet vanzelfsprekend dat alle zorgkosten volledig worden gedekt. Hoewel kinderen tot-->
<!--                        18 jaar  zijn verzekerd voor zorgkosten, geldt er voor sommige behandelingen een eigen-->
<!--                        bijdrage die gedeeltelijk zelf moet worden betaald.-->
<!--                    </p>-->
<!--                </div>-->
                <div class="p-14 bg-primary-400 text-white">
                    <h3 class="text-2xl leading-normal font-serif mb-6">Locatie</h3>
                    <p class="font-sans-serif mb-4">
                        Dit doen wij in Wa, de hoofdstad van het arme Upper West Region in Ghana, West-Afrika.
                    </p>
                    <p class="font-sans-serif">
                        De Upper West Region, waar Wa zich bevindt, is gelegen in het uiterste noordwesten van Ghana en grenst aan Ivoorkust en Burkina Faso.
                    </p>
                </div>
            </div>

            <div class="my-28">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-4xl leading-normal font-serif mb-6">Wa Yiri Residence</h2>
                        <p class="font-sans-serif text-xl font-bold text-primary-500 mb-4">
                            In Wa staat een ommuurde locatie op eigen grond met meerdere gebouwen, de Wa Yiri Residence.
                            Hier studeren, spelen, wassen, eten en slapen de meisjes in het Child Support programma in
                            een veilige omgeving.
                        </p>
                        <!--p class="font-sans-serif">
                            De meisjes delen met zijn allen negen slaapkamers. Er zijn twee slaapkamers gereserveerd
                            voor medewerkers en twee voor vrijwilligers. Vier kamers zijn ingericht als woonkamer voor de kinderen.
                            Er zijn badkamers en sanitaire voorzieningen. Er is een ruime keuken waar altijd druk wordt gekookt.
                            Natuurlijk kent het terrein enkele klaslokalen en een kantoor.
                            Een summerhut zorgt voor een zeer gewenst schaduwplekje uit de brandende zon.
                        </p-->
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content/PA230236.JPG" alt="Wa Yiri Residence">
                    </div>
                </div>
            </div>

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-4 pb-10">
                <div class="col-span-2">
                    <h3 class="text-2xl leading-normal font-serif mb-6">Kinderopvang en Educatie</h3>
                </div>
                <div class="col-span-3 max-w-2xl">
                    <p class="font-sans-serif mb-4">
                        Het is van essentieel belang dat kinderen voldoende voeding en toegang tot kwalitatieve educatie krijgen.
                        Tussen 2006 en 2010 had Ghana Child Support de middelen om alle kinderen op de compound te huisvesten,
                        zelfs tijdens vakanties. De kinderen konden opgroeien in een veilige en ondersteunende omgeving,
                        waar ze voedsel, onderdak en educatieve kansen kregen.
                        Dit was een periode waarin de organisatie in staat was om een stabiele basis te bieden.
                    </p>
                    <p class="font-sans-serif mb-4">
                        In 2011 moesten de kinderen op verzoek van de overheid terugkeren naar huis om zich daar ook te oriënteren
                        op het leven. Zodra ze 18 jaar worden en Bright Lives moeten verlaten zouden ze zo min
                        mogelijk problemen hebben met re-integreren in de samenleving. Dit zorgde ervoor dat we de kinderen terug moesten
                        elke keer als er vakantie was. Helaas bleek dat ze bij terugkomst vaak ondervoed waren en dit gold voor alle kinderen.
                    </p>
                    <p class="font-sans-serif">
                        Dit probleem onderstreept de noodzaak van voortdurende ondersteuning en zorg voor deze kinderen,
                        zelfs na hun vertrek uit de opvang.
                    </p>
                </div>
            </div>

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-4 pb-10">
                <div class="col-span-2">
                    <h3 class="text-2xl leading-normal font-serif mb-6">Selectie voor opvang</h3>
                </div>
                <div class="col-span-3 max-w-2xl">
                    <p class="font-sans-serif mb-4">
                        Voordat een kind bij ons tehuis wordt opgenomen, screenen we zorgvuldig hun situatie. Het welzijn van het kind staat voorop.
                    </p>
                    <p class="font-sans-serif mb-4">
                        Er zijn drie criteria: Is het kind wees? Wordt hun onderwijs bedreigd door de afwezigheid of het overlijden van een ouder?
                        Of is de leefsituatie van beide ouders zo ernstig dat het kind niet naar school kan? Alleen als aan een van deze criteria wordt
                        voldaan, nemen we het kind op. Momenteel hebben 5 van onze meisjes, waaronder 2 tweelingen, beide ouders nog.
                        7 meisjes hebben één ouder, en 18 meisjes hebben beide ouders verloren.
                    </p>
                </div>
            </div>

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-4 pb-10">
                <div class="col-span-2">
                    <h3 class="text-2xl leading-normal font-serif mb-6">Gemeenschapsleven en kinderopvang</h3>
                </div>
                <div class="col-span-3 max-w-2xl">
                    <p class="font-sans-serif mb-4">
                        Het gemeenschapsleven in Ghana blijft sterk en levendig, vooral in de kleinere steden en dorpen in het noorden van het land.
                        Volgens Dan Seidu is het gebruikelijk dat uitgebreide families, inclusief aangetrouwde familieleden, samenleven in een compound.
                    </p>
                    <p>
                        Dit versterkt de familiebanden en zorgt ervoor dat ze intact blijven. De compound wordt indien nodig uitgebreid,
                        zodat bijvoorbeeld een man met zijn vrouw, hun zonen of dochters en hun partners, en al hun kinderen samen in één huis kunnen wonen.
                    </p>
                </div>
            </div>

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-4 pb-10">
                <div class="col-span-2">
                    <h3 class="text-2xl leading-normal font-serif mb-6">Sociale Uitdagingen voor Kinderen in Ghana</h3>
                </div>
                <div class="col-span-3 max-w-2xl">
                    <p class="font-sans-serif mb-4">
                        Meisjes die hun moeder verliezen en in polyamoreuze gezinnen terechtkomen, worden vaak gedwongen
                        te stoppen met school. Ze reizen naar het zuiden om te werken als 'Kaya Yei'. Dit zijn meisjes
                        die goederen dragen op hun hoofd en verkopen op de markt. Dit is een gevaarlijk beroep
                        met een minimaal inkomen en kwetsbaarheid voor misbruik en uitbuiting.
                        Dit kan leiden tot tienerzwangerschappen en gedwongen huwelijken.
                    </p>
<!--                    <p class="font-sans-serif mb-4">-->
<!--                        Er zijn terugkerende thema's in Ghana die aandacht nodig hebben, zoals onderwijs, het tegengaan van-->
<!--                        kindhuwelijken, uitbuiting, tienerzwangerschappen, financiële ongelijkheid, en gelijke rechten voor meisjes en vrouwen.-->
<!--                    </p>-->
                    <p>
                        Het is essentieel om deze sociale problemen aan te pakken en ondersteuning te bieden aan kwetsbare
                        kinderen en meisjes om hun toekomstperspectieven te verbeteren en hen te beschermen tegen uitbuiting en ongelijkheid.
                    </p>
                </div>
            </div>

            <div class="container mx-auto pt-20 pb-10">
                <div class="col-span-2 text-center">
                    <h2 class="text-2xl leading-normal font-serif mb-6">Uitdagingen voor Kinderen in Ghana</h2>
                </div>
            </div>

            <div class="container mx-auto grid grid-cols-5">
                <div class="p-10 bg-primary-400 text-white min-h-[300px]">
                    <h3 class="pb-4 font-bold">Onderwijs</h3>
                    <p class="font-sans-serif">
                        Overvolle klaslokalen en slecht opgeleide docenten zorgen voor onderwijs
                        van lage kwaliteit. Veel kinderen maken om die reden hun school nooit af.
                    </p>
                </div>
                <div class="p-10 bg-primary-500 text-white">
                    <h3 class="pb-4 font-bold">Kindhuwelijken</h3>
                    <p class="font-sans-serif">
                        Veel meisjes in Ghana worden op jonge leeftijd uitgehuwelijkt,
                        wat hun kansen op onderwijs en persoonlijke ontwikkeling beperkt.
                    </p>
                </div>
                <div class="p-10 bg-primary-400 text-white">
                    <h3 class="pb-4 font-bold">Tienerzwangerschappen</h3>
                    <p class="font-sans-serif">
                        Tienerzwangerschappen komen veel voor in Ghana, vaak als gevolg van een gebrek aan
                        seksuele voorlichting en middelen voor gezinsplanning.
                    </p>
                </div>
                <div class="p-10 bg-primary-500 text-white">
                    <h3 class="pb-4 font-bold">Financiële afhankelijkheid</h3>
                    <p class="font-sans-serif">
                        Financiëel afhankelijk van families of echtgenoten, wat vrijheid en mogelijkheden beperkt.
                    </p>
                </div>
                <div class="p-10 bg-primary-400 text-white">
                    <h3 class="pb-4 font-bold">Gelijke rechten voor meisjes en vrouwen</h3>
                    <p class="font-sans-serif">
                        Hoewel er vooruitgang is geboekt, hebben meisjes en vrouwen in Ghana nog steeds
                        te maken met discriminatie en ongelijke rechten.
                    </p>
                </div>
                <div class="p-10 bg-primary-500 text-white min-h-[300px]">
                    <h3 class="pb-4 font-bold">Hygiëne</h3>
                    <p class="font-sans-serif">
                        Gebrek aan toegang tot schoon water en sanitaire voorzieningen leidt tot ziekte en gezondheidsproblemen.
                    </p>
                </div>
                <div class="p-10 bg-primary-400 text-white">
                    <h3 class="pb-4 font-bold">Sexuele uitbuiting</h3>
                    <p class="font-sans-serif">
                        Meisjes in Ghana lopen een hoog risico op seksuele uitbuiting en misbruik, vooral in stedelijke gebieden.
                    </p>
                </div>
                <div class="p-10 bg-primary-500 text-white">
                    <h3 class="pb-4 font-bold">Arbeidsuitbuiting</h3>
                    <p class="font-sans-serif">
                        Onder slechte omstandigheden werken, vaak zonder fatsoenlijk loon of bescherming.
                    </p>
                </div>
                <div class="p-10 bg-primary-400 text-white">
                    <h3 class="pb-4 font-bold">Criminele uitbuiting</h3>
                    <p class="font-sans-serif">
                        Kwetsbare kinderen lopen een hoog risico om te worden gerekruteerd door criminele organisaties.
                    </p>
                </div>
                <div class="p-10 bg-primary-500 text-white">
                    <h3 class="pb-4 font-bold">
                        Gezondheidszorg
                    </h3>
                    <p class="font-sans-serif">
                        Gebrek aan toegang tot medische zorg en gezondheidsvoorzieningen leidt tot ziekte en sterfte.
                    </p>
                </div>
            </div>

            <section class="my-28">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="flex items-center">
                        <div>
                            <h2 class="text-4xl leading-normal font-serif mb-6">Realiseren campus</h2>
                            <p class="font-sans-serif mb-4">
                                In de beginjaren van onze stichting hebben we extra gebouwen laten neerzetten die nu helaas
                                leegstaan en ongebruikt zijn. We geloven dat het niet voldoende is om, zoals vroeger, alleen
                                opvang voor kinderen te bieden. In plaats daarvan streven we ernaar om hen scholing te geven,
                                gecombineerd met de mogelijkheid tot tijdelijk verblijf gedurende de week.
                            </p>
<!--                            <p class="font-sans-serif">-->
<!--                                Deze ongebruikte gebouwen bieden een unieke kans om een bruisende campus te creëren waar-->
<!--                                onderwijs centraal staat. Om deze visie te realiseren, hebben we uw hulp nodig. Met uw steun-->
<!--                                kunnen we de benodigde fondsen inzamelen om de transformatie van deze gebouwen mogelijk te maken.-->
<!--                                Samen kunnen we een veilige en stimulerende omgeving creëren waar kinderen kunnen leren en groeien.-->
<!--                            </p>-->
                            <p class="font-sans-serif mb-4">
                                Ons doel is om kwalitatief goed onderwijs aan kansarmen in de regio te bieden en zo inkomsten
                                te genereren om ons programma in Ghana zelfvoorzienend te maken. We plannen een campus met een
                                basisschool, administratiekantoor, opslagruimten, sanitaire voorzieningen, speelplaats,
                                en verblijven voor personeel en sommige leerlingen.
                            </p>

                            <p class="font-sans-serif mb-4">
                                Dit project is essentieel omdat het huidige onderwijsniveau te laag is voor kinderen om goede kansen te krijgen.
                                Daarnaast is het programma afhankelijk van Nederlandse financiering, wat het kwetsbaar maakt.
                                We willen het programma financieel zelfvoorzienend maken, wat de continuïteit waarborgt
                                en alle betrokkenen in Ghana ten goede komt.
                            </p>
                        </div>
                    </div>

                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content/PA230079.JPG" alt="Extra gebouwen voor de campus">
                    </div>
                </div>
            </section>

            <section class="my-24 py-20 bg-gray-200">
                <div class="container mx-auto items-center grid grid-cols-1 md:grid-cols-2 gap-12">

                    <div class="w-full">
                        <h3 class="text-2xl leading-normal font-serif mb-12">Projectkosten</h3>
                        <table class="table-auto w-full text-sm">
                            <thead>
                                <tr class="text-left">
                                    <th class="pb-3">Soort</th>
                                    <th class="pb-3">Artikelen</th>
                                    <th class="pb-3">Aantal</th>
                                    <th class="pb-3 text-right">Stuk prijs</th>
                                    <th class="pb-3 text-right">Totaal</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $rowData1 = array(
                                    'kind' => 'Verbouwing',
                                    'item' => 'Klaslokalen',
                                    'amount' => 4,
                                    'unitPrice' => '500,00',
                                    'totalPrice' => '2.000,00'
                                );
                                get_template_part( 'template-parts/table/table-row', null, $rowData1);

                                $rowData2 = array(
                                    'kind' => 'Verbouwing',
                                    'item' => 'Slaapvertrekken',
                                    'amount' => 4,
                                    'unitPrice' => '500,00',
                                    'totalPrice' => '2.000,00'
                                );
                                get_template_part( 'template-parts/table/table-row', null, $rowData2);

                                $rowData3 = array(
                                    'kind' => 'Verbouwing',
                                    'item' => 'Keuken',
                                    'amount' => 1,
                                    'unitPrice' => '1.000,00',
                                    'totalPrice' => '1.000,00'
                                );
                                get_template_part( 'template-parts/table/table-row', null, $rowData3);

                                $rowData4 = array(
                                    'kind' => 'Verbouwing',
                                    'item' => 'Opslag',
                                    'amount' => 2,
                                    'unitPrice' => '250,00',
                                    'totalPrice' => '500,00'
                                );
                                get_template_part( 'template-parts/table/table-row', null, $rowData4);

                                $rowData5 = array(
                                    'kind' => 'Nieuwbouw',
                                    'item' => 'Kantoorruimte',
                                    'amount' => 1,
                                    'unitPrice' => '3.000,00',
                                    'totalPrice' => '3.000,00'
                                );
                                get_template_part( 'template-parts/table/table-row', null, $rowData5);

                                $rowData6 = array(
                                    'kind' => 'Loodgieter/<br />elektriciteit',
                                    'item' => 'Douches, WCs, riolering en elektriciteit',
                                    'amount' => 10,
                                    'unitPrice' => '450,00',
                                    'totalPrice' => '4.500,00'
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData6);

                                $rowData7 = array(
                                    'kind' => 'Inrichting',
                                    'item' => 'Klaslokalen (borden, tafels, stoelen, etc.)',
                                    'amount' => 100,
                                    'unitPrice' => '8,00',
                                    'totalPrice' => '800,00'
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData7);

                                $rowData8 = array(
                                    'kind' => 'Inrichting',
                                    'item' => 'Kantoorruimte',
                                    'amount' => 1,
                                    'unitPrice' => '500,00',
                                    'totalPrice' => '500,00'
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData8);

                                $rowData9 = array(
                                    'kind' => 'Lesmaterialen',
                                    'item' => 'Boeken, schriften, schrijfgerei, etc.',
                                    'amount' => 5,
                                    'unitPrice' => '100,00',
                                    'totalPrice' => '500,00'
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData9);

                                $rowData10 = array(
                                    'kind' => 'Licenties',
                                    'item' => 'Vergunning runnen school',
                                    'amount' => 1,
                                    'unitPrice' => '200,00',
                                    'totalPrice' => '200,00'
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData10);

                                $rowData11 = array(
                                    'kind' => '',
                                    'item' => 'Overziende kosten 30%',
                                    'amount' => 1,
                                    'unitPrice' => '',
                                    'totalPrice' => '4.500,00'
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData11);

                                $rowData12 = array(
                                    'kind' => 'Totaal',
                                    'item' => '',
                                    'amount' => '',
                                    'unitPrice' => '',
                                    'totalPrice' => '19.500,00',
                                    'lastRow' => true
                                );
                                get_template_part('template-parts/table/table-row', null, $rowData12);
                            ?>
                            </tbody>
                        </table>
                    </div>

                    <?php get_template_part('template-parts/donate/donate'); ?>
                </div>
            </section>

            <section class="my-28">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-4xl leading-normal font-serif mb-6">Samenwerking voor Succes in Ghana</h3>
                        <p class="font-sans-serif mb-4">
                            De activiteiten in Ghana worden nu georganiseerd door een Ghanese stichting onder leiding
                            van de heer Daniel Seidu. Een sterke lokale organisatie draagt bij aan het succes en de
                            continuïteit van het project. Bright Lives ondersteunt de Ghanese organisatie door
                            het werven van kindsponsors, donaties en vrijwilligers.
                        </p>
                        <p class="font-sans-serif">
                            Vanuit Nederland bieden we op alle mogelijke manieren ondersteuning met kennis en expertise
                            om de doelstellingen te realiseren en de kwaliteit te waarborgen. We hopen in de toekomst,
                            met de blauwdruk van ons succes, ook elders in Ghana een verschil te maken.
                        </p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content/PA230053.JPG" alt="Wa Yiri Residence">
                    </div>
                </div>
            </section>
		</main>

        <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
        <?php wp_footer(); ?>
	</body>
</html>
