
<html >
<head >
	<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Attendance System</title>
<body>
<style>
.sucess{
color:#088A08;
}
.error{
color:blue;
}
</style>	

<?php 
include("include/checksession.php");
	$user = $_SESSION["uname"];
//include("backg.php");
	include_once("include\config.php");
	
	
	//$uname = isset($_POST["uname"])? $_POST["uname"] : ' '  ;	
	$prid = isset($_POST["prid"])? $_POST["prid"] : ' '  ;	
	echo $prid;
	$status = isset($_POST["status"])? $_POST["status"] : ' '  ;	
	$remark = isset($_POST["remark"])? $_POST["remark"] : ' '  ;	

	
	$date = date('Y-m-d');

		if($status==NULL){
	header("Location:addtrans.php?status=1");
	
}
else { $query = "insert into usertrans(prid,uname,status,remark,date)
	values('$prid','$user','$status','$remark','$date')";
	$af = mysql_query($query);
	if($af){ header("Location:userlist.php?success=1");}
	}
	
?>
</div>

</body>
</head>
</html>
