<?php
session_start();
if($_SESSION['username']== "admin")
{    
include("../data/db_connector.php");

$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn, $sql);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table width="100%" frame="box">
    <tr>';
        include "template/top-bar.php";
    echo '</tr>
    <tr>';
        include "template/left-sidebar.php";
        echo'<td>
                       <fieldset>
                            <legend>
                                <b>USER | SEARCH</b>
                            </legend>
                            <input />
                            <input type="submit" value="Search" />
                            <a href="create.html">Create New</a>
                        </fieldset>
                        <br/>
                        <table width="100%" cellspacing="0" border="1" cellpadding="5">
                            <tr>
                                <th align="left">NAME</th>
                                <th align="left">EMAIL</th>
                                <th align="left">DESIGNATION</th>
                                <th align="left">STATUS</th>
                                <th colspan="3">Option</th>
                            </tr>';
                            
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<tr><td>'.$row["Name"].'</td><td>'.$row["UserEmail"].'</td>'
                                    . '<td>'.$row["Designation"].'</td><td>'.$row["Status"].'</td>'
                                    . '<td><a href="userDetails.php?id='.$row["Id"].'">Details</td><td><a href="editUser.php?id='.$row["Id"].'">Edit</td><td><a href="userDelete.php?id='.$row["Id"].'" style="color:red">Delete</td></tr>';
                        }
                    } else {
                        echo "0 results";
                    }
                        echo '
                            </table>

                    </div>
                </div>
            </td>  
    </tr>';
    include "template/footer.php";
echo '</table>
</body>
</html>';

mysqli_close($conn);

}
else
{
    header("location: /WebTechProject/accessDenied.php");
}