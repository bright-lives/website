<?php
function add_a_classes( $attrs, $item, $args ): array {

	$menu_items = wp_get_nav_menu_items($args->menu);

	$is_last_item = end($menu_items)->ID === $item->ID;

	if (isset($args->add_a_classes)) {
		if ($is_last_item && isset($args->add_a_classes_last)) {
			$attrs['class'] = $args->add_a_classes_last;
		} else {
			$attrs['class'] = $args->add_a_classes;
		}
	}

	return $attrs;
}

add_filter( 'nav_menu_link_attributes', 'add_a_classes', 10, 3 );