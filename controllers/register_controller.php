<?php

		if(isset($_POST['register']) & !empty($_POST)){
				$pass_first = trim($_POST['pass_first']);
				$pass_c = trim($_POST['pass']);

				if($pass_first != $pass_c){
				 $_SESSION['not_confrim'] = "<small id='answerHelp' class='form-text error'>Le mot de passe ne correspond pas</small>";
				}else{

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
		}
