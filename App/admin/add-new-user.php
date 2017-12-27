<?php 
session_start();
    echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table width="100%" frame="box">
    <tr>';
        include "template/top-bar.php"  ;     
    echo '</tr>
    <tr>';
        include "template/left-sidebar.php"  ;     
        echo '<td>
            <fieldset>
                <legend><b>USER | CREATE</b></legend>
                <br/>
                <form action="" method="post">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="100"></td>
                            <td width="10"></td>
                            <td width="230"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input name="name" type="text" required></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input name="username" type="text" required></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input name="passwordText" type="password" maxlength="6" required></td>
                            <td></td>
                        </tr>
                        
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input name="email" type="text" required>
                                <abbr title="hint: sample@example.com"><b>i</b></abbr>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <input name="gender" type="radio" value="Male">Male
                                <input name="gender" type="radio" value="Female">Female
                                <input name="gender" type="radio" value="Other">Other
                            </td>
                            <td></td>
                        </tr>
                         <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td valign="top">Date of Birth</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="dob" type="date" required>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Designation</td>
                            <td>:</td>
                            <td>
                                <select name="designation">
                                    <option>Select</option>
                                    <option>Project Manager</option>
                                    <option>Developer</option>
                                    <option>QA</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr /></td></tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <select name="Status">
                                    <option>Select</option>
                                    <option >Active</option>
                                    <option>Pending</option>
                                    <option>Blocked</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="Save">
                    <a href="all-user.php">Back to All User</a>
                </form>
            </fieldset>
        </td>

    </tr>';
    include "template/footer.php";

    echo '</table>
</body>
</html>';
    
    include("../../Services/db_connector.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        try
        {
            $na = $_POST['name'];
            $email = $_POST['email'];
            $un = $_POST['username'];
            $pass = $_POST['passwordText'];
            $gen = $_POST['gender'];
            $dob = $_POST['dob'];
            $desig = $_POST['designation'];
            $sta = $_POST['Status'];

            if(preg_match('/^[a-zA-Z ]+$/', $na))
            {
                if(preg_match('/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/', $email))
                {
                    if(preg_match('$^[a-zA-Z0-9_.-]*$', $un))
                    {
                        
                        if($gen!=NULL)
                        {
                            //echo $na.'<br>'.$email.'<br>'.$un.'<br>'.$gen.'<br>'.$dob.'<br>'.$desig.'<br>'.$sta;
                            $sqlQuery = "INSERT INTO user_info(Name, UserEmail, UserName, Password, userType, DoB, Designation, Status, Gender, permission) VALUES ('".$na."','".$email."','".$un."','".$pass."','".$desig."','".$dob."','".$desig."','".$sta."','".$gen."',1)";

//                            echo $sqlQuery;
//                            die();

                            if (mysqli_query($conn ,$sqlQuery))
                            {
                                echo "User has been added";
                                mysqli_close($conn);
                                header('location:all-user.php');
                            }
                            else {
                                echo "Error.User hasn't been added";
                            }
                        }
                        else
                        {
                            echo 'Gender Error';
                        }
                    }
                    else
                    {
                        echo 'User Name Error';
                    }
                }
                else
                {
                    echo 'email Error';
                }
            }
            else
            {
                echo 'Error';
            }
        }
        catch (Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }