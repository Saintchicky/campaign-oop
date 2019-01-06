<?php


// inclure _config || _function || autoloader || db

include_once '_config/config.php';
include_once '_functions/function.php';
include_once '_classes/Autoloader.php';

// Chargement automatique des classes via le controleur 
Autoloader::register();

//Connexion à la BDD
include_once '_config/db.php';


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


