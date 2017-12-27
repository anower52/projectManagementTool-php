<?php
	$host='localhost';
	$user_name='root';
	$pass='';
	$db_name='projectmanagement';
	
	$conn =  @mysqli_connect($host,$user_name,$pass,$db_name) or die("Please check your Username or Password or selected Database's name");

    $host='localhost';
    $user_name='root';
    $pass='';
    $dbname="projectmanagement";
    $port=3306;

function executeSQL($sql){
    global $host, $user_name, $pass, $dbname, $port;

    $link=mysqli_connect($host, $user_name, $pass, $dbname, $port);
    $result = mysqli_query($link, $sql);
    mysqli_close($link);

    return $result;
}
?>