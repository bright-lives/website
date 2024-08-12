<?php
function custom_enqueue_block_editor_assets(): void
{
	wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/tailwind.css');
}
add_action('enqueue_block_assets', 'custom_enqueue_block_editor_assets');
