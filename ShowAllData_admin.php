<?php 
include('link.php');
include('header.php');

if($_SESSION["pri"] == 1)
{
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1.5 col-md-10 col-md-offset-2">
<html>
<title>All Data</title>
<head>
<script type="text/javascript">

	function do_this_all()
    {
    	var checkboxes = document.getElementsByName('no[]');
        var button = document.getElementById('delall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = 'TRUE';
		}
    }
    function undo_this_all()
    {
    	var checkboxes = document.getElementsByName('no[]');
        var button = document.getElementById('undelall');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = '';
		}
    }
</script>
<link rel ="stylesheet" href = "icon.css"/>
</head>
<body>
<center>
<form action="deleteData.php" method="post">
<table border="1">
<tr>
	<th>選擇航班</th>
	<th>航班編號</th>
	<th>航空公司</th>
	<th>出發日期</th>
	<th>出發時間</th>
	<th>機票價格</th>
	<th>剩餘機位</th>
	<th>修改</th>
</tr>

<?php

include('link.php');

$getNoSQL = "SELECT * FROM `product` ORDER BY `product`.`no` ASC";
$resultNo = mysql_query($getNoSQL);

//echo $getNoSQL;

while ($row = mysql_fetch_assoc($resultNo))
{
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"no[]\" value=\"". $row["no"] . "\"/></td>";
	echo "<td>" . $row["no"] . "</td>";
	echo "<td>" . $row["company"] . "</td>";
	echo "<td>" . $row["date"] . "</td>";
	echo "<td>" . $row["time"] . "</td>";
	echo "<td>" . $row["price"] . "</td>";
	echo "<td>" . $row["quantity"] . "</td>";
	echo "<td><a href=\"./updateData.php?no=" . $row["no"] . "\">
		update</a></td>";
	echo "</tr>";
}

mysql_close($link);
?>	

</table>
<div class = "hot-container">
<button class = "btn btn-blue" type="submit">Delete</button>
<input class = "btn btn-blue" type="button" id="delall" value="SelectAll" onClick="do_this_all()" />
<input class = "btn btn-blue" type="button" id="undelall" value="unchecked" onClick="undo_this_all()" />
</div>

</form>
</center>
</body>
</html>
<?php 
include('footer.php');
}
else
{
	echo "<center>";
	echo '您無此權限！';
	echo "</center>";
}
session_write_close();

?>