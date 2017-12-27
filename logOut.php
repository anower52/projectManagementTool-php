<?php
	session_start();
unset($_SESSION['username']);
unset($_SESSION['userType']);
unset($_SESSION['user-id']);
session_destroy();
header("location: /WebTechProject/index.php");


