<?php
include_once("include/config.php");

	$matcode = $_GET["matcode"];
$bomqrygr = mysql_query("select * from receivedgoods where matcode = '$matcode'");
$bomqrygi = mysql_query("select * from issuedgoods where matcode = '$matcode'");

//$getbomqry = mysql_fetch_array($bomqry);
	//echo $prid;
	//$user = $_GET["user"];
	if(mysql_num_rows($bomqrygr)>0 || mysql_num_rows($bomqrygi)>0 ){
		echo "
		<script>
		alert('Please Delete Material Transactions in Received Goods and Issued goods');
		history.go(-1);
		</script>
		";
	}
	else{
	if($_GET["action"]==2){
	$query = "delete from bom where matcode='$matcode'";
	//$query1 = "delete from presence where uid = ".$user;
	$af = mysql_query($query);
	//mysql_query($query1);
		
	}
	if($af){
		header("Location:bomlist.php");
	
		}
	}
?>
