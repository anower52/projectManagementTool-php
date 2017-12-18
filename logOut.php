<?php
	session_start();
	if(isset($_SESSION['username'])){
            session_destroy();
	    header("location: /WebTechProject/index.php");
	}
	else{
		echo '<HTML>
				<head>
				</head>
				
				<body>
				<br>
					<h3 align="center">Log In first</h3>
					
					<table align="center">
						<tr>
                                                    <td><form action="index.php" method="post">
                                                            <input type="submit" name="logIN2" value ="Log In " />
                                                    </form></td>
						</tr>
					</table>
				</body>
			</HTML>';
	}


