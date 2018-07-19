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

<?php  ?>
<script>
	function saveinfo() {
	
			form1.action = "insertoutward.php";
			form1.submit();
	}
	function cancel() {
	form1.action ="matoutward.php";
	form1.submit();Administrator
	}
	function getinfo() {
	form1.action ="matoutward.php";
	form1.submit();
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
<title>Material Outward Movement</title>
<style>
body,td,th {
	font-family: Verdana;
	font-size: 13px;		
}
</style>
</head>
<body>

					 <br/><br/><br/>
					
								

<?php
$prid = isset($_POST["prid"])?$_POST["prid"] : ' ';
$mtcd = isset($_POST["matcode1"])?$_POST["matcode1"] : ' ';
$issuedqry = mysql_query("select * from issuedgoods where prid='$prid' and matcode='$mtcd'");
$issuedqty = 0;
//$rjctqty = 0;
while($getissqry = mysql_fetch_array($issuedqry)){
//$rcvqty1 = isset($getrcvqry["rcvqty"])? $getrcvqry["rcvqty"] : '';
$issuedqty1 = isset($getissqry["issueqty"])? $getissqry["issueqty"] : '';
$issuedqty = $issuedqty + $issuedqty1;
//$rcvqty = $rcvqty + $rcvqty1-$rjctqty;
//echo $issuedqty;
}

$rcvqry = mysql_query("select * from receivedgoods where prid='$prid' and matcode='$mtcd'");
$rcvqty = 0;
$rjctqty = 0;
$rcvqty2 = 0;
while($getrcvqry = mysql_fetch_array($rcvqry)){
$rcvqty1 = isset($getrcvqry["rcvqty"])? $getrcvqry["rcvqty"] : '';
$rjctqty1 = isset($getrcvqry["rjctqty"])? $getrcvqry["rjctqty"] : '';
$rcvqty2 = $rcvqty2 + $rcvqty1;
$rjctqty = $rjctqty + $rjctqty1;

}
$rcvqty = $rcvqty2-$rjctqty-$issuedqty;
if($pid=$_POST["prid"] && $mid = $_POST["matcode1"] ){
$bomqry = mysql_query("select * from bom where prid='$prid' and matcode='$mtcd'");
$getbomqry = mysql_fetch_array($bomqry);
$locref = isset($getbomqry["locref"])? $getbomqry["locref"] : '' ;
$cat = isset($getbomqry["cat"])? $getbomqry["cat"] : '' ;
$qty = isset($getbomqry["qty"])? $getbomqry["qty"] : '';
$uom = isset($getbomqry["uom"])? $getbomqry["uom"] : '' ;
$matcode = isset($getbomqry["matcode"])? $getbomqry["matcode"] : '' ;
if(!$getbomqry){
		header("Location:matoutward.php?nbp1=1");
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
							<h3>Material Outward Movement</h3>
					<table border="0" width="1000px">
						
						<tr><td>Material Ref</td><td><select name="prid">
	<?php 
							$recordset4 = mysql_query ("select * from project");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["prid"]."'>".$record4["prname"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select><select name="matcode1">
							<?php		$recordset4 = mysql_query ("select * from bom ");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["matcode"]."'>".$record4["matcode"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select><input type="button" name="button3" value="GET" onClick="getinfo()">
							<?php  if(isset($_GET["nbp1"])==1){
							echo"<center><font color='red'>Material code not in chosen project</font></center>";
							}
							?></td>
						<td>Project Code</td><td>
							<input type="text" name="prcode"  value='<?php echo $prid; ?>'>
								</td>
						
						</tr>
					<tr>
								
							<td>Material Code</td><td>
							<input type="text" name="matcode"  value='<?php echo $mtcd; ?>'>

							
								
							<td>Location_Reference</td><td>
							<?php echo $locref; ?></td></tr>
								<tr>
								<td>Cat/Part_No_Reference</td><td>
							<?php echo $cat; ?>
								</td>
								<td>
Short Description </td><td> <?php echo $prsdesc; ?></td></tr><tr>
<td>
Long Description </td><td><?php echo $prldesc; ?></td>
	
	<td>
	Available Quantity </td><td><input type="text" name="rcqty" value='<?php echo $rcvqty; ?>'></td></tr>
	
	
	<tr><td>UoM </td><td> <?php echo $uom; ?></td>
<td>Issuing Project</td><td><select name="issuepr">
	<?php 
							$recordset4 = mysql_query ("select * from project where fstatus='OPEN'");
							while($record4 = mysql_fetch_array($recordset4)){
							echo"<option value='".$record4["prid"]."'>".$record4["prname"]."</option>";
								}
								echo"<script>form1.select1.options[0].selected=true;</script>";
							?>
							</select></td>
</tr>
<tr><td>Issue to</td><td>
<input type="text" name="issueto" ></td>
<td>Vehicle No</td><td>
<input type="text" name="vehno" ></td></tr>
<tr>
<td>Issue Date</td><td>
<select name="issd">
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
										<select name="issm">
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
												<select name="issy">
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
</td>

<td>PO No</td><td>
<input type="text" name="pono" ></td>
</tr>
<tr>
	<td>Issue Quantity</td><td>
<input type="text" name="rcvqty" ></td>

<td>Returnable</td><td>
<select name='return'>
													<option value='NO'>No</option>
													<option value='YES'>Yes</option>
			</select>
  </td>
  </tr><tr>
  <td>Due Date</td><td>
  <?php
	  echo "
	  <select name='ddated1'>
												  <option value='--'>--</option><option value='2'>2</option>
												  <option value='3'>3</option><option value='4'>4</option>
												  <option value='5'>5</option><option value='6'>6</option>
												  <option value='7'>7</option><option value='8'>8</option>
												  <option value='9'>9</option><option value='10'>10</option>
												  <option value='11'>11</option>
												  <option value='12'>12</option><option value='13'>13</option>
												  <option value='14'>14</option><option value='15'>15</option>
												  <option value='16'>16</option><option value='17'>17</option>
												  <option value='18'>18</option><option value='19'>19</option>
												  <option value='20'>20</option><option value='21'>21</option>
												  <option value='22'>22</option><option value='23'>23</option>
												  <option value='24'>24</option>
												  <option value='25'>25</option><option value='26'>26</option>
												  <option value='27'>27</option><option value='28'>28</option>
												  <option value='29'>29</option><option value='30'>30</option>
												  <option value='31'>31</option>
												</select>
										<select name='ddatem1'>
												<option value='--'>--</option>
												  <option value='1'>January</option>
												  <option value='2'>February</option>
												  <option value='3'>March</option>
												  <option value='4'>April</option>
												  <option value='5'>May</option>
												  <option value='6'>June</option>
												  <option value='7'>July</option>
												  <option value='8'>August</option>
												  <option value='9'>September</option>
												  <option value='10'>October</option>
												  <option value='11'>November</option>
												  <option value='12'>December</option>
												</select>
												<select name='ddatey1'>
											  <option value='----'>----</option><option value='2005'>2005</option>
											  <option value='2006'>2006</option><option value='2007'>2007</option>
											  <option value='2008'>2008</option><option value='2009'>2009</option>
											  <option value='2010'>2010</option><option value='2011'>2011</option>
											  <option value='2012'>2012</option><option value='2013'>2013</option>
											  <option value='2014'>2014</option><option value='2015'>2015</option>
											  <option value='2016'>2016</option><option value='2017'>2017</option>
											  <option value='2018'>2018</option><option value='2019'>2019</option>
											  <option value='2020'>2020</option><option value='2021'>2021</option>
											  <option value='2022'>2022</option><option value='2023'>2023</option>
											  <option value='2024'>2024</option><option value='2025'>2025</option>
											  <option value='2026'>2026</option><option value='2027'>2027</option>
											  <option value='2028'>2028</option><option value='2029'>2029</option>
											  <option value='2030'>2030</option><option value='2031'>2031</option>
											  </select>
											  
											 
	  ";
  
  
  ?>
  
  </td>
  <td>Receiving Location</td><td><input type="text" name="rcvloc"></td>

</tr>
<tr><td>Remarks</td><td>
<input type="text" name="remark" ></td></tr>
								</table>
								</br>
								<center>			
							<input type="button" name="button1" value="Submit" onClick="saveinfo()">
							<input type="button" name="button2" value="Clear" onClick="cancel()">
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
