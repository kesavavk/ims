<?php 
session_start();
include_once("include/config.php");
$login = $_POST["textfield1"];
$pwd = $_POST["textfield2"];
$file = 'logs.txt';
date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d');
	$day = date('l');
	$min = date('i');
	$hour = date('H');
	$timem = $hour.":".$min;
	
$recordset = mysql_query("select * from user");
while($record = mysql_fetch_array($recordset)){
	if($login == $record["uname"] && $pwd == $record["pwd"]) {
		echo $record["uname"];
		echo $record["pwd"];
	//$ipadr = $_SERVER['REMOTE_ADDR'];
		
	//	$resperson = "\r\n Logged in with ".$login." by ".$ipadr." on ".$date." at ".$timem;
		//file_put_contents($file,$resperson, FILE_APPEND | LOCK_EX);
		
		
	$_SESSION["uname"] = $record["uname"];
	
	$_SESSION["fname"] = $record["fname"];	
			if($record["utype"] == 1){
			$_SESSION["utype"] = $record["utype"];
			header("Location:backg.php?uname=".$record["uname"]);
		    exit;
			}else if($record["utype"] == 0){
				header("Location:backg.php?uname=".$record["uname"]);
			}
			else{
		header("Location:login.php");
		exit;
		}
   }
   else {//header("Location:login.php?invalid=1");exit;  
	   }
} 
		   
?>
