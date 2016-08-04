<?php
session_start();
include('header.php');
session_write_close();
include('link.php');
    if($_SESSION["pri"] == "" )
    {
    	$url = "login.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }

    if($_SESSION["pri"] != 0)
    {
        echo "<center>";
        echo "Hello!     ".$_SESSION["user"]."<br>";
        echo "我們提供各大航空公司網路便宜機票訂位，而且流程非常簡單，並且時常<br>有限量機位，等待著各位來發掘，準備好了嗎？ 下好離手！";
        echo "</center>";
    }
    
include('footer.php');
?>

