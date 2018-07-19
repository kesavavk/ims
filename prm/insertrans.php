
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
	
	
	$uname = isset($_POST["uname"])? $_POST["uname"] : ' '  ;	
	$prid = isset($_POST["prid"])? $_POST["prid"] : ' '  ;	
	echo $prid;
	$status = isset($_POST["status"])? $_POST["status"] : ' '  ;	
	$remark = isset($_POST["remark"])? $_POST["remark"] : ' '  ;	

	
	$date = date('Y-m-d');
	if($uname != NULL && $uname==$user){
		if($status==NULL){
	header("Location:usertrans.php?status=1");
	
}
else { $query = "insert into usertrans(prid,uname,status,remark,date)
	values('$prid','$uname','$status','$remark','$date')";
	$af = mysql_query($query);
	if($af){ header("Location:usertrans.php");}
	}
}
else {header("Location:usertrans.php?unm=1");}
	
?>
</div>

</body>
</head>
</html>
