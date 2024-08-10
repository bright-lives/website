<div class="flex pt-4">
	<div class="mr-auto">
		<div class="p-4">
			Logo...
		</div>
	</div>
	<div class="md:hidden">
		<button id="menu-toggle" class="p-4 text-blue-500 hover:text-blue-800">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/bars-3.svg' ?>" alt="menu icon" width="30" height="30">
		</button>
	</div>
    <div id="menu" class="hidden md:block">
		<?php
			$args = array(
				'name' => 'main_menu',
				'container' => 'nav',
				'add_ul_classes'  => 'flex',
				'add_li_classes'  => 'p-4 flex text-blue-500 hover:text-blue-800',
			);
			wp_nav_menu($args);
		?>
	</div>
</div>
<div id="mobile-menu" class="hidden md:hidden">
	<?php
        $args = array(
            'name' => 'main_menu',
            'container' => 'nav',
            'add_ul_classes'  => 'flex flex-col',
            'add_li_classes'  => 'p-4 flex text-blue-500 hover:text-blue-800',
        );
        wp_nav_menu($args);
	?>
</div>
