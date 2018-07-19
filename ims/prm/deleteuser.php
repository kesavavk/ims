<?php
include_once("include/config.php");

	$prid = $_GET["prid"];
$bomqry = mysql_query("select * from bom where prid='$prid'");
$getbomqry = mysql_fetch_array($bomqry);
	//echo $prid;
	//$user = $_GET["user"];
	if(mysql_num_rows($bomqry)>0){
		echo "
		<script>
		alert('Please Delete Project Materials in Bill Of Materials ');
		history.go(-1);
		</script>
		";
	}
	else{
	if($_GET["action"]==2){
	$query = "delete from project where prid ='$prid'";
	//$query1 = "delete from presence where uid = ".$user;
	$af = mysql_query($query);
	//mysql_query($query1);
		
	}
	if($af){
		header("Location:projects.php");
	
		}
	}
?>
