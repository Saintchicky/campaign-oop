<?php
if(isset($_SESSION['username'])){
    $id_campaign = $_GET['id'];
    $id_user = $_SESSION['id_user'];
    $forms = Campaign::read($id_campaign,$id_user);
}else{
    header('location:log');
}



