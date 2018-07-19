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
	<script>
							
							function addnew() {
							form1.action = "addcust.php";
							form1.submit();
			}
			function addtran() {
							form1.action = "addtrans.php";
							form1.submit();
			}
			function trans() {
							form1.action = "usertrans.php";
							form1.submit();
			}
			
							
						</script>
<title>User List</title>
						

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
					
				
<?php


?>


<div id="font15">
	<form name="form1" method="post" action="userlist.php?show=1">
	<div class='CSSTableGenerator'>
		
<?php
														
														
							//echo"</table> ";
							echo "<table border='1' width='150%'><tr><td>S.No</td><td>Full Name</td><td>User Type</td><td>Username</td><td>Password</td></tr>";
						$sno = 0;
					
						$bomqry = mysql_query("select * from user");
						while($getbomqry = mysql_fetch_array($bomqry)){
							
							$sno++;
							$user = isset($getbomqry["uname"])? $getbomqry["uname"] : ' ' ;
							$fname = isset($getbomqry["fname"])? $getbomqry["fname"] : '' ;
							$type = isset($getbomqry["utype"])? $getbomqry["utype"] : '' ;
							if($type=='1'){
								$utype = "Administrator";
							}
							else if($type=='0'){
								$utype = "Normal User";
							}
							$pwd = isset($getbomqry["pwd"])? $getbomqry["pwd"] : '' ;
							//$date = isset($getbomqry["date"])? $getbomqry["date"] : '' ;
							
							echo "<tr><td>".$sno."</td><td>".$fname."</td><td>".$utype."</td><td>".$user."</td><td>".$pwd."</td></tr>";
								
								
						}
						
						?>
						</table></div></div>
						<table id="font5"><tr>
	<td><input type="button" name="button1" value="Add User" onClick="addnew()"></td>
	<td><input type="button" name="button3" value="Add Transaction" onClick="addtran()"></td>
	<td><input type="button" name="button2" value="User Transactions" onClick="trans()"></td>
	
	</tr></table>
						
</form>

</body>
</html>
