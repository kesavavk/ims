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
$prname = $_GET["prname"];
$prsdesc = $_GET["prsdesc"];
$prldesc = $_GET["prldesc"];
$date = $_GET["date"];
$customer1 = $_GET["customer1"];
$contact1 = $_GET["contact1"];
$customer2 = $_GET["customer2"];
$contact2 = $_GET["contact2"];
$prostatus = $_GET["prodesc"];
$fstatus = $_GET["fstatus"];
$amtrcvd = $_GET["amtrcvd"];
$prvalue = $_GET["prvalue"];
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
			form1.action = "updateproject.php";
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



					<div id="font1" >
					
<form method="post" name="form1" action=" " enctype="multipart/form-data">	
						<div  >
							<h3>Project Details</h3>
					<table border="0">
						
							
					<tr>
								
								<td>
	Project Ref</td><td><input type="text" name="prref" value="<?php echo $prid ?>" ></td><td></td>
	<td>Project Name</td><td>
							<input type="text" name="prname" value="<?php echo $prname ?>">
								</td>
	
	</tr><tr>
		<td>Project Short Description</td><td>
<input type="text" name="prsdesc" value="<?php echo $prsdesc ?>" ></td><td></td><td>Project Long Description</td>
<td>
<input type="text" name="prldesc" value="<?php echo $prldesc ?>" ></td>
	
</tr><tr>	
<td>
	Project Ref Date</td><td><input type="text" name="prrefd" value="<?php echo $date ?>">
											  </td>	<td></td><td></td><td></td>

</tr>				
		
<tr><td>Customer Name-1</td><td><input type="text" name="cname1" value="<?php echo $customer1 ?>"></td><td></td>
<td>Contact No</td><td>
<input type="text" name="contact1" value="<?php echo $contact1 ?>"></td>
</tr>
<tr><td>Customer Name-2</td><td>
<input type="text" name="cname2" value="<?php echo $customer2 ?>" ></td><td></td>
<td>Contact No</td><td>
<input type="text" name="contact2" value="<?php echo $contact2 ?>" ></td></tr>
<tr>
						<td>Project Overall Description</td><td>
<input type="text" name="prodesc" value="<?php echo $prostatus ?>" ></td><td></td><td>Final Status</td><td>
<input type="text" value="<?php echo $fstatus ?>" name="fstatus" ></td>
							
						</tr><tr><td>Project Value</td><td>
<input type="text" name="prvalue" value="<?php echo $prvalue ?>" ></td><td></td>
<td>Amount Received</td><td>
<input type="text" name="amtrcvd" value="<?php echo $amtrcvd ?>" ></td></tr></tr>
								</table>
								</br>
								<center>			
							<input type="button" name="button1" value=" Add Project" onClick="saveinfo()">
							<input type="button" name="button2" value="Cancel" onClick="cancel()">
							</center>
							</center>
							
							</form>
				
			</td></tr>
			
			
			
			</table>
		</td>
	</tr>
</table>
</body>
</html>
