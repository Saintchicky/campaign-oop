<?php

$id_campaign = $_GET['id'];
$forms = Campaign::read($id_campaign);

if(isset($_POST['up']) & !empty($_POST)){
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$score = $_POST['score'];
	$id = $_POST['id'];

	$res = Campaign::update($question, $answer, $score, $id);

	if($res){
	 header('location: home');
		echo "Succès";
	}else{
		echo "Echec";
	}
}

