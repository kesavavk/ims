<?php
//$connection = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("attendance", $connection);

$dbhost = "localhost";
$dbuser = "root";
$dbname = "ims";

$conn = mysql_connect($dbhost, $dbuser) or die ('Error connecting to mysql');
mysql_select_db($dbname);
?>
