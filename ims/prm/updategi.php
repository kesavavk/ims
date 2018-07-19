
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
		
$gino = $_POST["gino"];
//echo $gino;
$issueto = $_POST["issueto"];
$isspr = $_POST["isspr"];
$rcvloc = $_POST["rcvloc"];
$issueqty = $_POST["rcvqty"];
//echo $issueqty;
$remark = $_POST["remark"];
$vehno = $_POST["vehno"];


		
	$query = "update issuedgoods set issuedto='$issueto',isspr='$isspr',issueloc='$rcvloc',issueqty='$issueqty',remarks='$remark',issvehno='$vehno' where gino = '$gino' ";
	
	$af = mysql_query($query);
	if($af){ header("Location:goodissue.php");}
	
?>
</div>

</body>
</head>
</html>
