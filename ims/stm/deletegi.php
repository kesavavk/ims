<?php
include_once("include/config.php");

	$matcode = $_GET["matcode"];
	$gino = $_GET["gino"];
	
	//echo $prid;
	//$user = $_GET["user"];

	if($_GET["action"]==2){
	$query = "delete from issuedgoods where gino='$gino'";
	//$query1 = "delete from presence where uid = ".$user;
	$af = mysql_query($query);
	//mysql_query($query1);
		
	}
	if($af){
		header("Location:goodissue.php");
	
		}
?>
