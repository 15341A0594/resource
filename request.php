<?php
if( isset($_POST['client']) and isset($_POST['num']) ) {
    $dbhost="localhost"; 
    $dbuser="root"; 
    $dbpass=""; 
    $db="resource"; 
     
    $conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
    	if($conn)
{
    		$client=$_POST['client'];
    		$num=$_POST['num'];
     
    		$ret=mysqli_query( $conn, "insert into request (client,num) values('$client','$num') ");
    		echo "<center><b>Request Raised Successfully</b></center>";
}
else
echo "<center><b> DataBase Connection unsuccessfull</b></center";
}
    ?>
