<?php
//print_r($_POST);
session_start();
include_once '../../Services/db_services.php';

$result = addProject($_POST);

if ($result){
    $_SESSION['Message'] = 'Project added successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to add project.';
}
header('Location:viewProject.php');