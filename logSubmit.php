<?php
session_start();
include("Services/db_connector.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myusername =$_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT * FROM user_info WHERE UserName = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);
//    echo $sql;
//    echo $count;
//    die();

    if($count == 1) {

        //session_start();
        $_SESSION['user-id']=$row['Id'];
        $_SESSION['username']= $row['UserName'];
        $_SESSION['userType'] = $row["userType"];
        $_SESSION['Name'] = $row["Name"];
        header('Location: /webtechproject/App/'.$row["userType"]);
//        echo('Location: /webtechproject/App/'.$row["userType"]);
    }

    else{

        $_SESSION['Message'] = 'User Name Or Password Invalid.';
        header('Location:index.php');
    }

}


?>
