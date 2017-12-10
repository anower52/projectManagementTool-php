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
                <legend><b>PROFILE</b></legend>
                <form>
                    <br/>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="100"></td>
                            <td width="10"></td>
                            <td width="230"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>Bob</td>
                            <td rowspan="7" align="center">
                                <img width="128" src="user.png"/>
                                <br/>
                                <a href="picture.html">Change</a>
                            </td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>bob@aiub.edu</td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>Male</td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Department</td>
                            <td>:</td>
                            <td>Manager</td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>19/09/1998</td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Role</td>
                            <td>:</td>
                            <td>Admin</td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>Active</td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>User Since</td>
                            <td>:</td>
                            <td>15/09/2015</td>
                        </tr>
                    </table>
                    <hr/>
                    <a href="edit_profile.php">Edit</a>
                    <a href="dashboard.php">Dashboard</a>
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