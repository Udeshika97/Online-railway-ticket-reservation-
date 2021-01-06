<?php
include 'connect.php';

//create table
$sql="CREATE TABLE reservation
(Source CHAR(30),Destination CHAR(30),Item CHAR(30),Train_Type CHAR(30),Weight CHAR(30))";

//Execute query
if(mysqli_query($con,$sql))
{
	echo "Table reservation created successfully";
}
else
{
	echo "Error creating table: ".mysqli_error($con);
}
?>