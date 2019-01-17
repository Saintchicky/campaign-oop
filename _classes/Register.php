<?php

class Register 
{
    static function create ($username, $email, $pass)
    {
        global $db;
        $res = $db->exec("INSERT INTO `users` (username, email, pass) VALUES ('$username','$email','$pass')");
        if($res){
            return true;
        }else{
            return false;
        }
    }
}