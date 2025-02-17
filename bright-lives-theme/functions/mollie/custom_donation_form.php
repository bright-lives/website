<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

require_once get_template_directory() . '/functions/classes/bl_data_encryption.php';
require_once get_template_directory() . '/functions/classes/mollie_payment.php';

$bl_data_encryption = new BL_Data_Encryption();
$mollie_api_key = get_option('bl_api_key_mollie_field');
$custom_donation_form_error = '';

if (empty($mollie_api_key) ) {
	error_log("Mollie API key not set in \"Settings => General\".");
	echo 'Mollie API key not set. Please set the API key in "Settings => General".';
	return;
}

$mollie = new MolliePayment($bl_data_encryption->decrypt_data($mollie_api_key, LOGGED_IN_SALT));

function isValidAmount($amount): bool {
	return is_numeric($amount) && $amount > 0 && $amount < 9999;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mollie_donate_nonce']) && wp_verify_nonce($_POST['mollie_donate_nonce'], 'mollie_donate_form')) {
    $name = trim(sanitize_text_field($_POST['name']));
    $amount = filter_var($_POST['donation-amount']);
    $amount_custom = filter_var($_POST['donation-custom-amount']);
    $orderId = time();

	$value = false;
	if (isValidAmount($amount_custom)) {
		$value = $amount_custom;
	} elseif (isValidAmount($amount)) {
		$value = $amount;
	}

    if (empty($name)) {
	    $custom_donation_form_error = "Vul een geldige naam in.";
	    return;
    }
    if ($value === false) {
        $custom_donation_form_error = "Gebruik een geldig bedrag.";
        return;
    }

    try {
	    $payment = $mollie->create([
		    "amount" => [
			    "currency" => "EUR",
			    "value" => number_format($value, 2, '.', '')
		    ],
		    "description" => "Donatie van " . $name,
		    "redirectUrl" => home_url('/bedankt/'),
		    // "webhookUrl" => home_url('/wp-json/mollie/v1/webhook'),
		    "metadata" => [ "order_id" => $orderId ],
	    ]);

	    $checkoutUrl = $mollie->getCheckoutUrl($payment);
	    header("Location: " . $checkoutUrl, true, 303);
        exit();
    } catch (Exception $e) {
        error_log("Mollie API Error: " . $e->getMessage());
        $custom_donation_form_error = "API call failed: " . htmlspecialchars($e->getMessage());
    }
}


function custom_donation_form($custom_donation_form_error = '') {
    ob_start();
    ?>
    <form method="POST" action="" class="bg-white p-8">
        <?php wp_nonce_field('mollie_donate_form', 'mollie_donate_nonce'); ?>
        <?php
        if (!empty($custom_donation_form_error)) {
            echo "<div class='mb-4 p-4 bg-red-100 border border-red-500 rounded'><p class='text-red-500'>Fout: $custom_donation_form_error</p></div>";
        }
        ?>
        <div class="grid grid-cols-1 mb-6">
            <label for="name" class="font-bold mb-3">Naam: <span class="text-red-500">*</span></label>
            <input id="name" type="text" name="name" class="p-4 w-full bg-slate-100 mb-4 md:mb-0 border border-slate-300 rounded" required />
        </div>
        <div>
            <p class="font-bold mb-3">Kies een bedrag: </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <label class="border border-slate-300 rounded p-4 cursor-pointer hover:bg-secondary-100">
                <input type="radio" name="donation-amount" value="5" checked="checked" />
                <span>€ 5,-</span>
            </label>
            <label class="border border-slate-300 rounded p-4 cursor-pointer hover:bg-secondary-100">
                <input type="radio" name="donation-amount" value="10" />
                <span>€ 10,-</span>
            </label>
            <label  class="border border-slate-300 rounded p-4 cursor-pointer hover:bg-secondary-100">
                <input type="radio" name="donation-amount" value="15" />
                <span>€ 15,-</span>
            </label>
        </div>
        <div class="grid grid-cols-1 mb-6">
            <label for="name" class="font-bold mb-3">Of voer zelf een bedrag in:</label>
            <input id="name" type="number" name="donation-custom-amount" class="p-4 w-full bg-slate-100 mb-4 md:mb-0 border border-slate-300 rounded" />
        </div>
        <div class="grid">
            <button class="p-4 border-2 text-white bg-primary-500 border-primary-500 hover:bg-primary-700" type="submit">Doneer</button>
        </div>
    </form>
    <?php
    return ob_get_clean();
}
