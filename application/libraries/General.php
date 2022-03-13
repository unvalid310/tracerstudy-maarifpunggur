<?php

class General {
	var $CI;

    function __construct() {
        $this->CI = &get_instance();
    }

    function generateRandomCode($length = 8) {
        // Available characters
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUabcdefghjkmnoprstvwxyz';

        $Code = '';
        // Generate code
        for ($i = 0; $i < $length; ++$i) {
            $Code .= substr($chars, (((int) mt_rand(0, strlen($chars))) - 1), 1);
        }
        return strtoupper($Code);
    }
}
?>