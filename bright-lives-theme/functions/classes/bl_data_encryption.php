<?php
class BL_Data_Encryption {
	function encrypt_data($data, $key): false | string {
		return openssl_encrypt($data, "AES-256-CBC", $key, 0, substr(hash('sha256', $key), 0, 16));
	}

	function decrypt_data($encrypted_data, $key): false | string {
		return openssl_decrypt($encrypted_data, "AES-256-CBC", $key, 0, substr(hash('sha256', $key), 0, 16));
	}
}
