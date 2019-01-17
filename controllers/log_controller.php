<?php

if (isset($_POST['connect']) & !empty($_POST) ) {
		$username = $_POST['username'];
	
	//  Récupération de l'utilisateur et de son pass hashé
		$result = Log::Read($username);
	// Comparaison du pass envoyé via le formulaire avec la base

	$isPasswordCorrect = password_verify($_POST['pass'], $result['pass']);
	
	
	if(!$result)
	{
		 echo 'Mauvais identifiant ou mot de passe !';
	}else{
		if($isPasswordCorrect)
		{

        $_SESSION['username'] = $username;

        echo 'Vous êtes connecté !';
		}else{
			 echo 'Mauvais identifiant ou mot de passe !';
		}
	}

}