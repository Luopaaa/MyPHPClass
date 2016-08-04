<?php 
include('link.php');
include('header.php');
session_start();

if ( $_SESSION['pri'] == 1 )
{
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
	</head>
	<body>
	<center>
	<h3>新增產品：</h3>
	<form action="prodinput_back.php" method="post">
		航空：<input name="company"/><br><br>
		日期：<input name="date"/><br><br>
		時間：<input name="time"/><br><br>
		票價：<input name="price"/><br><br>
		數量：<input name="quantity"/><br><br>
		<button type="submit">送出</button>
	</form>
	</center>
	</body>
</html>

<?php 
include('footer.php');

?>

<?php

}
else
{
	echo "<center>";
	echo "您無此權限！";
	echo "</center>";
	include('footer.php');
}

?>