<?php


if(isset($_POST) & !empty($_POST)){
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $score = $_POST['score'];
    $id = $_POST['id'];

    $res = Campaign::update($question, $answer, $score, $id);
    if($res){
        echo "Succès";
    }else{
        echo "Echec";
    }
}