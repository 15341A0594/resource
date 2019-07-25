<?php
    if($_POST)
{
    $dbhost="localhost"; 
    $dbuser="root"; 
    $dbpass=""; 
    $db="resource"; 

     
    $conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
    	
    		$email=$_POST['email'];
    		$password=$_POST['password'];
     
    		$ret=mysqli_query( $conn, "SELECT * FROM register WHERE email='$email' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
    		$row = mysqli_fetch_assoc($ret);
    		if(!$row) {
    			echo "Invalid Email and Password";
    		}
    		else{

	        session_start();
	        $_SESSION['auth']='true';
               	header('location: jj.php');
    		}
    }
    ?>

<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  
  background-image: url("index14.jpg");


  height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</head>
<body>
<div class=bg align="center">
<image src="index19.png" height=150 align="middle">
<form action="login.php" method="POST" class="container">
<h2 style="color:blue">Login</h2>
<table height=100 class="container">
<tr>
<td style="color:blue"><b>Email</b></td>
<td>:</td>
<td><input type="email" name="email" placeholder=Email oninvalid="alert('You must give an Email id')" required ></td>
</tr>
<tr>
<td style="color:blue"><b>Password</b></td>
<td>:</td>
<td><input type="password" name="password"placeholder=Password oninvalid="alert('You must give a password')" required></td>
</tr>
</table>
<input type="submit" value="submit" style="color:blue">
</form>
</div>
</body>
</html>
