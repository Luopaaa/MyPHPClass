<?php

session_start();
$adminid = $_SESSION["id"];

include('link2.php');
include('header.php');
$adminid = $_SESSION["id"];

date_default_timezone_set("Asia/Taipei");

$number = $_POST["numbers"];
$year = date('Y');
$month = date('m');
$day = date('d');

$getAllrowsSQL = "SELECT COUNT(*) FROM userdata";

//echo $getAllrowsSQL."<br>";

$runSQL = mysql_query($getAllrowsSQL);
$Allrows = mysql_fetch_assoc($runSQL);

//echo $Allrows["COUNT(*)"]."<br>";

$nowrow = $Allrows["COUNT(*)"] + 1;
//echo $nowrow."<br>";

$quantity_test = 0;

foreach( $_POST["no"] as $i )
{
	$getProductSQL = "SELECT `quantity` FROM `product` WHERE `no` =" . $i;
		
	$sendToSQL = mysql_query($getProductSQL);
	
	//echo $sendToSQL;
	
	$result = mysql_fetch_array($sendToSQL);
	
	//echo mysql_errno();
	
	//echo $result["quantity"];
	$currentQuantity = $result["quantity"] - $number[$i-1];

	if ($currentQuantity < 0)
	{ 
		$quantity_test = $quantity_test +1;
	}
}

if ($quantity_test == 0)
{
	foreach( $_POST["no"] as $i )
	{
		$setSQL = "INSERT INTO `orderno`(`userid`, `adminid`, `productid`, `orderNum`, `orderYear`, `orderMonth`, `orderDay`) VALUES (" . $nowrow . "," . $adminid . ",". $i . "," . $number[$i-1] . "," . $year . "," . $month . ", " . $day. ")";
		//echo $setSQL."<br>";
		
		mysql_query($setSQL);
		
		$getProductSQL = "SELECT `quantity` FROM `product` WHERE `no` =" . $i;
			
		$sendToSQL = mysql_query($getProductSQL);
		
		//echo $sendToSQL;
		
		$result = mysql_fetch_array($sendToSQL);
		
		//echo mysql_errno();
		
		//echo $result["quantity"];
		$currentQuantity = $result["quantity"] - $number[$i-1];
		
		$setProductSQL = "UPDATE `product` SET `quantity`=" . $currentQuantity . " WHERE `no` =" . $i;
		//echo $setProductSQL;
		
		mysql_query($setProductSQL);	
	}

	$url = "inputuserdata_front.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}

else
{
echo "<center>";
echo "機位不足！";
echo "<a href=\"ShowAllData.php\" class=\"btn\" >返回修改</a>";
echo "</center>";
}


?>