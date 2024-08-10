<?php
function add_ul_classes($menu, $args): string {
  $classes = [];


	if (isset($args->menu_class)) {
		$classes[] = $args->menu_class;
	}
	if (isset($args->add_ul_classes)) {
		$classes[] = $args->add_ul_classes;
	}

  $class_string = implode(' ', $classes);

	return preg_replace('/<ul(.*?)class="(.*?)"(.*?)>/', '<ul$1 class="' . $class_string . '" $3>', $menu);
}

add_filter('wp_nav_menu', 'add_ul_classes',  10, 2);
