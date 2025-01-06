<?php

function add_custom_categories($block_categories) {

	array_push(
		$block_categories,
		array(
			'slug'  => 'sections',
			'title' => 'Sections'
		),
		array(
			'slug'  => 'components',
			'title' => 'Components'
		)
	);

	return $block_categories;
}

add_filter( 'block_categories_all', 'add_custom_categories');
