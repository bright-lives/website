<?php
function my_custom_body_classes($classes) {
	// Add a custom class
	$classes[] = 'bg-gray-100';

	// Remove a class if it exists
	if (($key = array_search('some-class', $classes)) !== false) {
		unset($classes[ $key ]);
	}

	return $classes;
}

add_filter( 'body_class', 'my_custom_body_classes' );