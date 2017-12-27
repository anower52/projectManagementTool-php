<?php
//print_r($_POST);
session_start();
include_once '../../Services/db_services.php';
$_POST['GUser_Id']=$_SESSION['user-id'];

$result = addTaskStore($_POST);

if ($result){
    $_SESSION['Message'] = 'Task added successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to add Task.';
}
header('Location:viewTask.php');