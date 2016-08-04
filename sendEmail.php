<?php
error_reporting(E_ALL || ~E_NOTICE);
include("link2.php");
include('header.php');

if( isset( $_POST["checknum"] ) )
{
	if( !($pageObj -> verifyImage($_POST["checknum"])) )
	{
		$url = "creatuser.php";
		echo $pageObj -> changPageTo($url);
	}

    $username = $_POST["username"];
    $userpass = $_POST["userpass"];
    $usermail = $_POST["email"];

    $setSQL = "INSERT INTO `admin`(`user`, `pass`, `pri`, `email`) VALUES ('" . $username . "','" . $userpass . "',0,'" . $usermail . "')";

    //echo $setSQL;


    mysql_query($setSQL);

    $getIDSQL = "SELECT id FROM `admin` WHERE `user` = '" . $username. "' AND `pass` = '". $userpass ."'";
    $result = mysql_query($getIDSQL);
    $userID = mysql_fetch_assoc($result);
    
    include('mailer.php');

    $url= "http://localhost/budget/idcheck.php?id=" . $userID["id"];
    $ahref = "<a href=\"" . $url ."\">" . $url ."</a>";
    $htmlurl = "<table><tr><td>welcome and please link the following url</td><td>". $ahref . "</td></tr></table>";

    $mail->Body = $htmlurl;
    $mail->AddAddress($usermail);


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "<br>"."Message has been sent";
     }
 }


?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
            <h2>Please check your email</h2>
            </div>
        </div>
    <div>
