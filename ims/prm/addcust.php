 <!DOCTYPE HTML>

<style>
.error {color: #FF0000;}
</style>
<?php
//include("backg.php");
  // include_once("include/checksession.php");
   //$uid = $_GET["uid"];
?>
<?php	
	
	include_once("include/config.php");
	//$user = isset($_GET["user"]) ? $_GET["user"] : '';
	error_reporting(E_ERROR | E_PARSE);
	//$cid = isset($_SESSION["cid"]) ? $_SESSION["cid"] : '' ;
?>

<?php   ?>
<script>
	function saveinfo() {
	
			form1.action = "insertcust.php";
			form1.submit();
	}
	function cancel() {
	form1.action ="addcust.php";
	form1.submit();Administrator
	}
	function up(lstr)
	{
		var str=lstr.value;lstr.value=str.toUpperCase();
	}
	function showUid(cid){
			document.form1.submit();
	
	}
	
	function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.uname.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>



<html>
<head>
	<script type= "text/javascript" src = "countries.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!--<link href="css/style1.css" rel="stylesheet" type="text/css" />-->
<title>Attendance System</title>
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
					
<form method="post" name="form1" onSubmit="return checkForm(this);" enctype="multipart/form-data">	
						<div  >
					<table border="0">
						
							
					<tr>
								
							<td>
							Full Name</td><td>
<input type="text" name="fname" ></td>
		<td></td><td>
							Username</td><td>
<input type="text" name="uname" id="uname" >
<?php if(isset($_GET["unm"])==1){
							echo"<center><font color='red'>username should not be empty</font></center>";
							}
	if(isset($_GET["unm1"])==1){
							echo"<center><font color='red'>username Already Exist</font></center>";
							}						
							?></td>				
	</tr>						
<tr>
<td>Password</td><td>
<input type="password" name="pwd1" id="pwd1" ></td>
				<td></td>
				<td>Confirm Password</td><td>
<input type="password" name="pwd2" id="pwd2">
<?php if(isset($_GET["pwdmt"])==1){
							echo"<center><font color='red'>Password Doesn't matched</font></center>";
							}
							if(isset($_GET["pwdm1"])==1){
							echo"<center><font color='red'>Password Should Not Be Empty</font></center>";
							}?></td></tr>
<tr><td>User Type</td><td>
<select name="utype">
<option value='1'>Administrator</option>
<option value='0'>Store User</option>
<option value='2'>Project User</option></select></td>
							
								</tr>
											
		
								</table>
								</br>
								<center>			
							<input type="button" name="button1" value=" Submit" onClick="saveinfo()">
							<input type="button" name="button2" value="Clear" onClick="cancel()">
							</center>
							</center>
							
							</form>
				
</body>
</html>
