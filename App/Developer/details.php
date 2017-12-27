
<?php
include_once '../../Services/db_services.php';
$id = $_GET['id'];
$project = getOneProject($id);
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
                <legend><b>Project Details</b></legend>
                <br/>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="100"></td>
                        <td width="10"></td>
                        <td width="230"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Project Code</td>
                        <td>:</td>
                        <td><?php echo $project['Code-Name']?></td>
                    </tr>
                    <tr><td colspan="3"><hr /></td></tr>
                    <tr>
                        <td>Project Name</td>
                        <td>:</td>
                        <td><?php echo $project['Name']?></td>
                    </tr>
                    <tr><td colspan="3"><hr /></td></tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td><?php echo $project['Description']?></td>
                    </tr>
                    <tr><td colspan="3"><hr/></td></tr>
                    <tr>
                        <td>Possible Start Date</td>
                        <td>:</td>
                        <td><?php echo $project['Start-Date']?></td>
                    </tr>
                    <tr><td colspan="3"><hr/></td></tr>
                    <tr>
                        <td>Possible End Date</td>
                        <td>:</td>
                        <td><?php echo $project['End-Date']?></td>
                    </tr>
                    <tr><td colspan="3"><hr/></td></tr>
                    <tr>
                        <td>Duration</td>
                        <td>:</td>
                        <td><?php echo $project['Duration'].' Days'?></td>
                    </tr>
                    <tr><td colspan="3"><hr/></td></tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><?php echo $project['Status']?></td>
                    </tr>
                </table>
                <hr/>
                <a href="editProject.php?id=<?php echo $id?>">Edit</a>
                <a href="deleteProject.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
                <a href="viewProject.php">View Project</a>
                <br/><br/>
            </fieldset>
        </td>

    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html>