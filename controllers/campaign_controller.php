<?php

$id_campaign = $_GET['id'];
if(isset($_POST) & !empty($_POST)){
    $question = str_secur($_POST['question']); 
    $answer = str_secur($_POST['answer']);
    $score = str_secur($_POST['score']);
   $res = Campaign::create($question, $answer, $score, $id_campaign);

   if($res){
        echo "<div class='alert alert-success'>La question vient d�tre cr�e</div><br/>";
   }else{
        echo "<div class='alert alert-danger'>La question n'est pas cr�e</div><br/>";
   }
}
	$forms = Campaign::read($id_campaign);

