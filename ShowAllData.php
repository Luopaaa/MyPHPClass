<?php
include('link.php');
include("header.php");
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
<form action="sendOrder.php" method="post">
<table border="3" class = "table">
<tr>
	<th>Select</th>
	<th>No</th>
	<th>Company</th>
	<th>Date</th>
	<th>Time</th>
	<th>Quantity</th>
	<th>Numbers</th>
	<th>Price</th>
</tr>


<?php
$getNoSQL = "SELECT * FROM `product` ORDER BY `product`.`no` ASC";
$resultNo = mysql_query($getNoSQL);

echo $_SESSION["user"] . "您好:<br>";


while ($row = mysql_fetch_assoc($resultNo))
{
	
	echo "<tr>";
	echo "<td><input  class = \"specialcheck\" type=\"checkbox\" name=\"no[]\" value=\"". $row["no"] . "\"/><label for = \"specialcheck\"></label></td>";
	echo "<td>" . $row["no"] . "</td>";
	echo "<td>" . $row["company"] . "</td>";
	echo "<td width = \"250%\">" . $row["date"] . "</td>";
	echo "<td>" . $row["time"] . "</td>";
	echo "<td>" . $row["quantity"] . "</td>";
	echo "<td>" . $row["price"] . "</td>";
	echo "<td>" . "<input type = \"text\" size = \"8\" name = \"numbers[]\"/>" ."</td>";
	echo "</tr>";
}


mysql_close($link);
?>	

</table>
<div class = "hot-container">
<input  class = "btn btn-blue" type="button" id="undelall" value="unchecked" onClick="undo_this_all()" />
<button  class = "btn btn-blue" type="submit">Send Order</button>
</div>
</form>

</body>
</html>

<?php
include("footer.php");
?>