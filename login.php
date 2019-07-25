<?php
session_start();
    if( isset($_POST['email']) and isset($_POST['password']) ) {
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
    			echo "Login Completed Successfully";

	        
	        $_SESSION['auth']=$email;
            
               	header('location: res-management.php');
    		}
    }
    ?>


