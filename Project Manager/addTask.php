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
                        <tr>
                            <td>Select Project</td>
                            <td>:</td>
                            <td>
                                <select>
                                    <option></option>
                                    <option >Active</option>
                                    <option>Pending</option>
                                    <option>Blocked</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Assign To</td>
                            <td>:</td>
                            <td>
                                <select>
                                    <option></option>
                                    <option >Active</option>
                                    <option>Pending</option>
                                    <option>Blocked</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td><textarea rows="4" cols="50"></textarea></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td valign="top">Due Date</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="due-date" type="date" value="">
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Priority</td>
                            <td>:</td>
                            <td>
                                <select>
                                    <option></option>
                                    <option >High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="ADD">
                    <a href="viewTask.php">Back to Task</a>
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