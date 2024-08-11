<?php
function enqueue_custom_scripts(): void {
	wp_enqueue_script(
		'custom-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		null,
		true,
	);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
