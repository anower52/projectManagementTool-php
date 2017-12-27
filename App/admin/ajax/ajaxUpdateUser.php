<?php
session_start();
include_once '../../../Services/db_services.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $des = $_POST['designation'];
    $status = $_POST['status'];
    $project = editUser($id, $name, $email, $gender, $dob, $des, $status);
}
?>