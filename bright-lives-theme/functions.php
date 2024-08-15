<?php
$plugin_dir = plugin_dir_path(__FILE__);

$hooks_directories = [
	'functions' => $plugin_dir . 'functions/*.php',
];

foreach ($hooks_directories as $path) {
	$files = glob($path);

	foreach ($files as $file) {
		require_once $file;
	}
}