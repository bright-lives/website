<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

if (!isset($_ENV['API_KEY_MOLLIE'])) {
    error_log("Mollie API key not set.");
    echo '[Mollie API key not set.]';
    return;
}

require_once __DIR__ . '/../../../../../vendor/autoload.php';
use Mollie\Api\MollieApiClient;

$mollie = new \Mollie\Api\MollieApiClient();
$mollie -> setApiKey($_ENV['API_KEY_MOLLIE']);

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim(sanitize_text_field($_POST['Naam']));
	$amount = filter_var($_POST['donation-amount']);
	$orderId = time();

	if (empty($name)) {
        $error = "Vul een geldige naam in.";
    } elseif ($amount === false || $amount <= 0 || $amount > 9999) {
        $error = "Gebruik een geldig bedrag.";
    } else {
        try {
            $payment = $mollie->payments->create([
                "amount" => [
                    "currency" => "EUR",
                    "value" => number_format($amount, 2, '.', '')
                ],
                "description" => "Donatie van " . $name,
                "redirectUrl" => home_url('/bedankt/'),
    			// "webhookUrl" => home_url('/wp-json/mollie/v1/webhook'),
                "metadata" => [
	                "order_id" => $orderId,
                ],
            ]);

            header("Location: " . $payment->getCheckoutUrl(), true, 303);
            exit();
        } catch (\Mollie\Api\Exceptions\ApiException $e) {
	        error_log("Mollie API Error: " . $e->getMessage());
            $error = "API call failed: " . htmlspecialchars($e->getMessage());
        }
    }
}
?>

<form method="POST" action="" class="bg-white p-8">
	<?php wp_nonce_field('mollie_donate_form', 'mollie_donate_nonce'); ?>
    <?php
	if (!empty($error)) {
		echo "<div class='mb-4 p-4 bg-red-100 border border-red-500 rounded'><p class='text-red-500'>Fout: $error</p></div>";
	}
	?>

	<div class="grid grid-cols-1 mb-6">
        <label for="name" class="font-bold mb-3">Naam: <span class="text-red-500">*</span></label>
		<input id="name" type="text" name="Naam" class="p-4 w-full bg-slate-100 mb-4 md:mb-0 border border-slate-300 rounded" required />
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
    <div class="grid">
	    <button class="p-4 border-2 text-white bg-primary-500 border-primary-500 hover:bg-primary-700" type="submit">Doneer</button>
    </div>
</form>

<?php
ob_end_flush();
