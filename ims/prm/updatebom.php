
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
		
$prid = $_POST["prid"];
$matcode = $_POST["matcode"];
$matsdesc = $_POST["matsdesc"];
$matldesc = $_POST["matldesc"];
$locref = $_POST["locref"];
$cat = $_POST["cat"];
$qty = $_POST["qty"];
$mrp = $_POST["mrp"];
$uom = $_POST["uom"];
$disc = $_POST["disc"];
$tax = $_POST["tax"];
$mstatus = $_POST["mstatus"];
$currency = $_POST["currency"];
$pono = $_POST["pono"];
$vendor = $_POST["vendor"];
echo $vendor;


		
	$query = "update bom set prid='$prid',matcode='$matcode',matsdesc='$matsdesc',matldesc='$matldesc',locref='$locref'
	,cat='$cat',qty='$qty',mrp='$mrp',uom='$uom',discount='$disc',tax='$tax',matstatus='$mstatus'
	,currency='$currency',pono='$pono',vendor='$vendor' where matcode = '$matcode' ";
	
	$af = mysql_query($query);
	if($af){ header("Location:bomlist.php");}
	
?>
</div>

</body>
</head>
</html>
