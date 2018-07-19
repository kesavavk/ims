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
<title>Issue Goods</title>
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
function addnew() {
			form1.action = "matoutward.php";
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
<link href="css/gircpt.css" rel="stylesheet" type="text/css" />
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
$prid = isset($_POST["prid"])?$_POST["prid"] : ' ' ;
//echo $prid;
//echo $prid;
$bomqry = mysql_query("select * from bom where prid='$prid'");
$getbomqry1 = mysql_fetch_array($bomqry);

//echo $prid;



$prqry = mysql_query("select * from project where prid='$prid'");
$getprqry = mysql_fetch_array($prqry);
$prsdesc = isset($getprqry["prsdesc"]) ? $getprqry["prsdesc"] : ' ' ;
$prldesc = isset($getprqry["prldesc"]) ? $getprqry["prldesc"] : ' ' ;
//$prid1 = isset($getprqry["prid"]) ? $getprqry["prid"] : ' ' ;


//echo $prid;

?>

<div id="font4">
</div>

						<?php	
						
						 if(isset($_GET["del"])==1){
							echo"<center><font color='green'>The Issue has been deleted</font></center>";
							}
							$query = "select * from project";
							$recordset = mysql_query($query);
							echo"<body bgcolor='silver'>
							";
							
							echo "<br><center><div id='font15'><div class='CSSTableGenerator'><div id='div1'>";
							
							//while($record = mysql_fetch_array($recordset)) {
							//echo "<tr><td align='center'>".$record[""]."</td><td align='center'>".$record["dname"]."</td>
							
							//</center>";
						//	}
							//echo"</table> ";
							echo "<table border='1' width='120%'><tr><td>S.No</td><td>GI Number</td><td>Project Code</td><td>Material Code</td>
							<td>Issued To</td><td>Issue Project</td><td>Receiving Location</td><td>Issue Date</td><td>Issue Quantity</td><td>Due Date</td><td>Vehicle Number</td><td>Remarks</td><td>Edit</td><td>Delete</td></tr>";
						$sno = 0;
						if($prid==' '){
							$bomqry1 = mysql_query("select * from issuedgoods ");
						}
						else{
						$bomqry1 = mysql_query("select * from issuedgoods where prid='$prid'");
}
						while($getbomqry = mysql_fetch_array($bomqry1)){
							$sno++;
							$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
							$matdesc = isset($getbomqry["matdisc"])? $getbomqry["matdisc"] : '' ;
							$issueqty = isset($getbomqry["issueqty"])? $getbomqry["issueqty"] : ' ' ;
							$duedate1 = isset($getbomqry["duedate"])? $getbomqry["duedate"] : '';
							
							$dateref = split("-",$duedate1,3);
							$day = $dateref[2];
							$month = $dateref[1];
							$year = $dateref[0];
							if($duedate1=='0000-00-00'){
								$duedate = " ";
							}
							else{
							$duedate = $day."-".$month."-".$year;
						}
							$remark = isset($getbomqry["remarks"])? $getbomqry["remarks"] : '' ;
							$prid1 = isset($getbomqry["prid"])? $getbomqry["prid"] : '' ;
							$value = isset($getbomqry["price"])? $getbomqry["price"] : '' ;
							$prname = isset($getprqry["prname"]) ? $getprqry["prname"] : ' ' ;
							$rcvloc = isset($getbomqry["issueloc"])? $getbomqry["issueloc"] : ' ';
							$rcvperson = isset($getbomqry["issuedto"])? $getbomqry["issuedto"] : ' ' ;
							$gino1 = isset($getbomqry["gino"])? $getbomqry["gino"] : ' ' ;
							$issdate1 = isset($getbomqry["issuedate"])? $getbomqry["issuedate"] : ' ' ;
							
							$dateref = split("-",$issdate1,3);
							$day = $dateref[2];
							$month = $dateref[1];
							$year = $dateref[0];
							$issdate = $day."-".$month."-".$year;
							$vehno = isset($getbomqry["issvehno"])? $getbomqry["issvehno"] : ' ' ;
							//$rcvdept = isset($getbomqry["rcvdept"])? $getbomqry["rcvdept"] : ' ' ;
							$isspr = isset($getbomqry["isspr"])? $getbomqry["isspr"] : '';
							$strloc = isset($getbomqry["strloc"])? $getbomqry["strloc"] : '';
						//	$issuedate = isset($getbomqry["issuedate"])? $getbomqry["issuedate"] : '';
							//$strloc = isset($getbomqry["storelocation"])? $getbomqry["storelocation"] : '' ;
								if($gino1>0){
							$gino = "GI0000".$gino1;
						}
						else if($gino1>10){
							$gino = "GI000".$gino1;
							
						}
						else if($gino1>100){
							$gino = "GI00".$gino1;
						}
						else if($gino1>1000){
							$gino = "GI0".$gino1;
						}
						if($gino1>10000){
							$gino = "GI".$gino1;
						}
							echo "<tr><td>".$sno."</td><td>".$gino."</td><td>".$prid1."</td><td>".$matcode."</td>
							<td>".$rcvperson."</td><td>".$isspr."</td><td>".$rcvloc."</td><td>".$issdate."</td><td>".$issueqty."</td><td>".$duedate."</td><td>".$vehno."</td><td>".$remark."</td>
							<td><a href='editgi.php?action=1&prid=".$prid1."&gino=".$gino1."&matcode=".$matcode."&issueto=".$rcvperson."&isspr=".$isspr."&rcvloc=".$rcvloc."
							&issueqty=".$issueqty."&vehno=".$vehno."&remark=".$remark."'>Edit</a></td>
							<td><a href='deletegi.php?action=2&matcode=".$matcode."&gino=".$gino1."' onClick='return confirmdel()'>
							Delete</a></td></tr>";
								
								
						}
						
						?>
						</table></div></div></div>
						<br>
		<table id="font5"><tr>
			<form name='form1' action='' method='post'>
	<td>
	<input type="button" name="button1" value="Issue Goods" onClick="addnew()"></td>

	<td>

	
	</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	

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
                             </td>
                            
</tr></table>

</form>
</body>
</html>
