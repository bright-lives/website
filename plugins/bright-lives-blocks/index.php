<?php
/**
 * Plugin Name: Bright Lives Blocks
 * Description: Custom blocks for the Bright Lives theme.
 * Version: 1.1
 * Author: Spindle B.V.
 */

$plugin_dir = plugin_dir_path(__FILE__);

$hooks_directories = [
	'actions' => $plugin_dir . 'actions/*.php',
	'filters' => $plugin_dir . 'filters/*.php',
];

foreach ($hooks_directories as $path) {
	$files = glob($path);

	foreach ($files as $file) {
		require_once $file;
	}
}
