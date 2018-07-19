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
$matdesc = $_GET["matdesc"];
$rcvqty = $_GET["rcvqty"];
$rjctqty = $_GET["rjctqty"];
$rdate = $_GET["rdate"];
$rcvperson = $_GET["rcvperson"];
$rcvloc = $_GET["rcvloc"];
$remark = $_GET["remark"];
$vehno = $_GET["vehno"];
$strloc = $_GET["strloc"];
$grno = $_GET["grno"];
$bomqry = mysql_query("select * from bom where prid='$prid' and matcode = '$matcode'");
$getbomqry = mysql_fetch_array($bomqry);
$locref = isset($getbomqry["locref"])? $getbomqry["locref"] : '' ;
$cat = isset($getbomqry["cat"])? $getbomqry["cat"] : '' ;
$qty = isset($getbomqry["qty"])? $getbomqry["qty"] : '';
$uom = isset($getbomqry["uom"])? $getbomqry["uom"] : '' ;
$vendor = isset($getbomqry["vendor"])? $getbomqry["vendor"] : '' ;
$pono = isset($getbomqry["pono"])? $getbomqry["pono"] : '' ;

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
	

			form1.action = "updategr.php";
			form1.submit();
	}
	function cancel() {
	form1.action ="goodsreceipt.php";
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
							<tr><td><h3>Material Inward Movement</h3></td></tr>
					<table border="0">
						
						<tr><td>Material Code</td><td><?php echo $prid."->".$matcode; ?></td>
						<td></td><td>Project Name</td><td>
							<?php echo $prname; ?>
								</td>
						
						</tr>
						
							
					<tr>
								
							<td>Location Reference</td><td>
							<?php echo $locref; ?></td><td></td>
								<td>Cat/Part No Reference</td><td>
							<?php echo $cat; ?>
								</td>
								</tr>
								
								<tr><td>
GR No </td><td> <input type="text" name="grno" value="<?php echo $grno; ?>"></td><td></td>
<td>
Description </td><td><?php echo $prsdesc; ?></td>
	
	</tr>						
	<tr><td>
	Quantity </td><td> <?php echo $qty; ?></td><td></td>
	<td>UoM </td><td> <?php echo $uom; ?></td>
	
	</tr><tr>
<td>Receiving Location</td><td>
<input type="text" name="rcvloc" value="<?php echo $rcvloc; ?>"></td>
<td></td><td>Receiving Person</td><td>
<input type="text" name="rcvper" value="<?php echo $rcvperson; ?>"></td></tr>
<tr>
<td>Vehicle No</td><td>
<input type="text" name="vehno" value="<?php echo $vehno; ?>"></td><td></td>
<td>Storage Location</td><td>
<input type="text" name="strloc" value="<?php echo $strloc; ?>"></td>
</tr><tr>
<td>Vendor Name</td><td>
<?php echo $vendor;   ?></td><td></td>
<td>Receiving Date</td><td>
<input type="text" name="rdate" value="<?php echo $rdate ?>">
</td></tr>
<tr>
<td>PO No</td><td>
<?php echo $pono;   ?></td><td></td>

	<td>Quantity Received</td><td>
<input type="text" name="rcvqty" value="<?php echo $rcvqty; ?>"></td></tr><tr>
<td>Quantity Rejected</td><td>
<input type="text" name="rjctqty" value="<?php echo $rjctqty; ?>"></td></td><td>
	
<td>Remarks</td><td>
<input type="text" name="remark" value="<?php echo $remark; ?>"></td>
</tr>
								</table>
								</br>
								<center>			
							<input type="button" name="button1" value=" Submit" onClick="saveinfo()">
							<input type="button" name="button2" value="Cancel" onClick="cancel()">
							</center>
							</center>
							
							</form>
				
			
</body>
</html>
