 <!DOCTYPE HTML>

<style>
.error {color: #FF0000;}
</style>
<?php
  // include_once("include/checksession.php");
   //$uid = $_GET["uid"];
?>
<?php	
	//include("backg.php");
	include_once("include/config.php");
	//$user = isset($_GET["user"]) ? $_GET["user"] : '';
	error_reporting(E_ERROR | E_PARSE);
	//$cid = isset($_SESSION["cid"]) ? $_SESSION["cid"] : '' ;
?>

<?php


 ?>
<script>
	function saveinfo() {
	
			form1.action = "insertbom.php";
			form1.submit();
	}
	function cancel() {
	form1.action ="bom.php";
	form1.submit();Administrator
	}
	function up(lstr)
	{
		var str=lstr.value;lstr.value=str.toUpperCase();
	}
	function showUid(cid){
			document.form1.submit();
	
	}
	function validateForm() {
    var disc1 = document.forms["form1"]["disc1"].value;
    var disc = document.forms["form1"]["disc"].value;
    var tax = document.forms["form1"]["tax"].value;
    var tax1 = document.forms["form1"]["tax1"].value;
    if (disc != " " && disc1 != " ") {
       alert("Discount Amount and Percentage both Should not be entered. Please enter either Amount or Percentage ");
        return false;
    }
    if (tax != " " && tax1 != " ") {
       alert("Tax Amount and Percentage both Should not be entered. Please enter either Amount or Percentage ");
        return false;
    }
}
</script>


<html>
<head>
	<script type= "text/javascript" src = "countries.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<!--<link href="css/style1.css" rel="stylesheet" type="text/css" />-->
<title>Bill Of Material</title>
<style>
body,td,th {
	font-family: Verdana;
	font-size: 13px;
	width:20%;
}


</style>
</head>
<body>

					 <br/><br/><br/>
					
							



					<div id="font15" >
					
<form method="post" name="form1" onsubmit="return validateForm()" action=" " enctype="multipart/form-data">	
						<div  >
							<h3>Bill Of Material</h3>
					<table border="0">
						
												<tr>
								
							<td>Project_Reference</td><td>
							<select name="prid">
	<?php 
							$recordset4 = mysql_query ("select * from project");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["prid"]."'>".$record4["prname"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select>
								</td>
								
							<td>Material Code</td><td>
							<input type="text" name="matcode" >
								</td></tr>	
					<tr><td>Material_Short_Description</td><td>
<textarea rows="3" cols="30" name="matsdesc" placeholder="Material Short Description"></textarea></td><td>Material_Long_Description</td><td>
<textarea rows="3" cols="30" name="matldesc" placeholder="Material Long Description"></textarea></td></tr>
							<tr><td>Location Reference</td><td><input type="text" name="locref" >
</td>	
							<td>Cat/Part No Reference</td><td>
							<input type="text" name="cat" >
								</td>
								</tr>
								<tr><td>Vendor Name</td><td><input type="text" name="vendor" >
</td>	
							<td>PO No</td><td>
							<input type="text" name="pono" >
								</td>
								</tr>
								
								
	<tr><td>
	BOM Quantity</td><td><input type="text" name="qty" ></td>
	<td>UoM</td><td><input type="text" name="uom" ></td></tr><tr>
<td>Currency</td><td>
<input type="text" name="currency" ></td>
<td>MRP</td><td>
<input type="text" name="mrp" ></td></tr>
<tr>
<td>Discount</td><td>
<input type="text" name="disc" ></td>
<td>Tax</td><td>
<input type="text" name="tax" ></td></tr>
<tr>
<td>Discount(%)</td><td>
<input type="text" name="disc1" ></td>
<td>Tax(%)</td><td>
<input type="text" name="tax1" ></td></tr>
<tr>
	<td>
							
								</td>
								
<td>Material Status</td>
						<td>
<textarea rows="3" cols="30" name="matstatus" placeholder="Material Status"></textarea></td>
							
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
