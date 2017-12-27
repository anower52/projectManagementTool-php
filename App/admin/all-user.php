<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
if($_SESSION['username']== "admin")
{    
include("../../Services/db_connector.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        i = 0;
        $(document).ready(function(){
            $("#searchUser").keypress(function(){
                searchUser = $('#searchUser').val();
                console.log(searchUser);
                if (searchUser!='') {
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        data: {searchUser: searchUser},
                        url: 'ajax/getUserData.php',
                        success: function (result) {
                            console.log(result);
                            $('#searchTable').html('');
                            $('#searchTable').append('');
                            result.forEach(function (t) {
                                // $('#item') refers to the EMPTY select list
                                // the .append means add to the object refered to above
                                $('#searchTable').append('<tr><td><a href="userDetails.php?id=' + t['Id'] + '">' + t['UserName'] + '</a></td></tr>');
                            });

                        }

                    });
                }
        });
        });
    </script>
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
        <td align="center">
            <?php
            if (isset($_SESSION['Message']) && !empty($_SESSION['Message'])){
                echo '<h2 style="color: green;">'.$_SESSION['Message'].'</h2>';
                unset($_SESSION['Message']);
            }
            ?>
                       <fieldset>
                            <legend>
                                <b>USER | SEARCH</b>
                            </legend>
                            <input type="text" id="searchUser">
                            <a href="add-new-user.php">Add New</a><br>
                            <div>
                            <table width="162" border="1" cellpadding="5" id="searchTable">
                            </table>
                            

</div>
                        </fieldset>
                        <br/>
                        <table width="100%" cellspacing="0" border="1" cellpadding="5">
                            <tr>
                                <th align="left">NAME</th>
                                <th align="left">EMAIL</th>
                                <th align="left">DESIGNATION</th>
                                <th align="left">STATUS</th>
                                <th colspan="3">Option</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM user_info where permission=1";
                            $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?=$row["Name"]?></td>
                                <td><?=$row["UserEmail"]?></td>
                                <td><?=$row["Designation"]?></td>
                                <td><?=$row["Status"]?></td>
                                <td><a href="userDetails.php?id=<?=$row["Id"]?>">Details</a></td>
                                <td><a href="editUser.php?id=<?=$row["Id"]?>">Edit</td>
                                <td><a href="userDelete.php?id=<?=$row["Id"]?>"  onclick="return confirm('Are you sure you want to delete this project?');">Delete</td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "0 results";
                    }?>
                            </table>

                    </div>
                </div>
            </td>  
    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>

</html>
<?php
mysqli_close($conn);

}
}
else
{
    echo 'Access Denied';
}