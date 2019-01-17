<?php

if(isset($_POST['register']) & !empty($_POST)){
    $username = str_secur($_POST['username']);
    $email = str_secur($_POST['email']);
    $pass = str_secur(password_hash($_POST['pass'],PASSWORD_DEFAULT));

    $res = Register::create($username, $email, $pass);
    if($res){
        echo "Succès";
    }else{
        echo"Problème";
    }
}