<?php
include_once '../../Services/db_services.php';
$id = $_GET['id'];
$project = getAllUser($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="../../asset/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="../../asset/jquery.js"></script>
    <script type="text/javascript" src="../../asset/jquery-ui.js"></script>
</head>
<body>
<table width="100%" frame="box">
    <tr>
        <?php
        session_start();
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
                <legend><b>USER | DETAIL</b></legend>
                <br/>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="100"></td>
                        <td width="10"></td>
                        <td width="230"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td>:</td>
                        <td><?php echo $project['UserName']?></td>
                    </tr>
                    <tr><td colspan="3"><hr /></td></tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php echo $project['Name']?></td>
                        <td width="30%" rowspan="7" align="center">
                        </td>
                    </tr>
                    <tr><td colspan="3"><hr /></td></tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $project['UserEmail']?></td>
                    </tr>
                    <tr><td colspan="3"><hr/></td></tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td><?php echo $project['Gender']?></td>
                    </tr>
                    <tr><td colspan="3"><hr/></td></tr>
                    <tr>
                        <td>Designation</td>
                        <td>:</td>
                        <td><?php echo $project['Designation']?></td>
                    </tr>
                    <tr><td colspan="3"><hr /></td></tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><?php echo $project['Status']?></td>
                    </tr>
                </table>
                <hr/>
                <a href="editUser.php?id=<?php echo $id?>">Edit</a>
                <a href="userDelete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
                <a href="all-user.php">Back to Search</a>
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