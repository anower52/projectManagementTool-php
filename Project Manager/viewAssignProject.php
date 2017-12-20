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
                <legend><b>ASSIGN PROJECT</b></legend>
                <br/>
                <form>
                    <table width="100%" cellpadding="0" cellspacing="0">
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
                                <td width="40"><a href="detail.html">Detail</a></td>
                                <td width="30"><a href="edit.html">Edit</a></td>
                                <td width="45"><a href="delete.html">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Lana Lane</td>
                                <td>lana@live.com</td>
                                <td>Pending</td>
                                <td width="40"><a href="detail.html">Detail</a></td>
                                <td width="30"><a href="edit.html">Edit</a></td>
                                <td width="45"><a href="delete.html">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Clark Kent</td>
                                <td>kent@gmail.com</td>
                                <td>Blocked</td>
                                <td width="40"><a href="detail.html">Detail</a></td>
                                <td width="30"><a href="edit.html">Edit</a></td>
                                <td width="45"><a href="delete.html">Delete</a></td>
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
</htm