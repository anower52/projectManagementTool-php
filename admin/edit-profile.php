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
                <legend><b>EDIT PROFILE</b></legend>
                <form>
                    <br/>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="100"></td>
                            <td width="10"></td>
                            <td width="230"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input name="name" type="text" value="Bob"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input name="email" type="text" value="bob@aiub.edu">
                                <abbr title="hint: sample@example.com"><b>i</b></abbr>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <input name="gender" type="radio" checked="checked">Male
                                <input name="gender" type="radio">Female
                                <input name="gender" type="radio">Other
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td valign="top">Date of Birth</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="dob" type="text" value="23/12/1999">
                                <font size="2"><i>(dd/mm/yyyy)</i></font>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr/>
                    <input type="submit" value="Save">
                    <a href="dashboard.php">Dashboard</a>
                </form>
            </fieldset>

    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html>