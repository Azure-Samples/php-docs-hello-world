<?php
# returns 75 character string containing
	# SHA-256 encrypted hash created from string and random salt
	public function hash_string($string) {
		$salt = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
		return crypt($string, '$5$rounds=5000$' . $salt . '$');
	}
echo $this->hash_string("test")
?>

