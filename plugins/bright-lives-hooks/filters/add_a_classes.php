<?php
function add_a_classes( $attrs, $item, $args ): array {

	if (isset( $args->add_a_classes )) {
		$attrs['class'] = $args->add_a_classes;
	}

	return $attrs;
}

add_filter( 'nav_menu_link_attributes', 'add_a_classes', 10, 3 );