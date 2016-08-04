<?php
include('link.php');
include("header.php");
error_reporting(E_ALL || ~E_NOTICE);

$adminid = $_SESSION["id"];


$reportSQL1 = "SELECT `userdata`.`name` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id` LEFT JOIN `admin` ON `orderno`.`adminid` WHERE `adminid`='".$adminid."' group by `userdata`.`name`";


//echo $reportSQL1."<br>";

$result = mysql_query($reportSQL1);

?>
<head>
</head>
<center><table border=1><tr>
<form action="MyTrip.php" method="post">
	<select name="username">
<?php

$check = 0;
	while( $row = mysql_fetch_array($result) )
	{
			echo "<option value=\"". $row[0] ."\">" . $row[0] . "</option>";
		    $check = $row[0];
	}
?>
	</select>
	<button type="submit" name="search" value="1">Search</button><br><br>
</form>
</tr>

<?php

$getresult = $_POST["search"];
//echo "result".$getresult;

if( $getresult )
{
	
$username = $_POST["username"];
//echo $username;
//echo $result;
$reportSQL1 = "SELECT `userdata`.`name`, `product`.`company`, `product`.`date`, `product`.`time`, `orderno`.`orderNum` FROM `orderno` LEFT JOIN `product` ON `orderno`.`productid` = `product`.`no` LEFT JOIN `userdata` ON `orderno`.`userid` = `userdata`.`id` WHERE `userdata`.`name` = '" .$username. "'";

$result = mysql_query($reportSQL1);

echo "<center><table border=3><tr>";
echo "<th>UserName</th><th>Company</th><th>Date</th><th>Time</th><th>Tickets</th>";
echo "</tr>";

while( $row = mysql_fetch_array($result) )
{
	//print_r($row);
	echo "<tr>";
	for( $i=0; $i<5; $i++ )
	{
		echo "<td width = \"22%\">" . $row[$i] . "</td>";
	}
	echo "</tr>";
}
echo "</table></center>";

}

include("footer.php");
?>

<br>