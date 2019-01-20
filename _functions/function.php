<?php

/**
 * Permet de sécuriser une chaîne caractère
 * @param $string
 * @return string
 */

function str_secur($string){
    return trim(htmlspecialchars($string));
}

/**
 * debug plus lisible des différentes variables
 * @param $var
 */
function debug($var){
    echo '<pre>';
    var_dump($var);
    echo'</pre>';
}



// Encrypt cookie
function encryptCookie( $value ) {
 $key = '!$//%$$//%$&=§$!&%&=§$!&%';
 $cookie_value = password_hash($key . $value,PASSWORD_DEFAULT); // pour cacher le mot de passe dans les cookies
 return( $cookie_value );
}

// Decrypt cookie
function decryptCookie( $value ) {
 $key = 'youkey';
 $newvalue = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $key ), base64_decode( $value ), MCRYPT_MODE_CBC, md5( md5( $key ) ) ), "\0");
 return( $newvalue );
}