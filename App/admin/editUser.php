<?php
session_start();
include_once '../../Services/db_services.php';

$id = $_GET['id'];

if (isset($_GET['id'])) {
    $sql = "select * from user_info WHERE Id=".$_GET['id'];
    $res = executeSQL($sql);
    $project = mysqli_fetch_assoc($res);

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
                    <legend><b>USER | EDIT</b></legend>
                    <br/>
                    <form action="updateUser.php" method="post" role="form">
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td width="100"></td>
                                <td width="10"></td>
                                <td width="230"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>:</td>
                                <td><?php echo $project['UserName'] ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input name="name" type="text" value="<?php echo $project['Name'] ?>"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <?php echo $project['UserEmail'] ?>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td>
                                    <?php echo $project['Gender'] ?>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">Date of Birth</td>
                                <td valign="top">:</td>
                                <td>
                                    <input name="dob" type="text" value="<?php echo $project['DoB'] ?>"">
                                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>:</td>
                                <td>
                                    <select name="designation">
                                        <option value="<?php echo $project['Designation'] ?>"><?php echo $project['Designation'] ?></option>
                                        <option value="ProjectManager" <?php if ($project['Designation'] == 'Project Manager') echo 'checked' ?>>
                                            Project Manager
                                        </option>
                                        <option value="Developer" <?php if ($project['Designation'] == 'Developer') echo 'checked' ?>>
                                            Developer
                                        </option>
                                        <option value="QA" <?php if ($project['Designation'] == 'QA') echo 'checked' ?>>
                                            QA
                                        </option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    <select name="status">
                                        <option value="<?php echo $project['Status'] ?>"><?php echo $project['Status'] ?></option>
                                        <option value="Active" <?php if ($project['Status'] == 'Active') echo 'checked' ?>>
                                            Active
                                        </option>
                                        <option value="Pending" <?php if ($project['Status'] == 'Pending') echo 'checked' ?>>
                                            Pending
                                        </option>
                                        <option value="Blocked" <?php if ($project['Status'] == 'Blocked') echo 'checked' ?>>
                                            Blocked
                                        </option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                        <hr/>
                        <input type="submit" value="Save">
                        <a href="all-user.php">Back To All User</a>
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
    <?php
}

/*elseif($_SERVER["REQUEST_METHOD"=="POST"])
{
    try{
        $na = $_POST['name'];
        $dob= $_POST['dob'];
        $desi = $_POST['designation'];
        $sta = $_POST['status'];
        if(editUser($id,$na,$dob,$desi,$sta))
        {

        }
    }
    catch (mysqli_sql_exception $e)
    {

    }
}*/