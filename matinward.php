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

<?php  /*
	$idErr = $nameErr = $qualErr = $prevexpErr =$bankErr =$esinoErr =$casteErr =$pfnoErr =$streetErr =$cityErr =$districtErr =$stateErr  =$msErr =$secErr =$divErr =$designErr =$wageErr =$dobErr = "";
$name = $id = $qu = $prev = $bank =$cst =$esi =$pf =$str =$ct =$dis =$st =$mst =$secs =$divs =$desig =$wag =$db = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["uid"])) {
     $idErr = "Employee ID is required";
   } else {
     $id = test_input($_POST["uid"]);
   }
  
   if (empty($_POST["ename"])) {
     $emailErr = "Employee Name is required";
   } else {
     $email = test_input($_POST["ename"]);
   }
    
   if (empty($_POST["qual"])) {
     $qualErr = "Qualification is required";
   } else {
     $qu = test_input($_POST["qual"]);
   }
   if (empty($_POST["prevexp"])) {
     $prevexpErr = "Qualification is required";
   } else {
     $prev = test_input($_POST["prevexp"]);
   }
   if (empty($_POST["dob"])) {
     $dobErr = "Date Of Birth is required";
   } else {
     $db = test_input($_POST["dob"]);
   }
   if (empty($_POST["wage"])) {
     $wageErr = "Wage is required";
   } else {
     $wag = test_input($_POST["wage"]);
   }
   if (empty($_POST["division"])) {
     $divErr = "Division is required";
   } else {
     $divs = test_input($_POST["division"]);
   }
   if (empty($_POST["section"])) {
     $secErr = "Section is required";
   } else {
     $secs = test_input($_POST["section"]);
   }
    if (empty($_POST["design"])) {
     $designErr = "Designation is required";
   } else {
     $desig = test_input($_POST["design"]);
   }
    if (empty($_POST["ms"])) {
     $msErr = "Marital Status is required";
   } else {
     $mst = test_input($_POST["ms"]);
   }
  
    if (empty($_POST["city"])) {
     $cityErr = "City is required";
   } else {
     $ct = test_input($_POST["city"]);
   }

  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


*/ ?>
<script>
	function saveinfo() {
	/*	
		ename = form1.ename.value;
		uid = form1.uid.value;
		qual = form1.qual.value;
		design = form1.design.value;
		wage = form1.wage.value;
		city = form1.city.value;
		street = form1.street.value;
		pfno = form1.pfno.value;
		esino = form1.esino.value;
		bank = form1.bank.value;
		
		if(uid==""){
		alert("Enter Employee ID");
		form1.uid.focus();
		return;
		}
		if(ename==""){
		alert("Enter Employee name");
		form1.ename.focus();
		return;
		}
		if(qual==""){
		alert("Enter Qualification");
		form1.qual.focus();
		return;
		}
		
		if(wage==""){
		alert("Enter Wage");
		form1.wage.focus();
		return;
		}
		if(design==""){
		alert("Select Designation");
		form1.design.focus();
		return;
	}
	
	if(city==""){
		alert("Enter City/Town");
		form1.city.focus();
		return;
		}
		if(street==""){
		alert("Enter Village/Street");
		form1.street.focus();
		return;
		}
		if(pfno==""){
		alert("Enter PF no");
		form1.pfno.focus();
		return;
		}
		if(esino==""){
		alert("Enter ESI No");
		form1.esino.focus();
		return;
		}
		if(bank==""){
		alert("Enter Bank Account No");
		form1.bank.focus();
		return;
		} 
		
		*/
			form1.action = "insertinward.php";
			form1.submit();
	}
	
	function cancel() {
	form1.action ="matinward.php";
	form1.submit();Administrator
	}
	function getinfo() {
	form1.action ="matinward.php";
	form1.submit();
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
<title>Material Inward Movement</title>
<style>
body,td,th {
	font-family: Verdana;
	font-size: 13px;		
}
</style>
</head>
<body>

					 <br/><br/><br/>
					
								<!--<table width="160" id="font1" >
						<tr>
						   <td colspan="4" valign="top"><a href="oldcontmaster.php?uid=<?//=$uid?>"><h2>Contractor Master</h2></a></td>
						   

						  </tr>
						<tr> </tr><tr> </tr><tr> </tr><tr> </tr>	<tr> </tr><tr> </tr>
						<!--<tr>
						   <td colspan="4" valign="top"><a href="oldmaster.php?uid=<?//=$uid?>"><h2>Old Emplooyee Master</h2></a></td>
						   

						  </tr>
						  	<tr> </tr><tr> </tr><tr> </tr><tr> </tr>	<tr> </tr><tr> </tr>
						<tr>
						   <td colspan="4" valign="top"><a href="aureports.php?uid=<?//=$uid?>"><h2>Employee Master</h2></a></td>
						   

						  </tr>
						  	<tr> </tr><tr> </tr><tr> </tr><tr> </tr>	<tr> </tr><tr> </tr>
						  <tr>
						   <td colspan="5" valign="top"><a href="user.php?uid=<?//=$uid?>"><h2>Manage Masters</h2></a></td>
						 
						  </tr>
					
						 
					</table>-->

<?php
$prid = isset($_POST["prid"])?$_POST["prid"] : ' ';

$mtcd = isset($_POST["matcode1"])?$_POST["matcode1"] : ' ';

//echo $bomq["prid"];
	if($pid=$_POST["prid"] && $mid = $_POST["matcode1"] ){
		//echo $_POST["prid"];
		$bocheck = mysql_query("select * from receivedgoods where prid='$pid' and matcode='$mid'");
		$bomq = mysql_fetch_array($bocheck);
		
		
	
$bomqry = mysql_query("select * from bom where prid='$prid' and matcode = '$mtcd'");
$getbomqry = mysql_fetch_array($bomqry);
$locref = isset($getbomqry["locref"])? $getbomqry["locref"] : '' ;
$cat = isset($getbomqry["cat"])? $getbomqry["cat"] : '' ;
$qty = isset($getbomqry["qty"])? $getbomqry["qty"] : '';
$uom = isset($getbomqry["uom"])? $getbomqry["uom"] : '' ;
$vendor = isset($getbomqry["vendor"])? $getbomqry["vendor"] : '' ;
$pono = isset($getbomqry["pono"])? $getbomqry["pono"] : '' ;
if(!$getbomqry){
		header("Location:matinward.php?nbp=1");
	}
$prqry = mysql_query("select * from project where prid='$prid'");
$getprqry = mysql_fetch_array($prqry);
$prsdesc = isset($getprqry["prsdesc"]) ? $getprqry["prsdesc"] : '';
$prldesc = isset($getprqry["prldesc"]) ? $getprqry["prldesc"] : '';
$prname = isset($getprqry["prname"]) ? $getprqry["prname"] : '';
}


?>

					<div id="font15" >
					
<form method="post" name="form1" action=" " enctype="multipart/form-data">	
						<div  >
							<tr><td><h3>Material Inward Movement</h3></td></tr>
					<table border="0" width="100px">
						
						<tr><td>Material Ref</td><td><select name="prid">
	<?php 
							$recordset4 = mysql_query ("select * from project");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["prid"]."'>".$record4["prname"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select>
							<select name="matcode1">
	<?php 
							$recordset4 = mysql_query ("select * from bom");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["matcode"]."'>".$record4["matcode"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select><input type="button" name="button3" value="GET" onClick="getinfo()">
							<?php if(isset($_GET["nbp"])==1){
							echo"<center><font color='red'>Material code not in chosen project</font></center>";
							}
							
							?></td>
						<td>Project Name</td><td>
							<?php echo $prname; ?>
								</td>
						
						</tr>
						<tr>
								
							<td>Project Code</td><td>
							<input type="text" name="prid1"  value='<?php echo $prid; ?>'></td></td>
								
							<td>Material Code</td><td>
							
							<input type="text" name="matcode"  value='<?php echo $mtcd; ?>'></td></tr>
							
					<tr>
								
							<td>Location_Reference</td><td>
							<?php echo $locref; ?></td>
								<td>Cat/Part_No_Reference</td><td>
							<?php echo $cat; ?>
								</td>
								</tr>
								
								<tr><td>
Short_Description </td><td> <?php echo $prsdesc; ?></td>
<td>
Long Description </td><td><?php echo $prldesc; ?></td>
	
	</tr>						
	<tr><td>
	Quantity </td><td> <?php echo $qty; ?></td>
	<td>UoM </td><td> <?php echo $uom; ?></td>
	
	</tr><tr>
<td>Receiving Location</td><td>
<input type="text" name="rcvloc" ></td>
<td>Receiving Person</td><td>
<input type="text" name="rcvper" ></td></tr>
<tr>
<td>Vehicle No</td><td>
<input type="text" name="vehno" ></td>
<td>Storage Location</td><td>
<input type="text" name="strloc" ></td>
</tr><tr>
<td>Vendor Name</td><td>
<?php echo $vendor;   ?></td>
<td>Receiving Date</td><td>
<select name="rcvd">
												  <option value="1">1</option><option value="2">2</option>
												  <option value="3">3</option><option value="4">4</option>
												  <option value="5">5</option><option value="6">6</option>
												  <option value="7">7</option><option value="8">8</option>
												  <option value="9">9</option><option value="10">10</option>
												  <option value="11">11</option>
												  <option value="12">12</option><option value="13">13</option>
												  <option value="14">14</option><option value="15">15</option>
												  <option value="16">16</option><option value="17">17</option>
												  <option value="18">18</option><option value="19">19</option>
												  <option value="20">20</option><option value="21">21</option>
												  <option value="22">22</option><option value="23">23</option>
												  <option value="24">24</option>
												  <option value="25">25</option><option value="26">26</option>
												  <option value="27">27</option><option value="28">28</option>
												  <option value="29">29</option><option value="30">30</option>
												  <option value="31">31</option>
												</select>
										<select name="rcvm">
												  <option value="1">January</option>
												  <option value="2">February</option>
												  <option value="3">March</option>
												  <option value="4">April</option>
												  <option value="5">May</option>
												  <option value="6">June</option>
												  <option value="7">July</option>
												  <option value="8">August</option>
												  <option value="9">September</option>
												  <option value="10">October</option>
												  <option value="11">November</option>
												  <option value="12">December</option>
												</select>
												<select name="rcvy">
											  <option value="2004">2004</option><option value="2005">2005</option>
											  <option value="2006">2006</option><option value="2007">2007</option>
											  <option value="2008">2008</option><option value="2009">2009</option>
											  <option value="2010">2010</option><option value="2011">2011</option>
											  <option value="2012">2012</option><option value="2013">2013</option>
											  <option value="2014">2014</option><option value="2015">2015</option>
											  <option value="2016">2016</option><option value="2017">2017</option>
											  <option value="2018">2018</option><option value="2019">2019</option>
											  <option value="2020">2020</option><option value="2021">2021</option>
											  <option value="2022">2022</option><option value="2023">2023</option>
											  <option value="2024">2024</option><option value="2025">2025</option>
											  <option value="2026">2026</option><option value="2027">2027</option>
											  <option value="2028">2028</option><option value="2029">2029</option>
											  <option value="2030">2030</option><option value="2031">2031</option>
											  </select>
</td></tr>
<tr>
<td>PO No</td><td>
<?php echo $pono;   ?></td>

	<td>Quantity Received</td><td>
<input type="text" name="rcvqty" ></td></tr><tr>
<td>Quantity Rejected</td><td>
<input type="text" name="rjctqty" ></td>
<td>Remarks</td><td>
<input type="text" name="remark" ></td>
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
