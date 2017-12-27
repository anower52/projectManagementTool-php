<?php
session_start();
include '../../Services/db_services.php';
$id=$_GET['id'];
$result = removeUser($id);

if ($result == true){
    $_SESSION['Message'] = 'User Deleted Successfully.';
    header('Location:all-user.php');
} else{
    $_SESSION['Message'] = 'Something wrong to delete User.';
    header('Location:all-user.php');
}
