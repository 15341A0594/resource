<?php
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$password=$_POST['password'];
if(!empty($name) || !empty($email) || !empty($tel) || !empty($password))
{
$hostname = "localhost";
$username = "root";
$password = "";
$db = "resource";
$con= new mysqli($hostname,$username,$password,$db);
if(mysqli_connect_error())
{
echo " Data Base Connection failed";
}
else
{
$query = "INSERT INTO register (name,email,tel,password) VALUES ('$name','$email','$tel','$password')";
      echo "Registration Completed Successfully.. ";
    }
}
?>
