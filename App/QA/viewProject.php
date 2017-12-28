
<?php
include_once '../../Services/db_services.php';
//include_once '../../Services/db_connector.php';
$allProjects = getAllProjects();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table width="100%" frame="box">
    <tr>
        <?php
        include "template/top-bar.php";
        ?>
    </tr>
    <tr>
        <?php
        include "template/left-sidebar.php";
        ?>
        <td align="center">
            <?php
            if (isset($_SESSION['Message']) && !empty($_SESSION['Message'])){
                echo '<h2 style="color: green;">'.$_SESSION['Message'].'</h2>';
                unset($_SESSION['Message']);
            }
            ?>
            <fieldset>
                <legend>
                    <b>ALL PROJECT</b>
                </legend><br/>
                <br/><br/>
                <table width="100%" cellspacing="0" border="1" cellpadding="5">
                    <tr>
                        <th align="left">Project Code</th>
                        <th align="left">Project Name</th>
                        <th align="left">Duration</th>
                        <th align="left">STATUS</th>
                        <th align="left">Assign To</th>
                        <th colspan="5">Actions</th>

                    </tr>
                    <?php
                    foreach ($allProjects as $project){
                        $users = getAllProjectUsers($project['Id']);
//                        $implodedUserId = implode(',',$users['User-Id']);
                        $userIds='';
                        foreach ($users as $user){
                            $userIds .= $user['User-Id'].',';
                        }
                        $implodedIds = rtrim($userIds, ",");

                        $userNameData = getAllProjectUsersName($implodedIds);

                        $userNames='';
                        foreach ($userNameData as $userName){
                            $userNames .= $userName['Name'].',';
                        }
                        $implodedNames = rtrim($userNames, ",");
                    ?>
                    <tr>
                        <td><?php echo $project['Code-Name']?></td>
                        <td><?php echo $project['Name']?></td>
                        <td><?php echo $project['Duration']?></td>
                        <td><?php echo $project['Status']?></td>
                        <td>
                        <?php
                       echo $implodedNames;
                        ?>
                        </td>
                        <td width="40"><a href="details.php?id=<?php echo $project['Id']?>">Details</a></td>
                         
                    </tr>
                   <?php } ?>
                </table><br/>
                <a href="addProject.php">Add Project</a>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html