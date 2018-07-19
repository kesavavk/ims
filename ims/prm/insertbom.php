
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
		
	$locref = $_POST["locref"];	
	$cat = $_POST["cat"];
	$qty = $_POST["qty"];
	//$matname = $_POST["matname"];
	$uom =  $_POST["uom"];
	$mrp =  $_POST["mrp"];
	$mrp2 = $mrp;
	$disc2 =  $_POST["disc"];
	$disc1 =  $_POST["disc1"];
	$matcode =  $_POST["matcode"];
	$matldesc =  $_POST["matldesc"];
	$matsdesc =  $_POST["matsdesc"];
$vendor =  $_POST["vendor"];
$pono =  $_POST["pono"];
	$tax2 =  $_POST["tax"];
	$tax1 =  $_POST["tax1"];
	$prid =  $_POST["prid"];
	$currency = $_POST["currency"];
	$prcheck = mysql_query("select * from project where prid='$prid'");
	$prstres = mysql_fetch_array($prcheck);
	$prstatus = $prstres["fstatus"];
	
	//echo $disc1;
	//echo $disc2;
	
	if($prstatus=='CLOSED'){
		echo "<script>
		alert('Bill Of Material Can not be possible for Closed Projects');
		history.go(-1);
		</script>";
		
	}
	else{
		if($disc1>0 && $disc2>0) { 
		echo "<script>
		alert('Please enter either Amount or Percentage ');
		</script>";
	}
	else if($disc2>0 ){
			$disc = $disc2;
			$mrp2 = $mrp - $disc;
								
		}
	else if($disc1>0){
				$disc = $mrp*($disc1/100);
				$mrp2 = $mrp - $disc;
	}
	else{
		$disc = '';}
		if($tax2>0 && $tax1>0) {
		echo "<script>
		alert('Please enter either Amount or Percentage ');
		</script>";
	}					
	else if($tax2>0){
			$tax = $tax2;

	}
	else if($tax1>0){
		$tax = $mrp2*($tax1/100);
								
	}
	
	else{
		$tax = '';
}
if(($tax2>0 && $tax1>0) || ($disc1>0 && $disc2>0)){
	echo "<script>
		history.go(-1);
		</script>";
	}
	else{
		
	//$prrefdate = $prrefy."-".$prrefm."-".$prrefd;
	//echo $prrefdate;
	//$gtotal = $_POST["gtotal"];
	$matstatus = $_POST["matstatus"];
	$mtcdqry = mysql_query("select * from bom where matcode='$matcode'");
	$mtcdqryres = mysql_fetch_array($mtcdqry);
		//$qty1 = $mtcdqryres["qty"];
	//$qty1 = isset($mtcdqryres["qty"]) ? $mtcdqryres["qty"] : ' ';
	//$mrp1 = isset($mtcdqryres["mrp"]) ? $mtcdqryres["mrp"] : ' ';
	//$disc1 = isset($mtcdqryres["discount"]) ? $mtcdqryres["discount"] : ' '; 
	//$tax1 = isset($mtcdqryres["tax"]) ? $mtcdqryres["tax"] : ' ';
	$bomprid = isset($mtcdqryres["prid"]) ? $mtcdqryres["prid"] : ' ';
	//echo $qty1;
	//echo $prid;
	//echo $matcode;
	//$updateqty = $qty+$qty1;
	//$updatemrp = $mrp + $mrp1;
	//$updatedisc = $disc+$disc1;
	//$updatetax = $tax + $tax1;
	//where prid = '$prid' and matcode='$matcode';
	if($bomprid==$prid){
		//$query = "update bom set qty = '$updateqty',mrp = '$updatemrp',discount ='$updatedisc', tax='$updatetax' where matcode='$matcode' ";
	//$af = mysql_query($query);
	//if($af){ 
	//	header("Location:bomlist.php");
	//	}
	//	}
	//	else{
			echo "
			<script>
			alert('Material Code Already Present in $bomprid Project');
			history.go(-1);
			</script>
			";
			
		}
	
	$query = "insert into bom(prid,locref,cat,uom,qty,mrp,tax,discount,matstatus,matcode,matsdesc,matldesc,pono,vendor,currency)
	values('$prid','$locref','$cat','$uom','$qty','$mrp','$tax','$disc','$matstatus','$matcode','$matsdesc','$matldesc','$pono','$vendor','$currency')";
	$af = mysql_query($query);
	if($af){ header("Location:bomlist.php");}
}
	
	
}

	
?>
</div>

</body>
</head>
</html>
