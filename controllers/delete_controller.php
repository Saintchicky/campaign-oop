<?php

$id = $_GET['id'];

$res = Campaign::delete($id);
if($res){
	header('Location: '.$_SERVER['HTTP_REFERER']); // reload la page précèdente
	$_SESSION['delete_question'] = "<div class='alert alert-danger'>La question a été effacée</div>";
}else{
		echo "Une erreur est arrivée";
	}


