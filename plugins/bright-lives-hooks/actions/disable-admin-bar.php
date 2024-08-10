<?php
function disable_admin_bar(): void {
	show_admin_bar(false);
}
add_action('after_setup_theme', 'disable_admin_bar');
