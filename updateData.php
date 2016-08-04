<html>
<head>
	<title>Update Data</title>
</head>
<body>
<?php

$no = $_GET["no"];

include('link.php');
include('header.php');
$getSQL = "SELECT * FROM `product` WHERE `no`='" . $no . "'";
$result = mysql_query($getSQL);
$row = mysql_fetch_assoc($result);
mysql_close($link);
?>	
<center>
<form action="updateToSQL.php" method="post">
<table border="1">
	<tr>
		<td>
		<h4>航空</h4>
		</td>
		<td>
			<h4><input type="text" name="company" value="<?php echo $row["company"] ?>"/></h4>
		</td>
	</tr>
	<tr>
		<td>
		<h4>日期</h4>
		</td>
		<td>
			<h4><input type="text" name="date" value="<?php echo $row["date"] ?>" /></h4>
		</td>
	</tr>
	<tr>
		<td>
		<h4>時間</h4>
		</td>
		<td>
			<h4><input type="text" name="time" value="<?php echo $row["time"] ?>" /></h4>
		</td>
	</tr>
	<tr>
		<td>
		<h4>票價</h4>
		</td>
		<td>
			<h4><input type="text" name="price" value="<?php echo $row["price"] ?>"/></h4>
		</td>
	</tr>
	<tr>
		<td>
		<h4>機位</h4>
		</td>
		<td>
			<h4><input type="text" name="quantity" value="<?php echo $row["quantity"] ?>"/></h4>
		</td>
	</tr>
	</table>
	<input type="hidden" name="no" value="<?php echo $no ?>">
	<button type="submit">send</button>
	</form>
</center>
</body>