<?php
function create_block_hero_init(): void {
	register_block_type(dirname(__DIR__) . '/build/hero');
}
add_action( 'init', 'create_block_hero_init' );
