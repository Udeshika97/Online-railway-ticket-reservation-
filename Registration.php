<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<style>
.hed{
font-size:50px;
padding-top:10px;

}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #373C8D;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 15px 40px;
  text-decoration: none;
}

li a:hover {
  background-color: green;
}

.panel {
  display: inline-block;
  background: #E4E5ED;
  min-height: 500px;
  height: 500px;
  padding: 20px;
}
.panel1 {
  min-width: 800px;
  width: 800px;
}
.small {
  margin-left: 20px;
  margin-top: 20px;
  margin-right: 20px;
  margin-bottom: 20px;
  width: 1482px;
  height: 1240px;
  min-height: 500px;
}

.margin {
  margin: 10px;
  border: 3px solid green;
  padding: 15px;
}

/* Add padding to containers */
.container {
  padding: 40px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 45%;
  padding: 15px;
  margin: 5px 20px 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
  margin-right: 650px;
  }

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 45%;
  opacity: 0.9;
}

.registerbtn1{
  background-color: red;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 45%;
  opacity: 0.9;
}

.registerbtn2{
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
</style>
<link rel="style" href="style.css">
</head>
<body bgcolor="#E4E5ED">
<div style="background:#373C8D  ; height:420px; width:100%;margin-top:15px;">
	<center><p class="hed"><font color="#F6F7FB"><i>Sri Lankan Railway</i></font></p> </center>
	
    <img src="download.png" class="margin" height="250px" width="250px" align="left;">
	<img src="t5.jpg" class="margin" height="250px" width="885px" align="left;">
	<img src="download.png" class="margin" height="250px" width="250px" align="left;">
</div>

<div style="background:#373C8D  ; height:50px; width:100%; margin-top:15px;">
	<ul>
  <li><a href="Home.html">Home</a></li>
  <li><a href="Registration.html">Registration</a></li>
  <li><a href="Schedules.html">Schedules</a></li>
  <li><a href="Reservation.html">Reservation</a></li>
  <li><a href="ContactUs.html">Contact Us</a></li>
</ul>
	</div>
	
	<div style="background:#373C8D  ; height:1320px; width:100%; margin-top:15px;">
	<div class="panel panel1 small">
	<form action="Reservation.php">
  <div class="container" width="100px">
   <div style="width:47%; float:right; height:1082px; background:#373C8D; margin-top:8px; padding:25px;">
   <div style="width:92%; float:right; height:250px; background:white; margin-top:8px; padding:25px;">
   <h1 align="center">Already have an account?<br/><br/>Login to the system for reservations</h1><br/>
   <button type="submit" class="registerbtn2" align="center">Click Here</button>
   </form>
   </div>
   
   <div style="width:92%; float:right; height:712px; background:#E4E5ED; margin-top:8px; padding:25px;">
   <img src="t6.jpg" class="margin" height="300px" width="550px" align="left;">
   <img src="t7.jpg" class="margin" height="300px" width="550px" align="left;">
   </div>
   
   </div>
    <h1>Sign In</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<form name="registration" id="registration" method="post" action="InsertCustomer.php">
	
	<label for="nic"><b>NIC/Passport ID</b></label><br/>
    <input type="text" placeholder="Enter NIC number or passport id(Do not include letters)" name="nic" id="nic" required><br/>
	
	<label for="username"><b>Username</b></label><br/>
    <input type="text" placeholder="Enter username for you" name="username" id="username" required><br/>

    <label for="psw"><b>Password</b></label><br/>
    <input type="password" placeholder="Enter Password(Maximum 8 characters)" name="psw" id="psw" required><br/>

    <label for="pswrepeat"><b>Repeat Password</b></label><br/>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required><br/>
	
	<label for="fname"><b>First Name</b></label><br/>
    <input type="text" placeholder="Enter first name" name="fname" id="fname" required><br/>
	
	<label for="lname"><b>Last Name</b></label><br/>
    <input type="text" placeholder="Enter last name" name="lname" id="lname" required><br/>
	
	<label for="mobile"><b>Mobile</b></label><br/>
    <input type="text" placeholder="Enter phone number" name="mobile" id="mobile" required><br/>
	
	 <label for="email"><b>Email</b></label><br/>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br/>
	
	<label for="address"><b>Address</b></label><br/>
    <input type="text" placeholder="Enter address" name="address" id="address" required><br/>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button><br/>
	 <button type="submit" class="registerbtn1">Cancel</button>
	 </form>
	
  </div>
  
  
</form>
	 </div>
</div>
	
</body>
</html>