<?php
//include("backg.php");
session_start();
 // include_once("include/uchecksession.php");
  $uid = $_SESSION["uname"];
?>
<?php	
	//include("backg.php");
	include_once("include/config.php");
?>
<html>



<head>
<title>User Transactions</title>
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
					
				
<?php
//$prid = isset($_POST["prid"])?$_POST["prid"] : ' ' ;


//echo $prid;

//echo $prid;

?>


<div id="font15">
	<form name="form1" method="post" action="usertrans.php?show=1">
	

	
	From Date: &nbsp;<select name="select3">
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
										<select name="select1">
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
												<select name="select2">
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
										 &nbsp; &nbsp;&nbsp; To  Date :
											  <select name="select4">
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
										<select name="select5">
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
												
												 <select name="select6">
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
											
													
													<input type="submit" value="Show" name="button">
													</form>
													</br>
													</br>
													</br>
											
													<div id="font15">
													<div class='CSSTableGenerator'>
											  		<?php
													if(isset($_GET["show"])==1) {
														$month = isset($_POST["select1"]) ? $_POST["select1"] : ' ';
														$year = isset($_POST["select2"]) ? $_POST["select2"] :' ';
														$sday = isset($_POST["select3"]) ? $_POST["select3"] :' ';
														
														$tomonth = isset($_POST["select5"]) ? $_POST["select5"] : ' ';
														$toyear = isset($_POST["select6"]) ? $_POST["select6"] :' ';
														$today = isset($_POST["select4"]) ? $_POST["select4"] :' ';
														
														$uname = $uid;
														
														
														
														
													
													}else {
														$month = date("m");
														$year = date("Y");
														$tomonth = date("m");
														$toyear = date("Y");
														$sday = date("d");
														$today = date("d");
														$uname = " ";
														
														
													
													 }
			
				?>
	
<?php
//echo $uname;
														$date1 = $year."-".$month."-".$sday;
														$date2 = $toyear."-".$tomonth."-".$today;
													//	$date3 = $sda."-".$month."-".$sday;
													//	$date4 = $year."-".$month."-".$today;
														//echo $date1;
														//echo $date2;
														
							//echo"</table> ";
							echo "<table border='1' width='150%'><tr><td>S.No</td><td>Project Code</td><td>Username</td><td>Progress/Action</td><td>Date</td><td>Remarks</td></tr>";
						$sno = 0;
						if($uname==' '){
						$bomqry = mysql_query("select * from usertrans");
					}
					else { 
						$bomqry = mysql_query("select * from usertrans where  date between '$date1' and '$date2'"); }
						while($getbomqry = mysql_fetch_array($bomqry)){
							
							$sno++;
							$user = isset($getbomqry["uname"])? $getbomqry["uname"] : '$uname' ;
							$status = isset($getbomqry["status"])? $getbomqry["status"] : '' ;
							$remark = isset($getbomqry["remark"])? $getbomqry["remark"] : '' ;
							$prid = isset($getbomqry["prid"])? $getbomqry["prid"] : '' ;
							$date = isset($getbomqry["date"])? $getbomqry["date"] : '' ;
							$spldt = split("-",$date,3);
							$dy = $spldt[2];
							$mn = $spldt[1];
							$yr = $spldt[0];
							$dt = $dy."-".$mn."-".$yr;
							
							echo "<tr><td>".$sno."</td><td>".$prid."</td><td>".$user."</td><td>".$status."</td><td>".$dt."</td><td>".$remark."</td></tr>";
								
								
						}
						
						?>
						</table></div></div>
						


</body>
</html>
