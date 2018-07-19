<?php
//include("backg.php");
//   include_once("include/checksession.php");
 // $uid = $_GET["uid"];
?>
<?php	
	
	include_once("include/config.php");
?>
<html>



<head>
<title>Attendance System</title>
						<script>
							function confirmdel(){
							tell=confirm("Do You really want to delete this user?");
							if(tell) return true; 
							else return false;
							}
							function getinfo() {
								form1.action = "goodissue.php";
								form1.submit();
							}
							
						</script>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

<style>
body,td,th {
	font-family: Verdana;
	font-size: 12px;		
}
</style>						
</head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/abstract.css" rel="stylesheet" type="text/css" />
<body bgcolor="#f2f2f2">
				
					
					 <br/><br/><br/>
					
				<!--	<table width="160" id="font1" >
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
//$prid = isset($_POST["prid"])?$_POST["prid"] : ' ' ;


//echo $prid;

//echo $prid;

?>

<div id="font17"><form name='form1' action='' method='post'>
<?php
							echo"</table> ";
							echo "<table border='1'><tr></tr><tr><td>S.No</td><td>project Code</td><td>Material Code</td><td>Location Reference</td><td>Cat/Part Ref</td>
							<td>Quantity</td><td>UoM</td><td>MRP</td><td>Discount</td><td>Grand Total</td><td>Tax</td><td>Material Status</td></tr>";
						$sno = 0;
						//$bomqry1 = mysql_query("select * from material where prid='$prid'");
						$bomqry = mysql_query("select * from project");
						while($getbomqry = mysql_fetch_array($bomqry)){
							$sno++;
							$prid = isset($getbomqry["prid"])? $getbomqry["prid"] : '' ;
							$prname = isset($getbomqry["prname"])? $getbomqry["locref"] : '' ;
							$cat = isset($getbomqry["cat"])? $getbomqry["cat"] : '' ;
							$qty = isset($getbomqry["qty"])? $getbomqry["qty"] : '';
							$uom = isset($getbomqry["uom"])? $getbomqry["uom"] : '' ;
							$mrp = isset($getbomqry["mrp"])? $getbomqry["mrp"] : '' ;
							$disc = isset($getbomqry["discount"])? $getbomqry["discount"] : '' ;
							$tax = isset($getbomqry["tax"])? $getbomqry["tax"] : '' ;
							$gtotal = isset($getbomqry["gtotal"])? $getbomqry["gtotal"] : '' ;
							$mstatus = isset($getbomqry["matstatus"])? $getbomqry["matstatus"] : '' ;
							$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
							echo "<tr><td>".$sno."</td><td>".$prid."</td><td>".$matcode."</td><td>".$locref."</td><td>".$cat."</td><td>".$qty."</td><td>".$uom."</td>
							<td>".$mrp."</td><td>".$disc."</td><td>".$gtotal."</td><td>".$tax."</td><td>".$mstatus."</td></tr>";
								
								
						}
						
						?>
						</table></div></div></div>
						<br>
		<table id="font5"><tr><td>
	<button onclick="printContent('div1')">Print</button>
	</td></tr></table>


</body>
</html>
