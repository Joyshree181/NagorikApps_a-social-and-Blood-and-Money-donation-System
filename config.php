<?php
$host="localhost";
$user="root";
$pass="";
$db_name="nagorikapps";
#$port=3306;

$conn=new mysqli($host,$user,$pass,$db_name);

if($conn->connect_error)
{
	die("Not connnected");
}
//else {
//	echo "connection";
//}
?>