<?php
require_once __DIR__ . '/mollie/custom_donation_form.php';

function donation_form_shortcode() {
	global $custom_donation_form_error;
	return custom_donation_form($custom_donation_form_error);
}
add_shortcode('donation_form', 'donation_form_shortcode');
