<?php

$id = $_GET['id'];

$res = Campaign::delete($id);
if($res){
	header('location: home');
		echo "Succés";
}else{
		echo "Une erreur est arrivée";
	}


