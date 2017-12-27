
<?php
include("db_connector.php");

function addProject($project=''){
    $sql = "INSERT INTO `project-info`(`Name`, `Code-Name`,`Start-Date`,`End-Date`,`Duration`,`Description`,`Status`) VALUES( '$project[projectName]', '$project[codeName]', '$project[psd]', '$project[ped]', '$project[duration]', '$project[description]', '$project[status]')";
    $result = executeSQL($sql);
    return $result;
}


function removeProject($id){
    $sql = "DELETE FROM `project-info` WHERE Id=$id";
    $result = executeSQL($sql);
    return $result;
}

function getAllProjects(){
    $sql = "SELECT * FROM `project-info`";
    $result = executeSQL($sql);

    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }

    return $projects;
}

function getOneProject($id = ''){
    $sql = "SELECT * FROM `project-info` WHERE Id = ".$id;
    $result = executeSQL($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getAllUsers(){
    $sql = "SELECT * FROM `user_info`";
    $result = executeSQL($sql);

    $users = array();
    while($row = mysqli_fetch_assoc($result)){
        $users[] = $row;
    }

    return $users;
}

function checkProject($projectId,$userId){
    $sql = "SELECT * FROM `assign-project` WHERE `Project-Id`=$projectId AND `User-Id`=$userId";
    $result = executeSQL($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function assignUser($data=''){
    $sql = "INSERT INTO `assign-project`(`Project-Id`,`User-Id`) VALUES( $data[projectId], $data[userId])";
//   echo $sql;
//   die();
    $result = executeSQL($sql);
    return $result;
}

function getAllProjectUsers($id = ''){
    $sql = "SELECT * FROM `assign-project` WHERE `Project-Id` = ".$id;
//    return $sql;
    $result = executeSQL($sql);
//    return $result;
    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }
    return $projects;
}


function getAllProjectUsersData($users=''){
//    return $users;
    $sql = "SELECT * FROM `user_info` WHERE";
    for ($i=0;$i<count($users);$i++) {
        if ($i==0){
            $sql.=' id='.$users[$i]['User-Id'];
        }else{
            $sql.=' OR id='.$users[$i]['User-Id'];
        }
    }
//    return $sql;
    $result = executeSQL($sql);

    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }

    return $projects;
}

function addTaskStore($project=''){
    $sql = "INSERT INTO `task-assign`(`Project-Id`,`GUser-Id`,`RUser-Id`,`Description`,`Due-Date`,`Priority`) VALUES( '$project[projectId]','$project[GUser_Id]', '$project[userId]', '$project[description]','$project[due_date]', '$project[priority]')";
    $result = executeSQL($sql);
    return $result;
}
function getAllTask(){
    $sql = "SELECT * FROM `task-assign`";
    $result = executeSQL($sql);

    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }

    return $projects;
}

function getSearchUsers($username = ''){
    $sql = "SELECT * FROM `user_info` WHERE `UserName` LIKE '%".$username."%'";
//    return $sql;
    $result = executeSQL($sql);
    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }
    return $projects;
}

function removeUser($id){
    $sql = "DELETE FROM `user_info` WHERE Id=$id";
    $result = executeSQL($sql);
    return $result;
}

function getAllUser($id = ''){
    $sql = "SELECT * FROM `user_info` WHERE Id = ".$id;
    $result = executeSQL($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function editProject($project){
    $sql = "UPDATE `project-info` SET `Code-Name`='$project[codeName]', `Name`='$project[projectName]', `Start-Date`='$project[psd]', `End-Date`='$project[ped]', `Duration`='$project[duration]', `Description`='$project[description]', `Status`='$project[status]' WHERE Id=$project[id]";
    $result = executeSQL($sql);
    return $result;
}

function editUser($project){
    $sql = "UPDATE `user_info` SET `Name`='$project[name]', `DoB`='$project[dob]', `Designation`='$project[designation]', `Status`='$project[status]' WHERE Id = $project[id]";
    $result = executeSQL($sql);
    return $result;
}

function updatePassWord($id,$pass)
{
    $sql = "UPDATE `user_info` SET `Password`='".$pass."' WHERE `Id` =".$id;
           // UPDATE `user_info` SET `Password` = '123' WHERE `Id` = 6;
    $result = executeSQL($sql);
    return $result;
}

function viewTaskAssignBy($id){
    $sql = "SELECT Name FROM `user_info` WHERE `Id`=".$id;
//    return $sql;
    $result = executeSQL($sql);
//    $row = mysqli_fetch_assoc($result);
    return $result;
}

function getAllProjectUsersName($ids=''){
    $sql = "SELECT * FROM `user_info` WHERE Id IN ($ids)";
    $result = executeSQL($sql);

    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }

    return $projects;
}

function getTaskUser($id = ''){
    $sql = "SELECT * FROM `task-assign` WHERE Id = ".$id;
    $result = executeSQL($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getTaskUserDetails($id = ''){
    $sql = "SELECT * FROM `user_info` WHERE Id = ".$id;
    $result = executeSQL($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getAllProjectTasks($id = ''){
    $sql = "SELECT * FROM `task-assign` WHERE `Project-Id` = ".$id;
//    return $sql;
    $result = executeSQL($sql);
//    return $result;
    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }
    return $projects;
}

function commentStore($comment=''){
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `comments`(`project_id`,`task_id`,`commented_by`,`comment`,`date`) VALUES( '$comment[projectId]','$comment[taskId]', '$comment[commentedBy]', '$comment[comment]','$date')";
    $result = executeSQL($sql);
    return $result;
}

function getAllComment(){
    $sql = "SELECT * FROM `comments` ORDER BY Id DESC";
//    return $sql;
    $result = executeSQL($sql);

    $projects = array();
    while($row = mysqli_fetch_assoc($result)){
        $projects[] = $row;
    }

    return $projects;
}
