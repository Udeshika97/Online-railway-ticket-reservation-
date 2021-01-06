<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
.hed{
font-size:50px;
padding-top:10px;

}

.centimg {
  margin: auto;
  padding: 10px;
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

body {
  background: #eeeeee;
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
  margin-left: 40px;
  margin-top: 40px;
  margin-right: 40px;
  margin-bottom: 40px;
  width: 1440px;
  height: 480px;
  min-height: 430px;
}
.column {
  float: left;
  padding: 15px;
}
.content {
  width: 100%;
}
.margin {
  margin: 10px;
  border: 3px solid green;
  padding: 15px;
}

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 20px 22px 0;
  display: inline-block;
  border: none;
  background: #E4E5ED;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #E4E5ED;
  outline: none;
}
.registerbtn2{
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 16px 0;
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

</style>
<link rel="style" href="style.css">
</head>
<body bgcolor="#E4E5ED">
<div style="background:#373C8D  ; height:420px; width:100%;margin-top:15px;">
	<center><p class="hed"><font color="#F6F7FB"><i>Sri Lankan Railway</i></font></p> </center>
	
    <img src="download.png" class="margin" height="250px" width="250px" align="left;">
	<img src="t10.jpg" class="margin" height="250px" width="885px" align="left;">
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
	
	<div style="background:#373C8D  ; height:600px; width:100%; margin-top:15px;">
	<div class="panel panel1 small">
	<img src="t9.jpg" class="margin" height="428px" width="360px" align="left;">
	<div style="width:60%; float:right; height:390px; background:white; margin-top:8px; padding:35px;">
	<h1 align="center">Login</h1>
	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required><br/><br/>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br/><br/>
	
	<button type="submit" class="registerbtn">Login</button>
	 <button type="submit" class="registerbtn1">Cancel</button>
</div>
	
</body>
</html>