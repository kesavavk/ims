<?php session_start();
if( !$_SESSION["uname"])
{
		header("Location:login.php?invalid=2");
}
if( !$_SESSION["utype"])
{
		header("Location:login.php?invalid=2");
}
?>

