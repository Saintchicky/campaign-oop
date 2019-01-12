<?php

$id_campaign = $_GET['id'];
$forms = Campaign::read($id_campaign);

if(isset($_POST) & !empty($_POST)){
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$score = $_POST['score'];
	$id = $POST['id'];

	$res = Campaign::update($question, $answer, $score, $id);
	if($res){

		echo "Succès";
	}else{
		echo "Echec";
	}
}

