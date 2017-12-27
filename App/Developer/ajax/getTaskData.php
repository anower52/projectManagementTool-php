<?php
include_once '../../../Services/db_services.php';

$projectId = $_POST['projectId'];
$tasks = getAllProjectTasks($projectId);

//$usersData = getAllProjectUsersData($tasks);

echo json_encode($tasks);