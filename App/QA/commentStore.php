<?php
//print_r($_POST);
session_start();
include_once '../../Services/db_services.php';
$_POST['commentedBy']=$_SESSION['Name'];
//print_r($_POST);
//die();
$result = commentStore($_POST);

if ($result){
    $_SESSION['Message'] = 'Comment added successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to add Comment.';
}
header('Location:viewComments.php');