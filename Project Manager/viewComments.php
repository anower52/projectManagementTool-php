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
                <legend><b>ADD TASK</b></legend>
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
                    </table>
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