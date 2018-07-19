
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
		
	$prname = $_POST["prname"];	
	$prsdesc = $_POST["prsdesc"];
	$prldesc = $_POST["prldesc"];
	$prref =  $_POST["prref"];
	$prvalue =  $_POST["prvalue"];
	$amtrcvd =  $_POST["amtrcvd"];
	//$prrefd =  $_POST["prrefd"];
	//$prrefm =  $_POST["prrefm"];
	//$prrefy =  $_POST["prrefy"];
	$prrefdate = $_POST["prrefd"];
	//echo $prrefdate;
	//echo $prref;
	$customer1 = $_POST["cname1"];
	$contact1 = $_POST["contact1"];
	$customer2 = $_POST["cname2"];
	$contact2 = $_POST["contact2"];
	$prodesc = $_POST["prodesc"];
	$fstatus = $_POST["fstatus"];
		
	$query = "update project set prid='$prref',prname='$prname',prsdesc='$prsdesc',prldesc='$prldesc',prrefdate='$prrefdate',customer1='$customer1',contact1='$contact1',customer2='$customer2',contact2='$contact2',prodesc='$prodesc',fstatus='$fstatus',prvalue='$prvalue',amtrcvd='$amtrcvd' where prid = '$prref' ";
	
	$af = mysql_query($query);
	if($af){ header("Location:projects.php");}
	
?>
</div>

</body>
</head>
</html>
