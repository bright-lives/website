<?php
    $menu_name = 'main_menu';
    $menu_items = wp_get_nav_menu_items($menu_name);

if (isset($args) && is_array($args)) {
    $hide_menu = isset($args['hide_menu']) ? $args['hide_menu'] : false;
}
?>

<div class="md:hidden absolute w-full z-50">
    <div class="container mx-auto flex px-10 md:px-0">
        <button id="menu-toggle" class="ml-auto pt-6">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/bars-3.svg' ?>"
                 alt="menu icon"
                 width="30"
                 height="30"
                 id="icon-bars"
            >
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/cross.svg' ?>"
                 alt="menu icon"
                 width="20"
                 height="20"
                 id="icon-cross"
                 class="hidden mt-1 mr-2"
            >
        </button>
    </div>
</div>

<header class="absolute w-full z-30">
    <div class="container mx-auto flex px-10 md:px-0">
        <div class="mr-auto">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/logo/logo-white.svg' ?>"
                     alt="Bright lives logo"
                     width="200"
                     height="50"
                     class="pt-6"
                >
            </a>
        </div>
	    <?php if (!$hide_menu) { ?>
            <div id="menu" class="mt-20 md:block">
                <?php
                $args = array(
                    'menu'                           => $menu_name,
                    'container'                      => 'nav',
                    'add_ul_classes'                 => 'flex',
                    'add_li_classes'                 => 'flex font-serif tracking-wide font-bold text-white hover:text-primary-500 last:bg-white last:text-primary-500',
                    'add_li_current_menu_item_class' => '!text-primary-500 hover:text-primary-500',
                    'add_a_classes'                  => 'py-4 pr-10',
                    'add_a_classes_last'             => 'py-4 px-8',
                );
                if ($menu_items) {
                    wp_nav_menu( $args );
                }
                ?>
            </div>
        <?php } ?>
    </div>
</header>
<div id="mobile-menu" class="absolute hidden md:hidden z-40 w-full bg-primary-500">
    <div class="[grid-area:stack]">
        <?php
        $args = array(
            'menu'           => $menu_name,
            'container'      => 'nav',
            'add_ul_classes' => 'flex flex-col',
            'add_li_classes' => 'flex hover:bg-primary-800 text-white',
            'add_a_classes'  => 'p-8 w-full',
        );
        if ($menu_items) {
            wp_nav_menu( $args );
        }
        ?>
    </div>
</div>
