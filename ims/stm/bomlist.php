<?php
//include("backg.php");
//   include_once("include/checksession.php");
 // $uid = $_GET["uid"];
?>
<?php	
	//include("backg.php");
	include_once("include/config.php");
?>
<html>



<head>
<title>Bill Of Material List</title>
						<script>
							function confirmdel(){
							tell=confirm("Do You really want to delete this Material?");
							if(tell) return true; 
							else return false;
							}
							function getinfo() {
								form1.action = "bomlist.php";
								form1.submit();
							}
							function addnew() {
							form1.action = "bom.php";
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
<link href="css/bomlist.css" rel="stylesheet" type="text/css" />
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


<div id="font15">
	<div class='CSSTableGenerator'><div id='div1'>
	
	
	
<?php
							//echo"</table> ";
							echo "<table border='1' width='170%'><tr><td>S.No</td><td>Project Code</td><td>Material Code</td><td>Material Description</td><td>Location Reference</td><td>Cat/Part Ref</td><td>PO No</td><td>Vendor Name</td>
							<td>BOM Quantity</td><td>Received Quantity</td><td>Rejected Quantity</td><td>Issued Quantity</td><td>Available Quantity</td><td>UoM</td><td>MRP</td><td>Discount</td><td>Tax</td><td>Grand Total</td><td>Currency</td><td>Material Status</td><td>Edit</td><td>Delete</td></tr>";
						$sno = 0;
						$prid1 = isset($_POST["prid"]) ? $_POST["prid"] : ' ';
						
						//$bomqry1 = mysql_query("select * from material where prid='$prid'");
						if($prid1==' '){
						$bomqry = mysql_query("select * from bom ");
					}
					else { $bomqry = mysql_query("select * from bom where prid = '$prid1' "); }
						while($getbomqry = mysql_fetch_array($bomqry)){
							$rcvqt =0;
						$rjqty = 0;
						$isqty = 0;
						$rcvqty = 0;
						$rjctqty = 0;
						$issqty = 0;
							$sno++;
							$prid = isset($getbomqry["prid"])? $getbomqry["prid"] : '' ;
							$locref = isset($getbomqry["locref"])? $getbomqry["locref"] : '' ;
							$cat = isset($getbomqry["cat"])? $getbomqry["cat"] : '' ;
							$qty = isset($getbomqry["qty"])? $getbomqry["qty"] : '';
							$uom = isset($getbomqry["uom"])? $getbomqry["uom"] : '' ;
							$mrp = isset($getbomqry["mrp"])? $getbomqry["mrp"] : '' ;
							$pono = isset($getbomqry["pono"])? $getbomqry["pono"] : '' ;
							$vendor = isset($getbomqry["vendor"])? $getbomqry["vendor"] : '' ;
							$mrp1 = $mrp;
							$disc2 = isset($getbomqry["discount"])? $getbomqry["discount"] : '' ;
							$tax2 = isset($getbomqry["tax"])? $getbomqry["tax"] : '' ;
							//$disc1 = isset($getbomqry["discper"])? $getbomqry["discper"] : '' ;
							//$tax1 = isset($getbomqry["taxper"])? $getbomqry["taxper"] : '' ;
							//$gtotal = isset($getbomqry["gtotal"])? $getbomqry["gtotal"] : '' ;
							$mstatus = isset($getbomqry["matstatus"])? $getbomqry["matstatus"] : '' ;
							$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
							$matname = isset($getbomqry["matname"])? $getbomqry["matname"] : '' ;
							$matsdesc = isset($getbomqry["matsdesc"])? $getbomqry["matsdesc"] : '' ;
							$matldesc = isset($getbomqry["matldesc"])? $getbomqry["matldesc"] : '' ;
							$currency = isset($getbomqry["currency"])? $getbomqry["currency"] : '' ;
							$qtyqry = mysql_query("select * from receivedgoods where matcode='$matcode' ");
						/*	if($disc2>0 ){
								$disc = $disc2;
								
							}
							else if($disc1>0){
								$disc = $mrp*($disc1/100);
								$mrp1 = $mrp - $disc;
							}else { $disc = '';}
							
							if($tax2>0){
								$tax = $tax2;

							}
							else if($tax1>0){
								$tax = $mrp1*($tax1/100);
								
							}
							else {
								$tax = '';
							}*/
							//echo $tax;
							$gtotal = $mrp-$disc2+$tax2;
							while($qtyqryres = mysql_fetch_array($qtyqry)){
							$rcvqty = isset($qtyqryres["rcvqty"]) ? $qtyqryres["rcvqty"] : ' ' ;
							$ponorcv = isset($qtyqryres["pono"]) ? $qtyqryres["pono"] : ' ' ;
							//$vendor = isset($qtyqryres["vendor"]) ? $qtyqryres["vendor"] : ' ' ;
							$rcvqt = $rcvqt + $rcvqty;
							
							$rjctqty = isset($qtyqryres["rjctqty"]) ? $qtyqryres["rjctqty"] : ' ' ;
							
							$rjqty = $rjqty + $rjctqty;
							//$issqty = isset($qtyqryres["issqty"]) ? $qtyqryres["issqty"] : ' ' ;
							//$isqty = $isqty + $issqty;
							//$gtotal = 
							
							//echo $availqty;
						}
						$qtyqry1 = mysql_query("select * from issuedgoods where matcode='$matcode' ");
							while($qtyqryres1 = mysql_fetch_array($qtyqry1)){
				
							
							$issqty = isset($qtyqryres1["issueqty"]) ? $qtyqryres1["issueqty"] : ' ' ;
							$isqty = $isqty + $issqty;
							//echo $issqty;
							
							
							//echo $availqty;
						}
						//echo $isqty;
							$availqty = $rcvqt-($rjqty+$isqty);
							
							
							
							echo "<tr><td>".$sno."</td><td>".$prid."</td><td>".$matcode."</td><td>".$matsdesc."</td><td>".$locref."</td><td>".$cat."</td><td>".$pono."</td><td>".$vendor."</td><td>".$qty."</td><td>".$rcvqt."</td><td>".$rjqty."</td>
							<td>".$isqty."</td><td>".$availqty."</td><td>".$uom."</td>
							<td>".$mrp."</td><td>".$disc2."</td><td>".$tax2."</td><td>".$gtotal."</td><td>".$currency."</td><td>".$mstatus."</td>
							<td><a href='editbom.php?action=1&prid=".$prid."&matcode=".$matcode."&matsdesc=".$matsdesc."&locref=".$locref."&cat=".$cat."&qty=".$qty."
							&mrp=".$mrp."&disc=".$disc2."&tax=".$tax2."&uom=".$uom."&mstatus=".$mstatus."&matldesc=".$matldesc."&currency=".$currency."&pono=".$pono."&vendor=".$vendor."'>Edit</a></td>
							<td><a href='deletebom.php?action=2&matcode=".$matcode."' onClick='return confirmdel()'>
							Delete</a></td></tr>";
								
								
						}
						
						?>
						</table></div></div></div>
						<br>
		<table id="font5"><tr><form name='form1' action='' method='post'>
	<td><input type="button" name="button1" value="Add Bill Of Material" onClick="addnew()"></td><td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="prid">
	<?php 
							$recordset4 = mysql_query ("select * from project");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["prid"]."'>".$record4["prname"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select>
	</td><td> <input type="button" name="button4" value="GET" onClick="getinfo()"></td></tr></table>
</form>

</body>
</html>
