<?php

$id = $_GET['id'];

$res = Campaign::delete($id);
if($res){
	header('location: home');
		echo "Succ�s";
}else{
		echo "Une erreur est arriv�e";
	}


