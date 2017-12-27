<?php
session_start();
include_once '../../Services/db_services.php';
$projectStatus = checkProject($_POST['projectId'],$_POST['userId']);
if (empty($projectStatus['Project-Id'])){
$result = assignUser($_POST);

if ($result){
    $_SESSION['Message'] = 'Project assigned successfully.';
} else{
    $_SESSION['Message'] = 'Something wrong to assign project.';
}

} else{
    $_SESSION['Message'] = 'This user is already assigned. ';
}
header('Location:viewProject.php');