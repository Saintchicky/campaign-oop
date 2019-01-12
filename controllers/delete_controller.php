<?php

$id = $_GET['id'];
$id_campaign = $_POST['id_campaign'];

$res = Campaign::delete($id);
if($res){
	header('location:campaign?='.$id_campaign'');
}