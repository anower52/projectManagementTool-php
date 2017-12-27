<?php
session_start();
include_once '../../Services/db_services.php';

$result = editUser($_POST);

if ($result){
    $_SESSION['Message'] = 'User updated successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to update User.';
}
header('Location:all-user.php?id='.$_POST['id']);