<?php
class pageCtrl
{
	
	private function tableList($actionName, $reportSQL1, $checkbox)
	{
		if( $checkbox == "T" )
		{
			echo "<form action=\"" . $actionName . "\" method=\"post\">";
		}
		$result = mysql_query($reportSQL1);
		$n = mysql_num_fields($result);
		echo "<center><table border=1><tr>";
		if( $checkbox == "T" )
		{
			echo "<th>Check</th>";
		}
		for( $i=0; $i<$n; $i++ )
		{
			$fieldName = mysql_field_name($result, $i);
			echo "<th>" . $fieldName . "</th>";
		}
		if( $checkbox == "T" )
		{
			echo "<th>Number</th>";
		}		
		echo "</tr>";
		while( $row = mysql_fetch_array($result) )
		{
			echo "<tr>";
			if( $checkbox == "T" )
			{
				echo "<td><input type=\"checkbox\" name=\"no[]\" value=\"". $row[0] . "\"/></td>";
			}
			for( $i=0; $i<$n; $i++ )
			{
				echo "<td>" . $row[$i] . "</td>";
			}
			if( $checkbox == "T" )
			{
				echo "<td>" . "<input type = \"text\" size = \"8\" name = \"numbers[]\"/>" ."</td>";
			}
			echo "</tr>";
		}
	}		
	
	public function showTable($actionName, $reportSQL1, $newTableName, $buttonName, $checkbox)
	{
		echo "<tr><td>" . $newTableName . "</td></tr>";
		
		$this -> tableList($actionName, $reportSQL1, $checkbox);
		
		if( $newTableName != "" )
		{
			echo "<tr><td><input type=\"button\" id=\"delall\" value=\"" . $buttonName[0] . "\" onClick=\"do_this_all()\" /></td>";
			echo "<td><input type=\"button\" id=\"undelall\" value=\"" . $buttonName[1] . "\" onClick=\"undo_this_all()\" /></td>";
			echo "<td><button type=\"submit\">Send Order</button></td></tr>";
		}
	}	
	public function selectOpt($actionName, $reportSQL1, $selName)
	{
		$result = mysql_query($reportSQL1);
		echo "<form action=\"" . $actionName . "\" method=\"post\">";
		echo "<select name=\"" . $selName . "\">";
		while( $row = mysql_fetch_array($result) )
		{
			echo "<option value=\"". $row[0] ."\">" . $row[0] . "</option>";
		}
		echo "</select>";
		echo "<button type=\"submit\">Search</button></form>";
	}
	public function checkImage($inputname)
	{
		$strCtrl = "<h3>CODES:<input size=\"18\" type=\"text\" name=\"" . $inputname . "\" id=\"checknum\"><img src=\"./tools/showrandimg.php\" id=\"rand-img\"></h3><br>";
		
		echo $strCtrl;
	}
	
	public function verifyImage($checknum)
	{
		Session_start();
		$result = 1;
		if( $_SESSION["Checknum"] != $checknum )
		{
			echo "<script type='text/javascript'>alert(\"Check Error!\"); </script>";
			$result = 0;
		}
		return $result;
	}
	public function changPageTo($url)
	{
		$script = "<script type='text/javascript'>";
		$script = $script . "window.location.href='$url'";
		$script = $script . "</script>";
		
		return $script;
	}
}

?>