<?php
/**
 * More information: https://docs.mollie.com/reference/create-payment
 */

class MolliePayment {
	private $apiKey;
	private $apiEndpoint = 'https://api.mollie.com/v2/payments';

	public function __construct( $apiKey ) {
		$this->apiKey = $apiKey;
	}

	public function create( $paymentData ) {
		$this->validatePaymentData($paymentData);

		$ch = curl_init($this->apiEndpoint);

		curl_setopt_array($ch, [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER     => [
				'Authorization: Bearer ' . $this->apiKey,
				'Content-Type: application/json'
			],
			CURLOPT_POST           => true,
			CURLOPT_POSTFIELDS     => json_encode($paymentData)
		]);

		$response = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if (curl_errno($ch)) {
			throw new Exception('Curl error: ' . curl_error($ch));
		}

		curl_close($ch);

		$decodedResponse = json_decode($response, true);

		if ($httpCode >= 400) {
			throw new Exception('API error: ' . ($decodedResponse['detail'] ?? 'Unknown error'));
		}

		return $decodedResponse;
	}

	public function getCheckoutUrl( $payment ) {
		if ( isset( $payment['_links']['checkout']['href'] ) ) {
			return $payment['_links']['checkout']['href'];
		}
		throw new Exception( 'Checkout URL not found in payment response' );
	}

	private function validatePaymentData($paymentData)
	{
		$requiredFields = ['amount', 'description', 'redirectUrl'];
		foreach ($requiredFields as $field) {
			if (!isset($paymentData[$field])) {
				throw new InvalidArgumentException("Missing required field: $field");
			}
		}
	}
}