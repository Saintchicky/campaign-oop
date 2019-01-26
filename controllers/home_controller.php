<?php
if(isset($_SESSION['username'])){
$title = Home::read();
$score = Result::read();
}else{
    header('location:log');
}
if(isset($_COOKIE['auth']) && !isset($_SESSION['username'])){
    $auth = $_COOKIE['auth'];
	$auth = explode('------',$auth);
	$id = $auth['0'];
	$user = Log::get_user($id);
	$username = $user['username'];
	$_SESSION['username'] = $username;
	$pass = $user['pass'];
	$key = sha1($username.$pass);

	if($key == $auth[1]){
		
		$id = $user['id'].'------';
		$secret = sha1($username.$pass); // pour crypter l'username et mdp
		$cookie_s = $id.$secret;
        setcookie('auth',$cookie_s, time()+3600*24*3,'/','localhost', false, true);


	}else{
		setcookie('auth','', time()-3600,'/','localhost', false, true);
	}
  
}

