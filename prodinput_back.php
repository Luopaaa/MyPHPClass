<?php
include('link.php');

$company = $_POST["company"];
$date = $_POST["date"];
$time = $_POST["time"];
$quantity = $_POST["quantity"];

echo $company . "<br>";
echo $date . "<br>";
echo $time . "<br>";
echo $quantity . "<br>";

$getCountSQL = "SELECT COUNT(*) FROM product";
$getNoSQL = "SELECT `no` FROM product ORDER BY `product`.`no` ASC";

echo $getCountSQL . "<br>";
echo $getNoSQL . "<br>";


$resultCount = mysql_query($getCountSQL);
$resultNo = mysql_query($getNoSQL);

$getCount = mysql_fetch_assoc($resultCount);

$allDataNo = $getCount["COUNT(*)"];
$isInProd = array($allDataNo);

print_r($isInProd);

while ($row = mysql_fetch_assoc($resultNo))
{
	array_push($isInProd, $row["no"]);
}

print_r($isInProd);

$NewDataNo = $isInProd[$allDataNo] + 1;

echo "<br>" . $NewDataNo . "<br>";

$InsertNewDataSQL = "INSERT INTO `product` (`no`, `company`, `date`, `time`, `quantity`) VALUES ('" . $NewDataNo . "', '" . $company . "', '" .$date. "', '" . $time . "', '" . $quantity . "');";

echo $InsertNewDataSQL . "<br>";

mysql_query($InsertNewDataSQL);

mysql_close($link);

?>

<a href="prodinput_front.php">back</a>