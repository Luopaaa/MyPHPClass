<?php
include('link.php');
include("header.php");
?>

<!----><!DOCTYPE html>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
		<title></title>
		<link rel="stylesheet" href="icon.css">
	</head>
	<body>
	<form action="inputuserdata_back.php" method="post">
	    <tr>
			<h2>請填寫以下個人資料 Please fill your information</h2>
		</tr>
		<hr color="#000000" size="30"/>
		<tr>
			<h3>姓名 Name</h3>
			<input name="username"/><br>
		</tr>
		<tr>
			<h3>英文姓名 English Name</h3>
			<input name="englishname"/><br>
		</tr>
		<tr>
			<h3>生日 Birthday(ex:2016/07/30)</h3>
			<input name="birthday"/><br>
		</tr>
		<tr>
			<h3>護照號碼 Passport Numbers</h3>
			<input name="passport"/><br>
		</tr>
		<tr>
			<h3>聯絡電話 Phone</h3>
			<input name="phone"/><br>
		</tr>
		<tr>
			<h3>聯絡地址 Address</h3>
			<input name="address"/><br>
		</tr>
		<tr>
			<h3>電子信箱 E-mail</h3>
			<input name="email"/><br><br>
		</tr>
		
		<tr>
			<button class="btn" type="submit" >傳送 send</button>
		</tr>
	</form>	
	<?php
	include("footer.php");
	?>
	</body>
</html>

