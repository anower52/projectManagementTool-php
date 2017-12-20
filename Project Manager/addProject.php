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
                <legend><b>ADD PROJECT</b></legend>
                <br/>
                <form>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="100"></td>
                            <td width="10"></td>
                            <td width="230"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Project Name</td>
                            <td>:</td>
                            <td><input name="username" type="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Code Name</td>
                            <td>:</td>
                            <td><input name="name" type="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td><input name="name" type="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td valign="top">Possible Start Date</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="psd" type="date" value="">
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td valign="top">Possible End Date</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="ped" type="date" value="">
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Duration</td>
                            <td>:</td>
                            <td><input name="name" type="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Upload File</td>
                            <td>:</td>
                            <td><input type="file"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <input name="not-started" type="radio">Not Started<br/>
                                <input name="started" type="radio">Started<br/>
                                <input name="completed" type="radio">Completed<br/>
                                <input name="canceled" type="radio">Canceled<br/>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="ADD">
                    <a href="search.html">Back to Search</a>
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