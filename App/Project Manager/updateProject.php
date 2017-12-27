<?php
session_start();
include_once '../../Services/db_services.php';

$result = editProject($_POST);

if ($result){
    $_SESSION['Message'] = 'Project updated successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to update project.';
}
header('Location:details.php?id='.$_POST['id']);