<?php
session_start();
include_once '../../Services/db_services.php';
$msg="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $nPass = $_POST['newPass'];
    $rPass = $_POST['reNewPass'];
    if($nPass==$rPass)
    {
        $id = $_SESSION['user-id'];
        $result = updatePassWord($id,$nPass);
        if($result)
        {
            $msg = "PassWord has been updated";
        }
        else{
            $msg = "Error happened".$id.$nPass;
        }
    }
    else{
        $msg = "Enter the same Password";
    }


}
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
                <legend><b>CHANGE PASSWORD</b></legend>
                <br/>
                <form action="" method="post">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="150"></td>
                            <td width="10"></td>
                            <td width="150"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td><font size="3" color="green">New Password</font></td>
                            <td>:</td>
                            <td><input type="password" name="newPass" /></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td><font size="3" color="red">Retype New Password</font></td>
                            <td>:</td>
                            <td><input type="password" name="reNewPass"/></td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="Update" />
                    <a href="dashboard.php">Dashboard</a>
                </form>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
<h3 align="center"><?php echo $msg ?></h3>
</body>
</html>
