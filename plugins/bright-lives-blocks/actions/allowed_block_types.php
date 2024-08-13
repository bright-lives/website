<?php
/**
 * This file will affect only core blocks.
 * All other blocks namespaces will be registered as usual.
 */
function custom_allowed_block_types($allowed_blocks, $editor_context): array {

	/**
	 * Full list of core blocks: https://developer.wordpress.org/block-editor/reference-guides/core-blocks/
	 */
	$allowed_core_blocks = [
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/list-item',
		'core/button',
		'core/buttons',
		'core/column',
		'core/columns',
		'core/cover',
		'core/form',
		'core/image',
		'core/pullquote',
	];

	$all_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

	$allowed_blocks = [];

	foreach ($all_blocks as $block_name => $block_type) {
		if (str_starts_with( $block_name, 'core/') && in_array($block_name, $allowed_core_blocks)) {
			$allowed_blocks[] = $block_name;
		}

		elseif (!str_starts_with( $block_name, 'core/')) {
			$allowed_blocks[] = $block_name;
		}
	}

	return $allowed_blocks;
}

//add_filter('allowed_block_types_all', 'custom_allowed_block_types', 10, 2);
