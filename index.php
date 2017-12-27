<?php
session_start();

if(isset($_SESSION['username'])){
    $userType = $_SESSION['userType'];
    header('Location:App/'.$userType);
    ?>
    <?php
}
else {
    ?>
    <!DOCTYPE html>
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
                <form action="logSubmit.php" method="post">
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
    </html>
    <?php
}
