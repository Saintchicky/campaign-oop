<?php
if(isset($_SESSION['username'])){
$id_user = $_GET['id'];
$_SESSION['id_user'] = $id_user;
$title = Home::read_user($id_user);
$score = Result::read();
}else{
    header('location:log');
}

