<?php


// inclure _config || _function || autoloader || db

include_once '_config/config.php';
include_once '_functions/function.php';
include_once '_classes/Autoloader.php';

// Chargement automatique des classes via le controleur 
Autoloader::register();

//Connexion à la BDD
include_once '_config/db.php';


// si l'utilsateur côche se souvenir de moi, alors un cookie est stocké avec l'username et le mdp.
// Lors de l'ouverture du navigateur on vérifie sir le cookie auth est la et si un utilsateur est
// connecté
if(isset($_COOKIE['auth']) && !isset($_SESSION['username'])){
    $auth = $_COOKIE['auth']; // on assigne le cookie auth 
	$auth = explode('------',$auth); // on seépare l'id et username, mdp
	$id = $auth['0']; // $auth est un tableau, la cellule 0 correspond à l'id
    $user = Log::get_user($id); // on trouve dans la bdd l'id correspond de l'utilisateur
	$username = $user['username']; // assigne son username
	$_SESSION['username'] = $username; // on le rentre dans la session
	$pass = $user['pass'];
	$key = sha1($username.$pass.$_SERVER['REMOTE_ADDR']); // On crée une clé qui permettra de vérifier avec notre cookie

    if($key == $auth[1]){ // si la clé et le cookie auth sont pareils alors on recrée un cookie
        // qui permettra de se reconnecter automatiquement	
		$id = $user['id'].'------';
		$secret = sha1($username.$pass); // pour crypter l'username et mdp
		$cookie_s = $id.$secret;
        setcookie('auth',$cookie_s, time()+3600*24*3,'/','localhost', false, true);


	}else{
		setcookie('auth','', time()-3600,'/','localhost', false, true);
	}
  
}

// Navigation site

if(isset($_GET['page']) AND !empty($_GET['page'])){ //$_GET récupère le nom de la page dans l'url
    $page = trim(strtolower($_GET['page']));
}else{
    $page = 'home'; // page d'accueil par défaut
}

// Scan des pages existantes dans le controller

$allPages = scandir('controllers/');

// Inclure grâce un tableau le model || le controleur || la vue

if(in_array($page.'_controller.php',$allPages)){
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
}else{
    echo 'ERREUR 404';
}


