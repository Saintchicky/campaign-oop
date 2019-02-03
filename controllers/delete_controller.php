<?php
if(isset($_SESSION['username'])){
	$id = $_GET['id'];

	$res = Campaign::delete($id);
	if($res){
		header('Location: '.$_SERVER['HTTP_REFERER']); // reload la page précèdente
		$_SESSION['delete_question'] = "<div class='alert alert-danger alert_a'>La question a été effacée</div>";
	}else{
			echo "Une erreur est arrivée";
	}
}else{
    header('location:log');
}


