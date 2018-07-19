
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
	$prid = $_POST["prid1"];	
	$rcvloc = $_POST["rcvloc"];	
	$rcvper = $_POST["rcvper"];
	$vehno = $_POST["vehno"];
	$vendor =  $_POST["vendor"];
	$pono =  $_POST["pono"];
	$rcvqty =  $_POST["rcvqty"];
	$rjctqty =  $_POST["rjctqty"];
	$prrefd =  $_POST["rcvd"];
	$prrefm =  $_POST["rcvm"];
	$prrefy =  $_POST["rcvy"];
	$strloc =  $_POST["strloc"];
	//$prrefdate = $prrefy."-".$prrefm."-".$prrefd;
	$rdate = $prrefy."-".$prrefm."-".$prrefd;
	//echo $prrefdate;
	$remark = $_POST["remark"];
	//$supname = $_POST["supname"];
	$matcode =  $_POST["matcode"];		
	$query = "insert into receivedgoods(prid,rcvloc,rcvperson,rdate,vehicleno,vendor,rcvqty,rjctqty,remarks,pono,matcode,strloc)
	values('$prid','$rcvloc','$rcvper','$rdate','$vehno','$vendor','$rcvqty','$rjctqty','$remark','$pono','$matcode','$strloc')";
	
	$af = mysql_query($query);
	if($af){ header("Location:goodreceipt.php");}
	
?>
</div>

</body>
</head>
</html>
