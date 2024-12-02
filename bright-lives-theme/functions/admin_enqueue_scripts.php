<?php
function load_admin_style(): void {
	wp_enqueue_style('admin_css', get_stylesheet_directory_uri() . '/assets/css/gutenberg-admin-editor-styles.css' );
}
add_action('admin_enqueue_scripts', 'load_admin_style');
