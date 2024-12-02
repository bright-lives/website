<?php
function create_custom_blocks_init(): void {
	if (!function_exists('register_block_type')) {
		error_log("Block editor is not available.");
    return;
  }

	$build_dir = dirname(__DIR__) . '/build';
	$directories = glob($build_dir . '/*' , GLOB_ONLYDIR);

	foreach ($directories as $directory) {
		try {
			register_block_type($directory);
		} catch (Exception $e) {
			error_log("Error registering block type: " . $e->getMessage());
		}
	}
}
add_action( 'init', 'create_custom_blocks_init');
