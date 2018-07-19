<?php
//include("backg.php");
//   include_once("include/checksession.php");
 // $uid = $_GET["uid"];
?>
<?php	
//	include("backg.php");
	include_once("include/config.php");
?>
<html>



<head>
<title>Goods Receipt</title>
						<script>
							function confirmdel(){
							tell=confirm("Do You really want to delete this user?");
							if(tell) return true; 
							else return false;
							}
							function getinfo() {
								form1.action = "goodreceipt.php";
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
function addnew() {
			form1.action = "matinward.php";
			form1.submit();
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
<link href="css/grcpt.css" rel="stylesheet" type="text/css" />

<body bgcolor="#f2f2f2">
					
					 <br/><br/><br/>
					
			
<?php
$prid = isset($_POST["prid"])?$_POST["prid"] : ' ';
$bomqry = mysql_query("select * from bom where prid='$prid'");
$getbomqry1 = mysql_fetch_array($bomqry);
$vendor = $getbomqry1["vendor"];
$pono = $getbomqry1["pono"];
$matdesc = $getbomqry1["matsdesc"];



$prqry = mysql_query("select * from project where prid='$prid'");
$getprqry = mysql_fetch_array($prqry);
$prsdesc = isset($getprqry["prsdesc"]) ? $getprqry["prsdesc"] : '';
$prldesc = isset($getprqry["prldesc"]) ? $getprqry["prldesc"] : '';
$prname = isset($getprqry["prname"]) ? $getprqry["prname"] : '';

//echo $prid;


?>
<div id="font4">
</div>
						<?php	
						
						 if(isset($_GET["del"])==1){
							echo"<center><font color='green'>The user has been deleted</font></center>";
							}
							$query = "select * from project";
							$recordset = mysql_query($query);
							echo"<body bgcolor='silver'>
							";
							
							echo "<br><center><div id='font15'><div class='CSSTableGenerator'><div id='div1'>
							";
							//while($record = mysql_fetch_array($recordset)) {
							//echo "<tr><td align='center'>".$record[""]."</td><td align='center'>".$record["dname"]."</td>
							
							//</center>";
						//	}
							//echo"</table>";
							echo "<table border='1' width='130%'><tr><td>S.No</td><td>GR Number</td><td>Project Code</td><td>Material Code</td>
							<td>Receiving Person</td><td>Receiving Location</td>
							<td>Receiving Date</td><td>Vehicle Number</td><td>Quantity Received</td><td>Quantity Rejected</td><td>Storage Location</td><td>Remarks</td><td>Edit</td><td>Delete</td></tr>";
						$sno = 0;
						if($prid==' '){
						$bomqry1 = mysql_query("select * from receivedgoods ");	
						}
						else{
						$bomqry1 = mysql_query("select * from receivedgoods where prid='$prid'");
					}

						while($getbomqry = mysql_fetch_array($bomqry1)){
							$sno++;
							$rcvloc = isset($getbomqry["rcvloc"])? $getbomqry["rcvloc"] : '';
							$rcvperson = isset($getbomqry["rcvperson"])? $getbomqry["rcvperson"] : '' ;
							$rdate1 = isset($getbomqry["rdate"])? $getbomqry["rdate"] : '' ;
							
							$dateref = split("-",$rdate1,3);
							$day = $dateref[2];
							$month = $dateref[1];
							$year = $dateref[0];
							$rdate = $day."-".$month."-".$year;
							$vehno = isset($getbomqry["vehicleno"])? $getbomqry["vehicleno"] : '' ;
							$prid1 = isset($getbomqry["prid"])? $getbomqry["prid"] : '' ;
							//$vendor = isset($getbomqry["vendor"])? $getbomqry["vendor"] : '';
							$supname = isset($getbomqry["supname"])? $getbomqry["supname"] : '' ;
							$grno1 = isset($getbomqry["grno"])? $getbomqry["grno"] : '' ;
							$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
							//$matdesc = isset($getbomqry["matdisc"])? $getbomqry["matdisc"] : '' ;
							$rcvqty = isset($getbomqry["rcvqty"])? $getbomqry["rcvqty"] : '' ;
							$rjctqty = isset($getbomqry["rjctqty"])? $getbomqry["rjctqty"] : '' ;
							//$pono = isset($getbomqry["pono"])? $getbomqry["pono"] : '';
							$remark = isset($getbomqry["remarks"])? $getbomqry["remarks"] : '' ;
							$prname = isset($getprqry["prname"]) ? $getprqry["prname"] : ' ' ;
							$strloc = isset($getbomqry["strloc"])? $getbomqry["strloc"] : '' ;
							
							if($grno1>0){
							$grno = "GR0000".$grno1;
						}
						else if($grno1>10){
							$grno = "GR000".$grno1;
							
						}
						else if($grno1>100){
							$grno = "GR00".$grno1;
						}
						else if($grno1>1000){
							$grno = "GR0".$grno1;
						}
						if($grno1>10000){
							$grno = "GR".$grno1;
						}
							echo "<tr><td>".$sno."</td><td>".$grno."</td><td>".$prid1."</td><td>".$matcode."</td><td>".$rcvperson."</td><td>".$rcvloc."</td><td>".$rdate."</td>
							<td>".$vehno."</td><td>".$rcvqty."</td><td>".$rjctqty."</td><td>".$strloc."</td><td>".$remark."</td>
							<td><a href='editgr.php?action=1&prid=".$prid1."&matcode=".$matcode."&matdesc=".$matdesc."&rcvperson=".$rcvperson."&rcvloc=".$rcvloc."
							&rdate=".$rdate."&vehno=".$vehno."&rcvqty=".$rcvqty."&rjctqty=".$rjctqty."&remark=".$remark."&strloc=".$strloc."&grno=".$grno1."'>Edit</a></td>
							<td><a href='deletegr.php?action=2&matcode=".$matcode."&rcvqty=".$rcvqty."&rjctqty=".$rjctqty."&grno=".$grno1."' onClick='return confirmdel()'>
							Delete</a></td></tr>";
							
							
						}
						?>
						</table></div></div></div>
						<br>

<table id="font5"><tr>
	<form name='form1' action='' method='post'>
<td>
	<input type="button" name="button1" value="Receive Goods" onClick="addnew()">
</td><td>
	
	</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Select Project
	<select name="prid">
	<?php 
							$recordset4 = mysql_query ("select * from project");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["prid"]."'>".$record4["prname"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select>
	</td><td> <input type="button" name="button4" value="GET" onClick="getinfo()">
                             </td></tr>
                             <!-- <tr><td> <input type="button" name="button1" value="Add Employee" onClick="addnew()">
                             </td></tr>
                            <tr><td> <input type="button" name="button2" value="Add Contractor" onClick="addcontractor()">
                             </td></tr>
                              
                             <tr><td> <input type="button" name="button4" value="Add Section" onClick="addsec()">
                             </td></tr> -->
                             </td></tr></table>
                            
</tr></table>
</form>
</body>
</html>
