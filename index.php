<?php 
    session_start();

    if(isset($_SESSION['username'])){
        $userType = $_SESSION['userType'];
		echo '<HTML>
				<head>
				</head>
				
				<body>
				<br>
					<h1 align="center">Project Management Tool</h1>
										<hr><br><br>
					<h3 align="center">You Have already Loged In :) :)</h3>
					
					<table align="center">
						<tr>
							<td><form action="'.$userType.'/index.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td>
						</tr>
					</table>
				</body>
			</HTML>';
    }
    else
    {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>Login</title>
        </head>
        <body>
        
        <table width="400" frame="box" cellpadding="0" cellspacing="0" align="center">
        
            <tr>
                <td></td>
                <td width="100%" align="center">
                    <br><br><br>
                    <h1>Project Management Tool</h1>
                    <h4>Login</h4>
                    <form action="" method="post">
                        <div>
                            <label>Username</label><br>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <label>Password</label><br>
                            <input type="password" name="password">
                        </div>
                        <br>
                        <div>
                            <label><input type="checkbox" name="password">Remember</label><br>
                        </div>
                        <br><br>
                        <div>
                            <input type="submit" value="Login">
                        </div>
                    </form>
                    <br><br><br>
                </td>
                <td></td>
            </tr>
        </table>
        
        </body>
        </html>';
    }

    include("data/db_connector.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $myusername =$_POST['username'];
        $mypassword = $_POST['password']; 
        
        $sql = "SELECT * FROM log_in WHERE	UserName = '$myusername' and Password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
           
            session_start();
            $_SESSION['username']= $myusername;

            if($row["UserType"]=="Admin")
            {
                $_SESSION['userType'] = "Admin";
                header("location: admin/index.php");
            }
            elseif($row["UserType"]=="Project Manager")
            {
                $_SESSION['userType'] = "Project Manager";
                header("location: Project Manager/index.php");
            }
            elseif($row["UserType"]=="Developer")
            {
                $_SESSION['userType'] = "Developer";
                header("location: Developer/index.php");
            }
         
        }
        
        else{
          
         $error = "Your Login Name or Password is invalid";
         echo '<h3 align="center" style="color:red">'.$error.'</h3>';
        }
        
    }
