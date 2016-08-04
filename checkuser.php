<?php

include('link2.php');

$user = $_POST["user"];
$pass = $_POST["pass"];


$setSQL = "SELECT * FROM `admin` WHERE `user` = '" .$user. "' and `pass` = '" .$pass. "'";

$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);

$pri = $row["pri"];

if( $pri != 0)
{
	session_set_cookie_params(600);
	session_start();
	$_SESSION["id"] = $row["id"];
	$_SESSION["user"]=$user;
	$_SESSION["pass"]=$pass;
	$_SESSION["pri"]=$pri;
	session_write_close();
	$url = "ShowAllData.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
	//echo "login in ok!!";
	
}
else
{
	$url = "login.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}


?>