<?php
if(isset($_SESSION['username'])){
$id_user = $_GET['id'];
$title = Home::read($id_user);
$score = Result::read();
}else{
    header('location:log');
}

