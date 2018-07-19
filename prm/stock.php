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
							tell=confirm("Do You really want to delete this user?");
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
<link href="css/bomlist1.css" rel="stylesheet" type="text/css" />
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
							echo "<table border='1' width='130%'><tr><td>S.No</td><td>Project Name</td><td>Material Code</td><td>Material Description</td>
							<td>Stock</td><td>UoM</td><td>Storage Location</td></tr>";
						$sno = 0;
						$prid1 = isset($_POST["prid"]) ? $_POST["prid"] : ' ';
						
						//$bomqry1 = mysql_query("select * from material where prid='$prid'");
					
						$bomqry = mysql_query("select * from bom ");
					// $bomqry = mysql_query("select * from bom "); 
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
							$mrp1 = $mrp;
							$disc2 = isset($getbomqry["discount"])? $getbomqry["discount"] : '' ;
							$tax2 = isset($getbomqry["tax"])? $getbomqry["tax"] : '' ;
							//$disc1 = isset($getbomqry["discper"])? $getbomqry["discper"] : '' ;
							//$tax1 = isset($getbomqry["taxper"])? $getbomqry["taxper"] : '' ;
							//$gtotal = isset($getbomqry["gtotal"])? $getbomqry["gtotal"] : '' ;
							$mstatus = isset($getbomqry["matstatus"])? $getbomqry["matstatus"] : '' ;
							$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;

							//$matname = isset($getbomqry["matname"])? $getbomqry["matname"] : '' ;
							$matsdesc = isset($getbomqry["matsdesc"])? $getbomqry["matsdesc"] : '' ;
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
							$strloc = isset($qtyqryres["strloc"]) ? $qtyqryres["strloc"] : ' ' ;
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
							
							if($availqty>0){
							
							echo "<tr><td>".$sno."</td><td>".$prid."</td><td>".$matcode."</td><td>".$matsdesc."</td><td>".$availqty."</td><td>".$uom."</td><td>".$strloc."</td>
							</tr>";
						}
								
								
						}
						
						?>
						</table></div></div></div>
						<br>
		

</body>
</html>
