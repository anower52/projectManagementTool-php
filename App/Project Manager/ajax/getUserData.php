<?php
include_once '../../../Services/db_services.php';

$projectId = $_POST['projectId'];
$users = getAllProjectUsers($projectId);

$usersData = getAllProjectUsersData($users);

echo json_encode($usersData);