<?php
function add_li_classes($classes, $item, $args): array {

	if(isset($args->add_li_classes)) {
		$classes[] = $args->add_li_classes;
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'add_li_classes', 10, 3);
