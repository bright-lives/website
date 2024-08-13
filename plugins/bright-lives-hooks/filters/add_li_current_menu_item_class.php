<?php
function add_li_custom_class_to_current_menu_item( $classes, $item, $args ) {

	if (in_array( 'current-menu-item', $classes ) && isset( $args->add_li_current_menu_item_class )) {
		$classes[] = $args->add_li_current_menu_item_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_li_custom_class_to_current_menu_item', 10, 3 );
