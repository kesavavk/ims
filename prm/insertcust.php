
<html >
<head >
	<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Attendance System</title>
<body>
<style>
.sucess{
color:#088A08;
}
.error{
color:blue;
}
</style>	

<?php 
//include("backg.php");
	include_once("include\config.php");
	
	$ename = isset($_POST["fname"])? $_POST["fname"] : ' ' ;
	$uname = isset($_POST["uname"])? $_POST["uname"] : ' '  ;	
	$pwd1 = isset($_POST["pwd1"]) ? $_POST["pwd1"] : ' ';
	$pwd2 = isset($_POST["pwd2"]) ? $_POST["pwd2"] : ' ' ;
	$utype = isset($_POST["utype"])? $_POST["utype"] : ' ';
	echo $uname;
	echo $pwd1;
	
	$date = date('Y-m-d');
	if($uname != NULL){
		if($pwd1==NULL){
	header("Location:addcust.php?pwdm1=1");
	
}
else if($pwd1!=$pwd2){ header("Location:addcust.php?pwdmt=1");}
else { $query = "insert into user(fname,uname,pwd,utype,datec)
	values('$ename','$uname','$pwd1','$utype','$date')";
	$af = mysql_query($query);
	if($af){ header("Location:userlist.php");}
	}
}
else {header("Location:addcust.php?unm=1");}
	
?>
</div>

</body>
</head>
</html>
