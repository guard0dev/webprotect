<?php
$user_db = "root";
$pwd = "root";
$host = "localhost"; 
$db = "manage";


//connection to the database
$dbhandle = mysql_connect($host, $user_db, $pwd)
  or die("Unable to connect to MySQL");

  mysql_select_db($db) or die
    ("Die Datenbank existiert nicht.");

?>