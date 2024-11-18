<?php
function enqueue_custom_block_editor_scripts(): void {
	wp_enqueue_style('google-fonts-merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather&display=swap');
	wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap');
}
add_action('enqueue_block_assets', 'enqueue_custom_block_editor_scripts');