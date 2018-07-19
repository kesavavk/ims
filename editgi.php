 <!DOCTYPE HTML>

<style>
.error {color: #FF0000;}
</style>
<?php
include_once("include/config.php");
  // include_once("include/checksession.php");
   //$uid = $_GET["uid"];
?>
<?php	
$prid = $_GET["prid"];
$matcode = $_GET["matcode"];
//echo $prid;
$gino = $_GET["gino"];
//echo $gino;
$issueto = $_GET["issueto"];
$isspr = $_GET["isspr"];
$rcvloc = $_GET["rcvloc"];
$issueqty = $_GET["issueqty"];
echo $issueqty;
$remark = $_GET["remark"];
$vehno = $_GET["vehno"];
//echo $issueqty;

$issuedqry = mysql_query("select * from issuedgoods where prid='$prid' and matcode='$matcode'");
$issuedqty = 0;
//$rjctqty = 0;
while($getissqry = mysql_fetch_array($issuedqry)){
//$rcvqty1 = isset($getrcvqry["rcvqty"])? $getrcvqry["rcvqty"] : '';
$issuedqty1 = isset($getissqry["issueqty"])? $getissqry["issueqty"] : '';
$issuedqty = $issuedqty + $issuedqty1;
//$rcvqty = $rcvqty + $rcvqty1-$rjctqty;
//echo $issuedqty;
}

$rcvqry = mysql_query("select * from receivedgoods where prid='$prid' and matcode='$matcode'");
$rcvqty = 0;
$rjctqty = 0;
$rcvqty2 = 0;
while($getrcvqry = mysql_fetch_array($rcvqry)){
$rcvqty1 = isset($getrcvqry["rcvqty"])? $getrcvqry["rcvqty"] : '';
$rjctqty1 = isset($getrcvqry["rjctqty"])? $getrcvqry["rjctqty"] : '';
$rcvqty2 = $rcvqty2 + $rcvqty1;
$rjctqty = $rjctqty + $rjctqty1;

}
$rcvqty = $rcvqty2-$rjctqty-$issuedqty;
$bomqry = mysql_query("select * from bom where prid='$prid' and matcode='$matcode'");
$getbomqry = mysql_fetch_array($bomqry);
$locref = isset($getbomqry["locref"])? $getbomqry["locref"] : '' ;
$cat = isset($getbomqry["cat"])? $getbomqry["cat"] : '' ;
$qty = isset($getbomqry["qty"])? $getbomqry["qty"] : '';
$uom = isset($getbomqry["uom"])? $getbomqry["uom"] : '' ;
$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
$prqry = mysql_query("select * from project where prid='$prid'");
$getprqry = mysql_fetch_array($prqry);
$prsdesc = isset($getprqry["prsdesc"]) ? $getprqry["prsdesc"] : '';
$prldesc = isset($getprqry["prldesc"]) ? $getprqry["prldesc"] : '';
$prname = isset($getprqry["prname"]) ? $getprqry["prname"] : '';
	//include("backg.php");
	include_once("include/config.php");
	//$user = isset($_GET["user"]) ? $_GET["user"] : '';
	error_reporting(E_ERROR | E_PARSE);
	//$cid = isset($_SESSION["cid"]) ? $_SESSION["cid"] : '' ;
?>

<?php  ?>
<script>
	function saveinfo() {
	

			form1.action = "updategi.php";
			form1.submit();
	}
	function cancel() {
	form1.action ="project.php";
	form1.submit();Administrator
	}
	function up(lstr)
	{
		var str=lstr.value;lstr.value=str.toUpperCase();
	}
	function showUid(cid){
			document.form1.submit();
	
	}
</script>


<html>
<head>
	<script type= "text/javascript" src = "countries.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<!--<link href="css/style1.css" rel="stylesheet" type="text/css" />-->
<title>Add Project</title>
<style>
body,td,th {
	font-family: Verdana;
	font-size: 13px;		
}
</style>
</head>
<body>

					 <br/><br/><br/>
					
								



					<div id="font1" >
					
<form method="post" name="form1" action=" " enctype="multipart/form-data">	
						<div  >
							<h3>Material Outward Movement</h3>
					<table border="0">
						
						<tr><td>Material Code</td><td><?php echo $prid."->".$matcode; ?></td>
						<td></td>

							
								
							<td>Location Reference</td><td>
							<?php echo $locref; ?></td></tr>
								<tr>
								<td>Cat/Part No Reference</td><td>
							<?php echo $cat; ?>
								</td>
								<td></td><td>
Short Description </td><td> <?php echo $prsdesc; ?></td></tr><tr>
<td>
Long Description </td><td><?php echo $prldesc; ?></td>
	
	<td></td><td>
	Available Quantity </td><td><?php echo $rcvqty; ?></td></tr>
	
	
	<tr><td>UoM </td><td> <?php echo $uom; ?></td><td></td>
<td>Issuing Project</td><td><input type="text" name="isspr" value="<?php echo $isspr; ?>">
	</td>
</tr>
<tr>
<td>GI No</td><td>
<input type="text" name="gino" value="<?php echo $gino; ?>"></td><td></td>
<td>Receiving Location</td><td>
<input type="text" name="rcvloc" value="<?php echo $rcvloc; ?>"></td>
</tr>
<tr><td>Issue to</td><td>
<input type="text" name="issueto" value="<?php echo $issueto; ?>"></td><td></td>
<td>Vehicle No</td><td>
<input type="text" name="vehno" value="<?php echo $vehno; ?>"></td></tr>

<tr>
	<td>Issue Quantity</td><td>
<input type="text" name="rcvqty" value="<?php echo $issueqty; ?>"></td>
<td></td>
<td>Remarks</td><td>
<input type="text" name="remark" value="<?php echo $remark; ?>"></td>
</tr>

								</table>
								</br>
								<center>			
							<input type="button" name="button1" value="Submit" onClick="saveinfo()">
							<input type="button" name="button2" value="Cancel" onClick="cancel()">
							</center>
							</center>
							
							</form>
				
			
</body>
</html>
