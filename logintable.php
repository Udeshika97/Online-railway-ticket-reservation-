<?php
include 'connect.php';

//create table
$sql="CREATE TABLE login
(UserID CHAR(30),UserName CHAR(30),Password CHAR(30))";

//Execute query
if(mysqli_query($con,$sql))
{
	echo "Table login created successfully";
}
else
{
	echo "Error creating table: ".mysqli_error($con);
}
?>