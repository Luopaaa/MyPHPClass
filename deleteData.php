<?php

 include('link.php');

 foreach( $_POST["no"] as $item )
{
	$delSQL = "DELETE FROM `product` WHERE `no`='" . $item . "'";
	//echo $delSQL;
  	mysql_query($delSQL);
}

mysql_close($link);

$url = "ShowAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";
?>