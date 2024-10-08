<footer class="bg-black pt-40 pb-20">
    <div class="container mx-auto mb-20">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="col-span-3 md:col-span-2">
                <label class="flex text-white text-2xl font-serif mb-6" for="e-mail">Schrijf je in:</label>
                <form class="flex">
                    <input id="e-mail" type="text" placeholder="e-mail@provider.nl" class="p-4 border-2 border-whitet" />
	                <?php
	                $args = array(
		                'text' => 'Doneer nu',
		                'url' => '#',
		                'border' => true,
		                'invert' => false,
	                );
	                get_template_part( 'template-parts/link-button/link-button', null, $args);
	                ?>
                </form>
            </div>
            <div class="col-span-3 md:col-span-1">
                <span class="flex text-white text-2xl font-serif mb-6" for="e-mail">Contact:</span>
                <ul>
                    <li class="text-white">Bankijkerweg 237</li>
                    <li class="text-white">2231 MX Rijnsburg</li>
                    <li class="text-white mb-2">Nederland</li>
                    <li class="text-white">
                        <a
                         class="text-primary-100 hover:text-white underline underline-offset-4"
                         href="#"
                         title="E-mail naar info@bright-lives.nl"
                        >info@bright-lives.nl</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mx-auto border-t border-primary-600 pt-20">
	    <p class="font-sans text-white">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
    </div>
</footer>