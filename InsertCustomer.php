<?php
include 'connect.php';
$sql="INSERT INTO registration(NICorPassport,Username,Password,Repeatpassword,Firstname,Lastname,Mobile,Email,Address)
VALUES
('$_POST[nic]','$_POST[username]','$_POST[psw]','$_POST[pswrepeat]','$_POST[fname]','$_POST[lname]',
'$_POST[mobile]','$_POST[email]','$_POST[address]')";

if(!mysqli_query($con,$sql))
{
	//inbuilt function in php to print an error statement
	die('Error: '.mysqli_error($con));
}
echo "Congratulations!!! You have registered successfully";

//close connection
mysqli_close($con);
?>