<?php 
        $db = mysqli_connect('localhost', 'root', '', 'resource');
        if (isset($_POST['submit'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];
        $tel=$_POST['tel'];
  	$password = $_POST['password'];
  	$sql_e = "SELECT * FROM register WHERE email='$email'";
  	$res_e = mysqli_query($db, $sql_e);
  	if(mysqli_num_rows($res_e) > 0){
  	 echo "Sorry... email already taken"; 	
  	}else{
           $query = "INSERT INTO register (name, email,tel, password) 
      	    	  VALUES ('$name', '$email', '$tel','$password')";
           $results = mysqli_query($db, $query);
           echo 'Registration COmpleted Successfully';
           exit();
  	}
  }
?>
