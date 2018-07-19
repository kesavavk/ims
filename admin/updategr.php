
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
	include_once("include\config.php");
		

$rcvqty = $_POST["rcvqty"];
$rjctqty = $_POST["rjctqty"];
$rcvperson = $_POST["rcvper"];
$rcvloc = $_POST["rcvloc"];
$remark = $_POST["remark"];
$vehno = $_POST["vehno"];
$strloc = $_POST["strloc"];
$grno = $_POST["grno"];


		
	$query = "update receivedgoods set rcvqty='$rcvqty',rjctqty='$rjctqty',rcvperson='$rcvperson',rcvloc='$rcvloc',remarks='$remark',vehicleno='$vehno',strloc='$strloc' where grno = '$grno' ";
	
	$af = mysql_query($query);
	if($af){ header("Location:goodreceipt.php");}
	
?>
</div>

</body>
</head>
</html>
