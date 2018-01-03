<?php
$username = "bdsoul_hotelusr";
$password = "hotel4all";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work 
$db = "bdsoul_hotelmgt";
$selected = mysql_select_db($db,$dbhandle) 
  or die("Could not select database");


?>