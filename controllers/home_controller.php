<?php
if(isset($_SESSION['username'])){
    $id_user = $_GET['id'];
    $_SESSION['id_user'] = $id_user;
    $title = Home::read_user($id_user);
    $score = Result::read($id_user);
}else{
    header('location:log');
}
if(isset($_POST['create_campaign']) & !empty($_POST)){
    $title = str_secur($_POST['title']);
    $res = Home::create($title,$id_user);
    if($res){
        header('location:home?id='.$id_user);
    }else{
        echo"Un problème est survenue";
    }
}

