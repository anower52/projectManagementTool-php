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
                <legend>
                    <b>ALL TASK</b>
                </legend><br/>
                <br/><br/>
            <table width="100%" cellspacing="0" border="1" cellpadding="5">
                <tr>
                    <th align="left">DESCRIPTION</th>
                    <th align="left">ASSIGN TO</th>
                    <th align="left">PRIORITY</th>
                    <th align="left">ASSIGN BY</th>
                    <th align="left">DUE DATE</th>
                    <th colspan="5"></th>
                </tr>
                <tr>
                    <td>Bob Marsh</td>
                    <td>bob@aiub.edu</td>
                    <td>Active</td>
                    <td>bob@aiub.edu</td>
                    <td>bob@aiub.edu</td>
                    <td width="40"><a href="detail.html">Detail</a></td>
                    <td width="30"><a href="edit.html">Edit</a></td>
                    <td width="45"><a href="delete.html">Delete</a></td>
                </tr>
                <tr>
                    <td>Lana Lane</td>
                    <td>lana@live.com</td>
                    <td>Pending</td>
                    <td>bob@aiub.edu</td>
                    <td>bob@aiub.edu</td>
                    <td width="40"><a href="detail.html">Detail</a></td>
                    <td width="30"><a href="edit.html">Edit</a></td>
                    <td width="45"><a href="delete.html">Delete</a></td>
                </tr>
                <tr>
                    <td>Clark Kent</td>
                    <td>kent@gmail.com</td>
                    <td>Blocked</td>
                    <td>bob@aiub.edu</td>
                    <td>bob@aiub.edu</td>
                    <td width="40"><a href="detail.html">Detail</a></td>
                    <td width="30"><a href="edit.html">Edit</a></td>
                    <td width="45"><a href="delete.html">Delete</a></td>
                </tr>
            </table><br/>
                <a href="addTask.php">Add Task</a>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html