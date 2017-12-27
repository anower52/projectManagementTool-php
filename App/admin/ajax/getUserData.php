<?php
include_once '../../../Services/db_services.php';

$searchUser = $_POST['searchUser'];
$users = getSearchUsers($searchUser);

//$usersData = getAllProjectUsersData($users);

echo json_encode($users);