<?php
if(isset($_SESSION['username'])){
    $id_campaign = $_GET['id'];
    $forms = Campaign::read($id_campaign);
}else{
    header('location:log');
}



