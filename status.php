<?php
$empid = $_POST['empid'];
$name  =$_POST['name'];
$status = $_POST['status'];

$con=mysqli_connect("localhost","root","","resource");
if($con)
{
$sql_e = "SELECT * FROM status WHERE empid='$empid'";
$res_e = mysqli_query($con, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "<b>Sorry... Employee Status Already given,Anyway Status will be Updated </b>";
$query="UPDATE status SET status='$status' WHERE empid='$empid'";
$result=mysqli_query($con,$query);
}
else
{ 
$query="insert into status(empid,name,status) values ('$empid','$name','$status')";
$result=mysqli_query($con,$query);
echo "<b>Employee Status Updated Successfully</b>";
}
}
else
{
echo "database Connection unsuccessful";
}

?>
