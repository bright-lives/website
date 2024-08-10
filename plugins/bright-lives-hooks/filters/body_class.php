<?php
function my_custom_body_classes($classes): array {

	$classes[] = 'bg-gray-100';

	if (($key = array_search('some-class', $classes)) !== false) {
		unset($classes[ $key ]);
	}

	return $classes;
}

add_filter( 'body_class', 'my_custom_body_classes' );