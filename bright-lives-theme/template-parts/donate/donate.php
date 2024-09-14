<?php

?>

<div class="p-20 bg-primary-500">
	<div class="mb-10">
		<p class="font-sans-serif text-2xl font-bold text-white">
			Met uw hulp kunnen we een positieve impact maken op de toekomst van kinderen in Ghana.
		</p>
	</div>
	<div class="mb-20">
		<div class="w-full max-w-lg">
			<div class="bg-gray-300 rounded-full h-4">
				<div class="bg-amber-400 h-4 rounded-full animate-pulse" style="width: 50%;"></div>
				<div class="flex justify-between my-2">
					<span class="text-white">€ 0</span>
					<span class="text-white">€ 19.500</span>
				</div>
			</div>
		</div>
	</div>

	<div>
		<p class="font-sans-serif text-white my-10">
			Kies voor een eenmalige donatie of word donateur en help ons om kwalitatief goed onderwijs te bieden.
		</p>
		<?php
		$args = array(
			'text' => 'Doneer nu',
			'url' => '#',
			'border' => true,
			'invert' => false,
		);
		get_template_part( 'template-parts/link-button/link-button', null, $args);
		?>
	</div>
</div>