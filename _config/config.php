<?php

//----------------------//
//      Error display   //
//----------------------//

//!\\ A enlever lors du déploiement

error_reporting(E_ALL);
ini_set('display_errors',true);

//----------------------//
//      SESSIONS        //
//----------------------//

ini_set('session.cookie_lifetime',false);

session_start();



//----------------------//
//      Constants       //
//----------------------//

// Paths

// les defines sont des constantes c'est à dire qu'elles vont au dela de ce fichier quand on les appelle

// Paths

define("PATH_REQUIRE",substr($_SERVER['SCRIPT_FILENAME'],0, -9)); // Le chemin absolu vers le fichier contenant le script en cours d'exécution. 
define("PATH",substr($_SERVER['PHP_SELF'],0, -9)); // Le nom du fichier du script en cours d'exécution, par rapport à la racine web. Par exemple, $_SERVER['PHP_SELF'] dans le script situé à l'adresse http://example.com/foo/bar.php sera /foo/bar.php. La constante __FILE__ contient le chemin complet ainsi que le nom du fichier (i.e. inclus) courant. Si PHP fonctionne en ligne de commande, cette variable contient le nom du script depuis PHP 4.3.0. Dans les versions antérieures, cette variable n'était pas disponible. Pour les fichiers

// Website informations

define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME", "Mon site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "T");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

//  Database informations

define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "form_oop");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "root");

