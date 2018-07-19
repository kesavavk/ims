<?php
include_once("include/config.php");

	$uname = $_GET["uname"];
	if($_GET["action"]==2){
	$query = "delete from user where uname='$uname'";
	//$query1 = "delete from presence where uid = ".$user;
	$af = mysql_query($query);
	//mysql_query($query1);
		
	}
	if($af){
		header("Location:userlist.php");
	
		}
	
?>
