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

<?php   ?>
<script>
	function saveinfo() {
	
			form1.action = "insert.php";
			form1.submit();
	}
	function cancel() {
	form1.action ="user.php?uid=<?php // echo $uid?>";
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

					<div id="font15" >
					
<form method="post" name="form1" action=" " enctype="multipart/form-data">	
						<div  >
							<h3>Project Details</h3>
					<table border="0">
						
							
					<tr>
								
								<td>
	Project Code</td><td><input type="text" name="prref" ></td>
	<td>Project_Name</td><td>
							<input type="text" name="prname" >
								</td>
	
	</tr><tr>
		<td>Short Description</td><td>
<textarea rows="1" cols="40" name="prsdesc" placeholder="Project Short Description"></textarea></td><td>Long Description</td>
<td>
<textarea rows="1" cols="40" name="prldesc" placeholder="Project Long Description"></textarea></td>
	
</tr><tr>	
<td>
	Project Ref Date</td><td><select name="prrefd">
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
										<select name="prrefm">
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
												<select name="prrefy">
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

</tr>				
		
<tr><td>Customer Name-1</td><td><input type="text" name="cname1" ></td>
<td>Contact No-1</td><td>
<input type="text" name="contact1" ></td>
</tr>
<tr><td>Customer Name-2</td><td>
<input type="text" name="cname2" ></td>
<td>Contact No-2</td><td>
<input type="text" name="contact2" ></td></tr>
<tr>
						<td>Project_Overall_Status</td><td>
<textarea rows="3" cols="30" name="prodesc" placeholder="Project Overall Status"></textarea></td><td>Final Status</td><td>
	<select name="fstatus">
		<option>OPEN</option>
		<option>CLOSED</option>
	</select>
</td>
							
						</tr>
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
