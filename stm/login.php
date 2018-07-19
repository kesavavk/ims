<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	include_once("include/config.php");
	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html;">
<style type="text/css">
</style>
</head>
<body>
<div class="left_content">
	  <div class="contact_tab1">
                            <div id="fields">
<form name="form1" method="post" action="verify.php" onSubmit="return verify()">
<h2><font color="white">Admin Login</font></h2>
   
   <?php 
	
	
	echo "<script language = 'javascript'>";
	echo "function verify(){
	login = form1.textfield1.value;
	password = form1.textfield2.value;
	if(login == ''){
	alert('Enter Login ');
	form1.textfield1.focus();
	return false;
					}
	if(password == ''){
	alert('Enter Password');
	form1.textfield2.focus();
	return false;
					}
	}
		function clearvalues(){
			 form1.textfield1.value='';
	     	 form1.textfield2.value='';
		     form1.textfield1.focus();
		}	
		
</script>";					
?>	
<!--
<?php/*
if($_GET["invalid"]==1)
	echo"<tr><td></td><td><font color='red'>Incorrect Information!</font></td></tr>";
if($_GET["invalid"]==2)
	echo "<tr><td></td><td><font color=blue>Session Expired!</font></td></tr>";
	*/
?>
-->
<label for="regid" class="uname"  >Login ID </label>
<input type = "text" name="textfield1" >
<br /><br>
 <label for="password" class="youpasswd" data-icon="p"> Password </label>
 <input type = "password" name="textfield2" >



</div>
  <input type="submit" class="reg" name="submit1" value="  Login  ">  
  <input type="button" class="reg" name="button1" value="  Clear " onClick="clearvalues()"></td>





<?php 
	echo "<script> 
	form1.textfield1.focus();
	</script>";
?>
 
</form>

</div></div>
<div style="transparent; position: fixed; width: 78%; bottom: -5px; left: 134px; height:20px; color: white; -moz-box-shadow: 0pt 0pt 10px white;-moz-border-radius-topleft:12px; -moz-border-radius-topright:12px;"><center><font color="white" size="1"><b>Copyrights &copy;  <a href="http://www.spl.com">SPL/IT,</a>2015-2016 - All rights reserved</font></b></font></center></div>
</body>
</html>
