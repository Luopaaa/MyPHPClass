<?php
include('link.php');

$company = $_POST["company"];
$date = $_POST["date"];
$time = $_POST["time"];
$timeAddSecond = $time . ':00';
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$no = $_POST["no"];

$updateSQL = "UPDATE `product` SET `company` ='" . $company . "', `date` ='" . $date . "', `time` ='" . $timeAddSecond . "', `price` ='" . $price . "', `quantity` ='" . $quantity . "' WHERE `no` = '" . $no . "'";
echo $updateSQL;
mysql_query($updateSQL);

mysql_close($link);

$url = "ShowALLData_admin.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";
?>