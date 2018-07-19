 <!DOCTYPE HTML>

<style>
.error {color: #FF0000;}
</style>
<?php
  // include_once("include/checksession.php");
   //$uid = $_GET["uid"];
?>
<?php	
$prid = $_GET["prid"];
$matcode = $_GET["matcode"];
$matsdesc = $_GET["matsdesc"];
$matldesc = $_GET["matldesc"];
$locref = $_GET["locref"];
$cat = $_GET["cat"];
$qty = $_GET["qty"];
$mrp = $_GET["mrp"];
$uom = $_GET["uom"];
$disc = $_GET["disc"];
$tax = $_GET["tax"];
$mstatus = $_GET["mstatus"];
$currency = $_GET["currency"];
$pono = $_GET["pono"];
$vendor = $_GET["vendor"];
	//include("backg.php");
	include_once("include/config.php");
	//$user = isset($_GET["user"]) ? $_GET["user"] : '';
	error_reporting(E_ERROR | E_PARSE);
	//$cid = isset($_SESSION["cid"]) ? $_SESSION["cid"] : '' ;
?>

<?php  ?>
<script>
	function saveinfo() {
	

			form1.action = "updatebom.php";
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
							<h3>Bill Of Material</h3>
					<table border="0">
						
												<tr>
								
							<td>Project Code</td><td>
							<input type="text" name="prid" value="<?php echo $prid; ?>" >
								</td><td></td>
								
							<td>Material Code</td><td>
							<input type="text" name="matcode"  value="<?php echo $matcode; ?>" >
								</td></tr>	
					<tr><td>Material Short Description</td><td>
<input type="text" name="matsdesc"  value="<?php echo $matsdesc; ?>" ></td><td></td><td>Material Long Description</td><td>
<input type="text" name="matldesc"  value="<?php echo $matldesc; ?>" ></textarea></td></tr>
							<tr><td>Location Reference</td><td><input type="text" name="locref" value="<?php echo $locref; ?>">
</td><td></td>	
							<td>Cat/Part No Reference</td><td>
							<input type="text" name="cat" value="<?php echo $cat; ?>">
								</td>
								</tr>
								<tr><td>Vendor Name</td><td><input type="text" name="vendor" value="<?php echo $vendor; ?>">
</td><td></td>	
							<td>PO No</td><td>
							<input type="text" name="pono" value="<?php echo $pono; ?>">
								</td>
								</tr>
								
								
	<tr><td>
	BOM Quantity</td><td><input type="text" name="qty" value="<?php echo $qty; ?>"></td><td></td>
	<td>UoM</td><td><input type="text" name="uom" value="<?php echo $uom; ?>"></td></tr><tr>
<td>Currency</td><td>
<input type="text" name="currency" value="<?php echo $currency; ?>"></td><td></td>
<td>MRP</td><td>
<input type="text" name="mrp" value="<?php echo $mrp; ?>"></td></tr>
<tr>
<td>Discount</td><td>
<input type="text" name="disc" value="<?php echo $disc; ?>"></td><td></td>
<td>Tax</td><td>
<input type="text" name="tax" value="<?php echo $tax; ?>"></td></tr>
<tr>
	<td></td><td>
							
								</td><td></td>
								
<td>Material Status</td>
						<td>
<input type="text" name="mstatus" value="<?php echo $mstatus; ?>"></td>
							
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
