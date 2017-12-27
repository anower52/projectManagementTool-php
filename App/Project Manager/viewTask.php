<?php
include_once '../../Services/db_services.php';
$allTask = getAllTask();
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
        <td>
            <?php
            if (isset($_SESSION['Message']) && !empty($_SESSION['Message'])){
                echo '<h2 style="color: green;">'.$_SESSION['Message'].'</h2>';
                unset($_SESSION['Message']);
            }
            ?>
            <fieldset>
                <legend>
                    <b>ALL TASK</b>
                </legend><br/>
                <br/><br/>
            <table width="100%" cellspacing="0" border="1" cellpadding="5">
                <tr>
                    <th align="left">TASK NAME</th>
                    <th align="left">ASSIGNED TO</th>
                    <th align="left">PRIORITY</th>
                    <th align="left">ASSIGNED BY</th>
                    <th align="left">DUE DATE</th>
                    <th align="left">Option</th>

                </tr>
                <tr>
                    <?php
                    foreach ($allTask as $task){
                        $assignUserData = getTaskUser($task['Id']);
                        $assignedBy = getTaskUserDetails($task['GUser-Id']);
                        $assignedTo = getTaskUserDetails($task['RUser-Id']);

                        ?>
                <tr>
                    <td><?php echo $task['Description']?></td>
                    <td><?php echo $assignedTo['Name']?></td>
                    <td><?php echo $task['Priority']?></td>
                    <td><?php echo $assignedBy['Name']?></td>
                    <td><?php echo $task['Due-Date']?></td>
                    <td><a href="viewComments.php?id=<?=$task['Id']?>">Comments</a></td>
                </tr>
<?php }?>
            </table><br/>
                <a href="addTask.php">Add Task</a>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html>