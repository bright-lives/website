<?php
    $menu_name = 'main_menu';
    $menu_items = wp_get_nav_menu_items($menu_name);
?>

<header class="absolute pt-6 w-full z-30">
    <div class="container mx-auto flex">
        <div class="mr-auto">
            <div class="p-4">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/logo/logo-white.svg' ?>"
                         alt="Bright lives logo"
                         width="200" height="50">
                </a>
            </div>
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="p-4 text-white hover:text-primary-100">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/bars-3.svg' ?>"
                     alt="menu icon"
                     width="30"
                     height="30">
            </button>
        </div>
        <div id="menu" class="hidden md:block mt-12">
            <?php
            $args = array(
                'menu'                           => $menu_name,
                'container'                      => 'nav',
                'add_ul_classes'                 => 'flex',
                'add_li_classes'                 => 'flex font-serif tracking-wide font-bold text-white hover:text-primary-100 last:bg-white last:text-primary-500',
                'add_li_current_menu_item_class' => '!text-primary-100 hover:text-primary-100',
                'add_a_classes'                  => 'py-4 pr-10',
                'add_a_classes_last'             => 'py-4 px-8',
            );
            if ($menu_items) {
                wp_nav_menu( $args );
            }
            ?>
        </div>
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
