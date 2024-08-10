<?php
$template_dir = get_template_directory();

$hooks_directories = [
	'actions' => $template_dir . '/hooks/actions/*.php',
	'filters' => $template_dir . '/hooks/filters/*.php',
];

foreach ($hooks_directories as $path) {
	$files = glob($path);
	foreach ($files as $file) {
		require_once $file;
	}
}
