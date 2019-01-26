<?php
    session_start ();
    // On détruit les variables de notre session
    session_unset();

    // On détruit notre session
    session_destroy();
    setcookie('auth','', time()-3600,'/','localhost', false, true); //détruire le cookie auth qui a l'username et mdp
    // On redirige le visiteur vers la page d'accueil
    header ('location: log');
    ?>