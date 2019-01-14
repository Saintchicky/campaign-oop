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



