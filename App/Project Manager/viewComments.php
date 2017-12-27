<?php
session_start();
include_once '../../Services/db_services.php';

$id = $_GET['id'];


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
                <legend><b>VIEW COMMENTS</b></legend>
                <br/>
                <form>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="100"></td>
                            <td width="10"></td>
                            <td width="230"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Project</td>
                            <td>:</td>
                            <td><input name="name" type="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>task</td>
                            <td>:</td>
                            <td><input name="name" type="text" value=""></td>
                            <td></td>
                        </tr>
          <table width="100%" cellspacing="0" border="1" cellpadding="5">
              <br/><br/>
                <tr>
                    <th align="left">COMMENT</th>
                    <th align="left">BY</th>
                    <th align="left">DATE TIME</th>
                    <th colspan="3"></th>
                </tr>
                <tr>
                    <td>Bob Marsh</td>
                    <td>bob@aiub.edu</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>Lana Lane</td>
                    <td>lana@live.com</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>Clark Kent</td>
                    <td>kent@gmail.com</td>
                    <td>Blocked</td>
                </tr>
                    </table><br/>
                        <a href="addComment.php">Add Comments</a>
                        <br/><br/>
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