<?php
//setting database parameters
$host = 'localhost';
$user = ' root';
$password= '';
$db = 'sos';

//connecting to the database
$con = mysql_connect($host,$user,$password);
mysqli_select_db($con,$db)

?>