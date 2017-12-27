<?php
include_once '../../Services/db_services.php';
$allProjects = getAllProjects();
//$allUsers = getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

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
                <legend><b>COMMENT</b></legend>
                <br/>
                <form action="commentStore.php" method="post">
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
                                <select name="projectId" id="projectId">
                                    <option></option>
                                    <?php
                                    foreach ($allProjects as $project){
                                        ?>
                                        <option value="<?php echo $project['Id']?>"><?php echo $project['Name']?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Select Task</td>
                            <td>:</td>
                            <td>
                                <select name="taskId" id="taskId">
                                    <option></option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Comment</td>
                            <td>:</td>
                            <td><input name="comment" type="text" value=""></td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="SAVE">
                    <a href="viewComments.php">Back to All Comments</a>
                </form>
            </fieldset>
        </td>
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>

<script type="text/javascript">

    $( function() {
        $( "#due_date" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );

    $('#projectId').on('change', function(){
        projectId = $('#projectId option:selected').val(); // the dropdown item selected value
        console.log(projectId);
        $.ajax({
            type :'POST',
            dataType:'json',
            data : {projectId : projectId},
            url : 'ajax/getTaskData.php',
            success : function(result){
                console.log(result);
                $('#taskId').html('');
                $('#taskId').append('<option></option>');
                result.forEach(function(t) {
                    // $('#item') refers to the EMPTY select list
                    // the .append means add to the object refered to above
                    $('#taskId').append('<option value="'+t['Id']+'">'+t['Description']+'</option>');
                });
            }
        })

    });

</script>
</html