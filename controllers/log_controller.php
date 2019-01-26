<?php

if (isset($_POST['connect']) & !empty($_POST) ) {
	$username = $_POST['username'];
	$result = Log::Read($username);

		// $pass = encryptCookie($_POST['pass']); // crypte le mot de passe pour éviter de le voir dans les cookies
	//  R�cup�ration de l'utilisateur et de son pass hash�


		$id = $result['id'].'------';
		$pass = $result['pass'];
		$secret = sha1($username.$pass); // pour crypter l'username et mdp
		$cookie_s = $id.$secret;

	// Comparaison du pass envoyé via le formulaire avec la base
	$isPasswordCorrect = password_verify($_POST['pass'], $result['pass']);
	
	
	if(!$result)
	{
		 echo 'Mauvais identifiant ou mot de passe !';
	}else{
		if($isPasswordCorrect)
		{
		if(!empty($_POST['remember'])){

			// Dans setcookie, on met en premier la clé, puis la valeur $username, puis la on met la durée du cookie.
			// En mettant '/' c'est global pour toute l'application
			// le nom de domaine du site
			// On est false car on est pas en HTTPS
			// Il faut mettre True pour être en HTTP Only ce qui permet d'éviter que le cookie soit éditable en javascript
			setcookie('auth',$cookie_s, time()+3600*24*3,'/','localhost', false, true);
	
		}
		$_SESSION['username'] = $username;
		$_SESSION['pass'] = $pass;
		
		header('location:home');
		}else{
			header('location:log');
		}
	}

}
