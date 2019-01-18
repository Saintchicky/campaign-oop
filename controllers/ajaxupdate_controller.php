<?php

if(isset($_SESSION['username'])){
    if(isset($_POST) & !empty($_POST)){
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $score = $_POST['score'];
        $id = $_POST['id'];

        $res = Campaign::update($question, $answer, $score, $id);
        if($res){
        $_SESSION['update_question'] = "<div class='alert alert-success'>La question a été mise à jour</div>";
            echo "Succès";
        }else{
            echo "Echec";
        }
    }
}else{
    header('location:log');
}