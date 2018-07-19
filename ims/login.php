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
	<div id="head1"><h1><font color="white" size="5px">Welcome to e-Project Management</font></h1>	 </div>

<div class="left_content">
	

	  <div class="contact_tab1">
		 
                            <div id="fields">
								
<form name="form1" method="post" action="verify.php" onSubmit="return verify()">
<h2><font color="white">Login Credentials</font></h2>
   
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
</body>
</html>
