<?php
$name = $_POST['name'];
$email =$_POST['email'];
$tel = $_POST['tel'];
$password =$_POST['password'];
$con=mysqli_connect("localhost","root","","resource");
if($con)
{
$sql_e = "SELECT * FROM register WHERE email='$email'";
$res_e = mysqli_query($con, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken";
}
else
{ 
$query="insert into register(name,email,tel,password) values ('$name','$email','$tel','$password')";
$result=mysqli_query($con,$query);
echo "User successfully registered!<br><a href=Login.html>login here</a>";
}
}
else
{
echo "database Connection unsuccessful";
}

?>
