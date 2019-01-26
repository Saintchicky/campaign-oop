<?php
if(isset($_SESSION['username'])){
$title = Home::read();
$score = Result::read();
}else{
    header('location:log');
}

