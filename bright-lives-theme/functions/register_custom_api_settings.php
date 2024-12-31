<?php
require_once get_template_directory() . '/functions/classes/bl_data_encryption.php';
$bl_data_encryption = new BL_Data_Encryption();

add_action('admin_init', 'register_custom_api_settings');

function register_custom_api_settings(): void {

	add_settings_section(
		'bl_api_section',
		'API keys',
		'bl_api_section_callback',
		'general'
	);

	add_settings_field(
		'bl_api_key_mollie_field',
		'Mollie API key',
		'bl_api_key_mollie_field_callback',
		'general',
		'bl_api_section'
	);

	register_setting('general', 'bl_api_key_mollie_field', 'submit_api_key');
}

function bl_api_section_callback(): void {
	echo '<p>Enter your API keys below</p>';
}

function bl_api_key_mollie_field_callback(): void {
	$value = get_api_key();
	wp_nonce_field('bl_api_key_mollie_field_action', 'bl_api_key_mollie_field_nonce');

	echo '<input type="password" size="50" name="bl_api_key_mollie_field" id="bl_api_key_mollie_input" value="' . esc_attr($value) . '" />';
	echo '<input type="checkbox" id="toggleVisibility" style="display:none;">';
	echo '<span id="visibility_icon" class="dashicons dashicons-hidden" style="cursor: pointer; margin-left: 4px; margin-top: 4px;"></span>';
}

function submit_api_key($input): string {
	global $bl_data_encryption;

	if(!current_user_can( 'edit_theme_options' )){
		wp_die("You do not have permission to view this page.");
	}

	// check the nonce field - if the nonce fails this will kill script
	check_admin_referer('bl_api_key_mollie_field_action', 'bl_api_key_mollie_field_nonce');

	if (!defined( 'LOGGED_IN_SALT' ) && '' === LOGGED_IN_SALT) {
		wp_die('Something is wrong with the salt.');
	}

	if (!empty($input)) {
		return $bl_data_encryption->encrypt_data(sanitize_text_field($input), LOGGED_IN_SALT);
	} else {
		return '';
	}
}

function get_api_key(): string {
	global $bl_data_encryption;

	if (!defined( 'LOGGED_IN_SALT' ) && '' === LOGGED_IN_SALT) {
		wp_die('Something is wrong with the salt.');
	}

	$value = get_option('bl_api_key_mollie_field', '');

	return $bl_data_encryption->decrypt_data($value, LOGGED_IN_SALT);
}

add_action('admin_enqueue_scripts', 'enqueue_custom_admin_script');

function enqueue_custom_admin_script($hook): void {
	if ('options-general.php' !== $hook) {
		return;
	}
	wp_enqueue_script('custom-admin-script', get_stylesheet_directory_uri() .  '/assets/js/admin-options-general.js', [], '1.0', true);
}
