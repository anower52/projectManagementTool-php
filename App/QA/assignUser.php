<?php
include_once '../../Services/db_services.php';
$allProjects = getAllProjects();
$allUsers = getAllUsers();
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
            <fieldset>
                <legend><b>SELECT USER</b></legend>
                <br/>
                <form action="assignUserStore.php" method="post">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="100"></td>
                            <td width="10"></td>
                            <td width="230"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Select Project</td>
                            <td>:</td>
                            <td>
                                <select name="projectId">
                                    <option></option>
                                    <?php
                                    foreach ($allProjects as $project){
                                    ?>
                                    <option value="<?php echo $project['Id']?>"><?php echo $project['Name']?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Select Resource Person</td>
                            <td>:</td>
                            <td>
                                <select name="userId">
                                    <option></option>
                                    <?php
                                    foreach ($allUsers as $user){
                                    ?>
                                    <option value="<?php echo $user['Id']?>"><?php echo $user['Name']?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="ADD">
                    <a href="viewProject.php">Back to View Project</a>
                </form>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html>