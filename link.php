<?php


session_start();
$adminuser = $_SESSION["user"];
$adminpass = $_SESSION["pass"];
$adminid = $_SESSION["id"];
$adminpri = $_SESSION["pri"];

include('link2.php');

$setSQL = "SELECT COUNT(*) FROM `admin` WHERE `id` = " . $adminid;
$result = mysql_query($setSQL);
$countresult = mysql_fetch_assoc($result);
$count = $countresult["COUNT(*)"];

if( $count != 1 )
{
	$url = "login.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}
	
?>