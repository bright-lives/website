<?php
function create_custom_blocks_init(): void {
	$build_dir = dirname(__DIR__) . '/build';
	$directories = glob($build_dir . '/*' , GLOB_ONLYDIR);

	foreach ($directories as $directory) {
		register_block_type($directory);
	}
}
add_action( 'init', 'create_custom_blocks_init' );
