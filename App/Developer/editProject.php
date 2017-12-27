<?php
include_once '../../Services/db_services.php';
$id = $_GET['id'];
$project = getOneProject($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Tech Project</title>

    <link rel="stylesheet" type="text/css" href="../../asset/jquery-ui.css">
    <script type="text/javascript" src="../../asset/jquery.js"></script>
    <script type="text/javascript" src="../../asset/jquery-ui.js"></script>
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
                <legend><b>EDIT PROJECT</b></legend>
                <br/>
                <form action="updateProject.php" method="post">
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
                            <td><input name="projectName" type="text" value="<?php echo $project['Name'] ?>"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Code Name</td>
                            <td>:</td>
                            <td><input name="codeName" type="text" value="<?php echo $project['Code-Name'] ?>"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td>
                                <textarea cols="30" role="5" name="description"><?php echo $project['Description'] ?></textarea>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td valign="top">Possible Start Date</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="psd" type="text" value="<?php echo $project['Start-Date'] ?>" id="psd" onchange="dateDifference()">
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td valign="top">Possible End Date</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="ped" id="ped" type="text" value="<?php echo $project['End-Date'] ?>" onchange="dateDifference()">
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Duration(Days)</td>
                            <td>:</td>
                            <td><input name="duration" type="text" value="<?php echo $project['Duration'] ?>" id="duration"></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="status" value="Not Started" <?php if ($project['Status'] == 'Not Started') echo 'checked'?>>Not Started<br>
                                <input type="radio" name="status" value="Started" <?php if ($project['Status'] == 'Started') echo 'checked'?>>Started<br>
                                <input type="radio" name="status" value="Completed" <?php if ($project['Status'] == 'Completed') echo 'checked'?>>Completed<br>
                                <input type="radio" name="status" value="Cancelled" <?php if ($project['Status'] == 'Cancelled') echo 'checked'?>>Cancelled<br>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" value="ADD">
                    <a href="viewProject.php">Back to All Project</a>
                </form>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
<script>
    function dateDifference() {
        var psd = $('#psd').val();
        var ped = $('#ped').val();
        var date1 = new Date(psd);
        var date2 = new Date(ped);
        var diffDays = date2.getDate() - date1.getDate();
        if (psd!='' && ped!=''){
            $('#duration').val(diffDays);
        }
    }

    $( function() {
        $( "#psd" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
    $( function() {
        $( "#ped" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
</script>
</html>