<?php
$name = $_POST['name'];
$expr = $_POST['expr'];
$skills=$_POST['skills'];
$tel=$_POST['tel'];
$email =$_POST['email'];
$client=$_POST['client'];
$file=$_POST['file'];
$con=mysqli_connect("localhost","root","","resource");
if($con)
{
$sql_e = "SELECT * FROM record WHERE email='$email'";
$res_e = mysqli_query($con, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... Profile is already Exist";
}
else
{ 
$query="insert into record(name,expr,skills,tel,email,client,file) values ('$name','$expr','$skills','$tel','$email','$client','$file')";
$result=mysqli_query($con,$query);
echo "Profile Successfully Updated";
}
}
else
{
echo "database Connection unsuccessful";
}

?>
