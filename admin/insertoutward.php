
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
	$prid = isset($_POST["prcode"])?$_POST["prcode"] : ' ';
	$isspr = $_POST["issuepr"];	
	$issloc = $_POST["rcvloc"];	
	echo $issloc;
	$issueto = $_POST["issueto"];
	$vehno = $_POST["vehno"];
	$matcode = $_POST["matcode"];
	$isquant = $_POST["matcode"];
	//echo $prid;
	$pono =  $_POST["pono"];
	$rcvqty =  $_POST["rcqty"];
	$issqty =  $_POST["rcvqty"];
	//$rjctqty =  $_POST["rjctqty"];
	$prrefd =  $_POST["issd"];
	$prrefm =  $_POST["issm"];
	$prrefy =  $_POST["issy"];
	
	$dd1 =  $_POST["ddated1"];
	$dm1 =  $_POST["ddatem1"];
	$dy1 =  $_POST["ddatey1"];
	$ddate1 = $dy1."-".$dm1."-".$dd1;
	//echo $ddate1;
	//echo $ddate2;
	$return = $_POST["return"];
	//echo $return;
	
	
		//$prrefdate = $prrefy."-".$prrefm."-".$prrefd;
	$issuedate = $prrefy."-".$prrefm."-".$prrefd;
	//echo $prrefdate;
	$remark = $_POST["remark"];
	//$supname = $_POST["supname"];
			
	//$query = "update material set isspr='$isspr',issuedto='$issueto',issuedate='$issuedate',issvehno='$vehno',isspono='$pono',issueqty='$issqty',remarks1='$remark',returnable='$return',duedate='$ddate1' where matcode='$matcode'";
	//,issuedto='$issueto',issuedate='$issuedate',issvehno='$vehno',isspono='$pono',issueqty='$issqty',remarks1='$remark',duedate='$ddate1',toduedate='ddate2',return='$return' where prid='$prid'";
	 	if($issqty<=$rcvqty){
	 	$query = "insert into issuedgoods(prid,issuedate,issvehno,isspono,issueqty,remarks,matcode,duedate,returnable,isspr,issueloc,issuedto)
	values('$prid','$issuedate','$vehno','$pono','$issqty','$remark','$matcode','$ddate1','$return','$isspr','$issloc','$issueto')";
	$issqry = mysql_query("update receivedgoods set issuedqty = '$issqty' where matcode = '$matcode' ");
	
	$af = mysql_query($query);
	if($af){ header("Location:goodissue.php");}
}
else{
	echo "<script>
	alert('Issued Quantity Exceeded');
	window.history.back();
	</script>";
}
	
?>
</div>

</body>
</head>
</html>
