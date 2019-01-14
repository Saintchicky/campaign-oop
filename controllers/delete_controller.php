<?php

$id = $_GET['id'];

$res = Campaign::delete($id);
if($res){
	header('Location: '.$_SERVER['HTTP_REFERER']); // reload la page précèdente
		echo "Succès";
}else{
		echo "Une erreur est arrivée";
	}


