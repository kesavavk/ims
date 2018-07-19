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
<title>Projects List</title>
						<script>
							function confirmdel(){
							tell=confirm("Do You really want to delete this Project?");
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
			form1.action = "addproject.php";
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

<div id="font15">
	<div class='CSSTableGenerator'>
	
	
	
<?php
							if(isset($_GET["del"])==1){
							echo"<center><font color='green'>The Project has been deleted</font></center>";
							}
							//echo"</table> ";
							echo "<table border='0' width='250%'><tr><td>S.No</td><td>Project Code</td><td>Project Name</td><td>Project Short Description</td><td>Project Long Description</td>
							<td>Project Ref Date</td><td>Customer-1</td><td>Contact No-1</td><td>Customer-2</td><td>Contact No-2</td><td>Project Overal Status</td><td>Final Status</td><td>Project Value</td><td>Received Amount</td><td>Outstanding Amount</td><td>Edit</td><td>Delete</td></tr>";
						$sno = 0;
						//$bomqry1 = mysql_query("select * from material where prid='$prid'");
						$bomqry = mysql_query("select * from project");
						while($getbomqry = mysql_fetch_array($bomqry)){
							$sno++;
							$prid = isset($getbomqry["prid"])? $getbomqry["prid"] : '' ;
							//echo $prid;
							$prname = isset($getbomqry["prname"])? $getbomqry["prname"] : '' ;
							$prvalue = isset($getbomqry["prvalue"])? $getbomqry["prvalue"] : '' ;
							$amtrcvd = isset($getbomqry["amtrcvd"])? $getbomqry["amtrcvd"] : '' ;
							$prsdesc = isset($getbomqry["prsdesc"])? $getbomqry["prsdesc"] : '' ;
							$prldesc = isset($getbomqry["prldesc"])? $getbomqry["prldesc"] : '';
							$prrefdate = isset($getbomqry["prrefdate"])? $getbomqry["prrefdate"] : '' ;
							$dateref = split("-",$prrefdate,3);
							$day = $dateref[2];
							$month = $dateref[1];
							$year = $dateref[0];
							$date = $day."-".$month."-".$year;
							$customer1 = isset($getbomqry["customer1"])? $getbomqry["customer1"] : '' ;
							$customer2 = isset($getbomqry["customer2"])? $getbomqry["customer2"] : '' ;
							$contact1 = isset($getbomqry["contact1"])? $getbomqry["contact1"] : '' ;
							$contact2 = isset($getbomqry["contact2"])? $getbomqry["contact2"] : '' ;
							$prodesc = isset($getbomqry["prodesc"])? $getbomqry["prodesc"] : '' ;
							$fstatus = isset($getbomqry["fstatus"])? $getbomqry["fstatus"] : '' ;
							$outstdamt = $prvalue-$amtrcvd;
							//$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
							
							
							
							
							
							echo "<tr><td>".$sno."</td><td>".$prid."</td><td>".$prname."</td><td>".$prsdesc."</td><td>".$prldesc."</td><td>".$date."</td><td>".$customer1."</td>
							<td>".$contact1."</td><td>".$customer2."</td><td>".$contact2."</td>
							<td>".$prodesc."</td><td>".$fstatus."</td><td>".$prvalue."</td><td>".$amtrcvd."</td><td>".$outstdamt."</td>
							<td><a href='editproject.php?action=1&prid=".$prid."&prname=".$prname."&prsdesc=".$prsdesc."&prldesc=".$prldesc."&date=".$prrefdate."&customer1=".$customer1."&contact1=".$contact1."&customer2=".$customer2."&contact2=".$contact2."&prodesc=".$prodesc."&fstatus=".$fstatus."&prvalue=".$prvalue."&amtrcvd=".$amtrcvd."'>Edit</a></td>
							<td><a href='deleteuser.php?action=2&prid=".$prid."' onClick='return confirmdel()'>
							Delete</a></td></tr>";
								
								
						}
						
						?>
						</table></div></div>
						<br>
						<form name='form1' action='' method='post'>
		<table id="font5"><tr>
			<td>
		<input type="button" name="button1" value="Add New Project" onClick="addnew()"></td><td>
	
	</td></tr></table>

</form>
</body>
</html>
