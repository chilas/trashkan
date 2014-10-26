<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hash
 *
 * @author Ayeni Olusegun
 */
class Hash {
    
    static public $sp_encryption = "";
    /**
    * @param string $data - the key=value pairs separated with & 
    * @return string
    */
    public static function encode_data($data) {
        self::$sp_encryption = ENCTYPE;
        $strIn = self::pkcs5_pad($data);
        $strCrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, self::$sp_encryption, $strIn, MCRYPT_MODE_CBC, self::$sp_encryption);
        return "@" . bin2hex($strCrypt);
    }

    /**
    * @param string $data - crypt response from Sagepay
    * @return string
    */
    public static function decode_data($data) {
        self::$sp_encryption = ENCTYPE;
        if (substr($data, 0, 1) == "@") {
            $strIn = hex2bin(substr($data, 1));
            return self::pkcs5_unpad(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, self::$sp_encryption, $strIn, MCRYPT_MODE_CBC, self::$sp_encryption));
        }
        return '';
    }

    private static function pkcs5_pad($text) {
    $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
        $pad = $size - (strlen($text) % $size);
        return $text . str_repeat(chr($pad), $pad);
    }

    private static function pkcs5_unpad($text) {
        $pad = ord($text{strlen($text) - 1});
        if ($pad > strlen($text)) return false;
        if (strspn($text, $text{strlen($text) - 1}, strlen($text) - $pad) != $pad) {
            return false;
        }
        return substr($text, 0, -1 * $pad);
    }
}
