<?php
include_once("include/config.php");

	$matcode = $_GET["matcode"];
	$grno = $_GET["grno"];
	$rcvqt = $_GET["rcvqty"];
	$rjctqt = $_GET["rjctqty"];
	
$bomqrygr = mysql_query("select * from receivedgoods where matcode = '$matcode'");
$bomqrygi = mysql_query("select * from issuedgoods where matcode = '$matcode'");

$bomqrygr = mysql_query("select sum(rcvqty) as rcvsum,sum(rjctqty) as rjctsum from receivedgoods where matcode = '$matcode'");
$bomqrygi = mysql_query("select sum(issueqty) as issuesum from issuedgoods where matcode = '$matcode'");

$getbomqrygr = mysql_fetch_array($bomqrygr);
$getbomqrygi = mysql_fetch_array($bomqrygi);
$rcvsum = $getbomqrygr["rcvsum"];
$rjctsum = $getbomqrygr["rjctsum"];
$issuesum = $getbomqrygi["issuesum"];
$checksum = $rcvsum-$rjctsum-$issuesum;
echo $grno;
//$getbomqry = mysql_fetch_array($bomqry);
	//echo $prid;
	//$user = $_GET["user"];
	if($checksum<$rcvqt){
		echo "
		<script>
		alert('Deletion Quantity is more than Available Quantity');
		history.go(-1);
		</script>
		";
	}
	else{
	if($_GET["action"]==2){
	$query = "delete from receivedgoods where grno='$grno'";
	//$query1 = "delete from presence where uid = ".$user;
	$af = mysql_query($query);
	//mysql_query($query1);
		
	}
	if($af){
		header("Location:goodreceipt.php");
	
		}
	}
?>
