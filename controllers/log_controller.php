<?php

if (isset($_POST['connect']) & !empty($_POST) ) {

		$username = $_POST['username'];
		$pass = encryptCookie($_POST['pass']); // crypte le mot de passe pour éviter de le voir dans les cookies
	//  R�cup�ration de l'utilisateur et de son pass hash�
		$result = Log::Read($username);
	// Comparaison du pass envoyé via le formulaire avec la base

	$isPasswordCorrect = password_verify($_POST['pass'], $result['pass']);
	
	
	if(!$result)
	{
		 echo 'Mauvais identifiant ou mot de passe !';
	}else{
		if($isPasswordCorrect)
		{
		if(!empty($_POST['remember'])){
			
			setcookie("username", $username, time()+60*60*24*100,'/');
			setcookie("pass", $pass, time()+60*60*24*100,'/');
		}
		$_SESSION['username'] = $username;
		$_SESSION['pass'] = $pass;
		
		header('location:home');
		}else{
			header('location:log');
		}
	}

}