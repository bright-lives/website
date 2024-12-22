<?php
class Horizontal_Tailwind_Category_Walker extends Walker_Category {
	function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0) {
		$cat_name = apply_filters('list_cats', esc_attr($category->name), $category);
		$link = '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="text-primary-400 hover:text-primary-500">';
		$link .= $cat_name;
		$link .= '</a>';
		$output .= '<li class="inline-block mr-2">' . $link;
	}
}
