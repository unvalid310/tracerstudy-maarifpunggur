<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Lib {

	function encryptIt($input) {
	    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	    $inputEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $input, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
	    return( $inputEncoded );
	}

	function decryptIt($input) {
	    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	    $inputDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $input ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	    return( $inputDecoded );
	}

}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */