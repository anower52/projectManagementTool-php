<?php
session_start();
include_once '../../Services/db_services.php';
$id=$_GET['id'];
$result = removeProject($id);

if ($result){
    $_SESSION['Message'] = 'Project Deleted Successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to delete project.';
}
header('Location:viewProject.php');