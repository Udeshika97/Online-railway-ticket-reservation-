<?php
include 'connect.php';

//create table
$sql="CREATE TABLE thirdclass
(Place CHAR(30),Colombo_Fort Decimal(6,2),Gampaha Decimal(6,2),Polgahawela Decimal(6,2),
	Kurunagala Decimal(6,2),Galgamuwa Decimal(6,2),Thambutthegama Decimal(6,2),Anuradhapura Decimal(6,2),
	Madawachchi Decimal(6,2),Wawniya Decimal(6,2),Kilinochchi Decimal(6,2),Palei Decimal(6,2),Kodikamam Decimal(6,2),
	Jaffnaa Decimal(6,2))";

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