<?php
    $menu_name = 'main_menu';
    $menu_items = wp_get_nav_menu_items($menu_name);
?>

<header class="flex pt-4 absolute w-full">
    <div class="mr-auto">
        <div class="p-4">
            Logo...
        </div>
    </div>
    <div class="md:hidden">
        <button id="menu-toggle" class="p-4 text-blue-500 hover:text-blue-800">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/bars-3.svg' ?>" alt="menu icon"
                 width="30" height="30">
        </button>
    </div>
    <div id="menu" class="hidden md:block">
			<?php
			$args = array(
				'menu'                           => $menu_name,
				'container'                      => 'nav',
				'add_ul_classes'                 => 'flex',
				'add_li_classes'                 => 'flex text-blue-500 hover:text-blue-800 last:bg-white',
				'add_li_current_menu_item_class' => 'text-red-500 hover:text-red-500 text-white',
				'add_a_classes'                  => 'p-4',
			);
            if ($menu_items) {
	            wp_nav_menu( $args );
            }
			?>
    </div>
</header>
<div id="mobile-menu" class="hidden md:hidden">
	<?php
	$args = array(
		'menu'           => $menu_name,
		'container'      => 'nav',
		'add_ul_classes' => 'flex flex-col',
		'add_li_classes' => 'p-4 flex text-blue-500 hover:text-blue-800',
	);
    if ($menu_items) {
	    wp_nav_menu( $args );
    }
	?>
</div>
